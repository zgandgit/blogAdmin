<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-30
 * Time: 19:48
 */

namespace app\api\controller;


use think\Request;

class Course extends Base
{
    /**
     * 获取教程列表
     * @return false|string
     */
    public function courseList(){
        $record = Request::instance()->post();
        $course = model('common/Course');
        $data = [];
        if($record){
            $data = $course->apiList($record);
            foreach ($data['data'] as $k=>&$v){
                $cid = $v['id'];
                $v['artice'] = model('common/CourseArtice')->where(['cid'=>$cid])->find();
                $v['num'] = model('common/CourseArtice')->where(['cid'=>$cid])->count();
            }
        }
        return ajReturn($data, 'ok');
    }

    /**
     * 获取教程列表
     * @return false|string
     */
    public function courseArticeList(){
        $cid = Request::instance()->post('cid');
        $courseArtice = model('common/CourseArtice');
        $data = [];
        if(isset($cid)){
            $datas = $courseArtice->updateCourseArticle($cid)->toArray();//获取教程下面文章列表
            $data = $this->getTree($datas);
        }
        return ajReturn($data, 'ok');
    }


    /**
     * 将数据格式化成树形结构
     * @param $data
     * @param int $parentId
     * @return array
     */
    public function getTree(&$data, $parentId = 0)
    {
        $tree = [];

        foreach($data as $k => $v)
        {
            if($v['sup_aid'] == $parentId)
            { //父亲找到儿子
                $v['child'] = $this->getTree($data, $v['id']); //封装成函数的时候，需要去掉self::这个标识。
                $tree[] = $v;
                unset($data[$k]); // 释放原始数据变量
            }
        }
        return $tree;
    }


}