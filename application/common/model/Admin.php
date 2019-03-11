<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 17:00
 */

namespace app\common\model;


class Admin extends Base
{
    public function login($data){
        $info = $this->where('username',$data['username'])->find();
        if(password_verify($data['password'],$info['password'])){
           return $info->toArray();
        }else{
            return 0;
        }
    }


}