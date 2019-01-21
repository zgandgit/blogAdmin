<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-08
 * Time: 22:53
 */

namespace app\common\model;


class Article extends Base
{


    public function lists(){

        $rows = $this;
        $rows->alias('a');
        $rows->join('resource b','a.cover = b.id','left');
        $rows->join('classify c','a.fid = c.id','');
        $rows->field('a.*,c.name,b.url as cove_url');
        return $this->paginate(10);

    }

    public function findArticle($id){
        $rows = $this;
        $rows->alias('a');
        $rows->where(['a.id'=>$id]);
        $rows->join('resource b','a.cover = b.id','left');
        $rows->join('classify c','a.fid = c.id','');
        $rows->field('a.*,c.name,b.url as cove_url');
        return $this->find();
    }



//    public function attribInfoList($id){
//
//        $where = ['fid'=>2,'course_id'=>$id];//条件
//        $rows = $this;
//        $rows->alias('a');
//        $rows->where($where);
//        $rows->join('resource b','a.cover = b.id','left');
//        $rows->join('classify c','a.fid = c.id','');
//        $rows->field('a.*,c.name,b.url as cove_url');
//        $list = $this->select()->toArray();
//        $data = $this->infiniteQuery($list,$id,0);
//
//
//        return $data;
//
//
//
//
//
//
//
//    }
//
//
//    function infiniteQuery($arr,$id,$level)
//    {
//        $list =array();
//        foreach ($arr as $k=>$v){
//            if ($v['sup_id'] == $id){
//                $v['level']=$level;
//                $v['son'] = $this->infiniteQuery($arr,$v['id'],$level+1);
//                $list[] = $v;
//            }
//        }
//        return $list;
//    }



}