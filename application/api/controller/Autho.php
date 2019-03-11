<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-27
 * Time: 19:10
 */

namespace app\api\controller;

use think\Request;
use kuange\QC;


class Autho extends Base
{

    protected $blogUrl = "http://www.noahzhou.com/qqlogin.html?autho=";

    public function autho(){

        $record = Request::instance()->param();
        if($record['type'] == 1){//qq授权
           $qc = new QC();
           return $this->redirect($qc->qq_login());
        }

    }

    public function login(){

        $qc = new QC();
        $access_token = $qc->qq_callback();
        $openid = $qc->get_openid();
        $user = json_decode(CurlGet("https://graph.qq.com/user/get_user_info?access_token=" . $access_token . "&oauth_consumer_key=" . Config('qqconnect.appid') . "&openid=" . $openid),true);

        $attribute = [
            'figureurl' => $user['figureurl'],
            'gender' => $user['gender'],
            'province' => $user['province'],
            'city' => $user['city'],
            'year' => $user['year'],
            'constellation' => $user['constellation'],
            'figureurl_qq_2' => $user['figureurl_qq_2']
        ];

        $info = [
            'type' => 1,
            'portrait'=> $user['figureurl_1'],
            'attribute' => json_encode($attribute),
            'nickname' => $user['nickname'],
            'token' => $openid,
            'login_time' => date('Y-m-d H:i:s'),
            'login_ua' => $_SERVER['HTTP_USER_AGENT'],
            'login_ip' => $_SERVER["REMOTE_ADDR"]
        ];

        //在这里判断数据中是否有 此用户 如果有那么就是修改 如果没有那么就是添加 并返回信息
        $userModel = model('common/User');
        $isUser = $userModel->isUser($openid,1);
        $userId = '';
        if($isUser){
            $amen = $userModel->amendUser($isUser['id'],$info);
            $userId = $isUser['id'];
        }else{
            $info['add_time'] = date('Y-m-d H:i:s');
            $userId = $userModel->addUser($info);
        }

        $this->redirect($this->blogUrl.$userId);
    }

    public function testq(){
        return view();
    }


}