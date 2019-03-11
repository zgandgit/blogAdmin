<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-21
 * Time: 19:23
 */

namespace app\common\model;


class CourseArtice extends Base
{
    public function article()
    {
        return $this->hasOne('Article','id','aid', 'left');
    }

    //更新设置新文档
    public function updateCourseArticle($cid){

        $rows = $this;
        $rows->alias('a');
        $this->where(['a.cid'=>$cid]);
        $rows->join('article b','a.aid = b.id');
        $rows->order('a.aid asc');
        $rows->field('a.*,a.id as ca_id,b.id,b.title,b.desc,b.is_del');
        return $this->select();
    }

    //获取教程下面的目录
    public function courseArticeList($cid){
        $query = $this;
//        $query->with('article');
        $query->where(['cid'=>$cid]);
        $data = $query->select()->toArray();
        return $data;
    }
}