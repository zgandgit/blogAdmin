<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-25
 * Time: 20:30
 */

namespace app\admin\controller;


use think\Controller;
use think\Cookie;
use think\Request;

class Register extends Controller
{

    public function login(){

        $data = Request::instance()->post();
        if($data){
            $info = model('common/Admin')->login($data);
            if($info != 0){//验证成功
                // 设置Cookie 有效期为 3600秒
                Cookie::set('login',$info['id'],72000);
                $this->redirect('Index/index');die;
            }
        }
        Cookie::delete('login');
        return view();
    }

}