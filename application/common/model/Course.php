<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-19
 * Time: 19:41
 */

namespace app\common\model;


class Course extends Base
{

    public function resource()
    {
        return $this->hasOne('Resource','id','cover', 'left');
    }

    //获取所有教程列表
    public function courseList(){
        $rows = $this;
        $rows->alias('a');
        $rows->join('resource b','a.cover = b.id','left');
        $rows->field('a.*,b.url as cove_url');
        return $this->select();
    }



    public function apiList($record,$where = []){

        $query = $this;
        $query->with('resource');
        $query->where($where);
        $data = $query->paginate($record['num'],false,[
            'page'     => $record['page']
        ]);

        return $data->toArray();

    }

}