<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-28
 * Time: 22:06
 */

namespace app\common\model;


class User extends Base
{


    public function addUser($data){

        return $this->insertGetId($data);
    }
    public function isUser($token,$type){

        return $this->where(['token'=>$token,'type'=>$type])->find();
    }
    public function amendUser($id,$data){

        return $this->where('id', $id)->update($data);

    }
    public function memberInfo($where){

        return $this->where($where)->find();

    }

}