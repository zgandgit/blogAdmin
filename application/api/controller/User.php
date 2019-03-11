<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-28
 * Time: 22:38
 */

namespace app\api\controller;


use think\Request;

class User extends Base
{

    public function memberInfo(){
        //查询条件 最新 最热 评论 分类
        $record = Request::instance()->post();
        if(empty($record['uid']) || empty($record['type'])){
            return ajReturn([], '没有此会员',1000);
        }else{
            $userModel = model('common/User');
            $data = $userModel->memberInfo(['id'=>$record['uid'],'type'=>$record['type']]);
            return ajReturn($data, 'ok');
        }

    }

}