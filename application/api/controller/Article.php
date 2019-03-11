<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-24
 * Time: 20:51
 */

namespace app\api\controller;


use think\Request;

class Article extends Base
{

    //标签分类
    public function labels(){
        $record = Request::instance()->post();
        $label = model('Classify')->where(['superior_id'=>config('classify.articleFid')])->select();
        return ajReturn($label, 'ok');

    }

    public function books(){
        $record = ['num'=>10,'page'=>1];
        $course = model('common/Course');
        $data = [];
        if($record){
            $data = $course->apiList($record,['stick'=>1]);
            foreach ($data['data'] as $k=>&$v){
                $cid = $v['id'];
                $v['artice'] = model('common/CourseArtice')->where(['cid'=>$cid])->find();
                $v['num'] = model('common/CourseArtice')->where(['cid'=>$cid])->count();
            }
        }
        return ajReturn($data, 'ok');

//        $cover = 'https://user-gold-cdn.xitu.io/2018/12/25/167e14942f2dcf44?imageView2/1/w/200/h/280/q/95/format/webp/interlace/1';
//        $books = [
//            ['id'=>1,'cover'=>$cover,'title'=>'前端面试之道','page_view'=>'205','intro'=>'助你建立起完整的前端知识','stick'=>1],
//            ['id'=>1,'cover'=>$cover,'title'=>'前端面试之道','page_view'=>'205','intro'=>'助你建立起完整的前端知识','stick'=>1],
//            ['id'=>1,'cover'=>$cover,'title'=>'前端面试之道','page_view'=>'205','intro'=>'助你建立起完整的前端知识','stick'=>1],
//            ['id'=>1,'cover'=>$cover,'title'=>'前端面试之道','page_view'=>'205','intro'=>'助你建立起完整的前端知识','stick'=>1],
//            ['id'=>1,'cover'=>$cover,'title'=>'前端面试之道','page_view'=>'205','intro'=>'助你建立起完整的前端知识','stick'=>1]
//
//        ];

//        return ajReturn($books, 'ok');

    }

    public function details(){
        $record = Request::instance()->post();

        $data = [];
        if(isset($record['id'])){
            $data = model('Article')->details($record['id']);
        }

        if($data){
            if($data['praise'] > 100){
                $data['hot'] = '热';
            }else{
                $data['hot'] = '';
            }
            $data['add_time'] = mdate(strtotime($data['add_time']));

            return ajReturn($data, 'ok');
        }else{
            return ajReturn([], '查询失败',1000);
        }


    }





}