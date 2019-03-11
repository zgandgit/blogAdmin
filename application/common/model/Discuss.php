<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-29
 * Time: 20:17
 */

namespace app\common\model;


class Discuss extends Base
{

    //关联会员查询
    public function user()
    {
        return $this->hasOne('user','id','uid', 'left');
    }

    //查询评论列表
    public function discuss($condition){
        $query = $this;
        $query->with('user');
        $query->where($condition);
        $data = $query->select();
        return $data->toArray();
    }

    //添加评论
    public function addDiscuss($data){

        $id = $this->insertGetId($data);
        $query = $this;
        $query->with('user');
        $data = $query->where(['id'=>$id])->find();
        return $data->toArray();
    }



}