<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 19:27
 */

namespace app\admin\controller;

use think\Request;

class Article extends Base
{
    protected $classify;
    protected $article;
    protected $course;
    protected $courseArtice;


    public function _initialize()
    {
        $this->classify = model('common/Classify');
        $this->article = model('common/Article');
        $this->course = model('common/Course');
        $this->courseArtice = model('common/CourseArtice');

    }

    /**
     * @return \think\response\View
     */
    public function index(){
        //继续获取文章列表
        $result = $this->article->lists();
        $page = $result->render();
        $this->assign('page', $page);
        $this->assign('result',$result);
        return view();
    }

    /**
     * @return \think\response\View
     */
    public function addArticle(){
        $flList = $this->classify->classifyList();
        $this->assign('flList',$flList);
        //初始化
        $id = Request::instance()->param('id');//获取要要修改的文章id
        $result = [
            'id' => '',
            'fid' => '',
            'cover' => config('resource.d_id'),
            'title' => '',
            'desc' => '',
            'place' => '',
            'author' => '',
            'recommend' => 2,
            'details' => '',
            'link' => '',
            'is_del' => 1,
        ];//初始化数据模型
        if(!empty($id)){
            $result = $this->article->findArticle($id);//条件
        }
        $this->assign('result',$result);

        return view();
    }


   public function saveArticle(){
       $data = Request::instance()->post();
       $result = [
           'fid' => $data['fid'],
           'cover' => $data['cover'],
           'title' => $data['title'],
           'desc' => cut_str($data['test-editormd-markdown-doc'],32),
           'place' => $data['place'],
           'author' => $data['author'],
           'add_time' => date('Y-m-d H:i:s'),
           'recommend' => $data['recommend'],
           'details' => $data['test-editormd-markdown-doc'],
           'link' => $data['link'],
           'is_del' => $data['is_del'],
       ];//初始化数据模型

       if(empty($data['id'])){
           //新增
           $this->article->insertSave('',$result);
       }else{
           //修改
           $this->article->alterSave('',['where'=>['id'=>$data['id']]],$result);
       }

       $this->redirect('index');

   }
    public function upArticle(){
        $data = Request::instance()->post();

        $result = [
            'title' => $data['title'],
            'desc' => $data['desc'],
        ];//初始化数据模型

        $this->article->alterSave('',['where'=>['id'=>$data['aid']]],$result);
        return ajReturn([], '修改成功');

    }

    /**
     * 文章分类列表
     * @return \think\response\View
     */
    public function classifyList(){
        $result = $this->classify->classifyList();
        $this->assign('result',$result);
        return view();
    }

    /**
     * 添加或者修改分类
     * @return \think\response\View
     */
    public function addUpdateFl(){
        $id = Request::instance()->param('id');
        $result = [
            'id' => '',
            'superior_id' => '',
            'name' => '',
            'desc' => '',
            'ico_id' => config('resource.d_id'),
            'url' => '',
            'add_time' => ''
        ];//初始化数据模型
        if(!empty($id)){
            $result = $this->classify->packetFind($id);//条件
        }
        $this->assign('result',$result);
        $flList = $this->classify->classifyList();
        $this->assign('flList',$flList);

        return view();
    }

    public function saveFl(){
        $data = Request::instance()->post();
        $result = [
            'superior_id' => $data['superior_id'],
            'name' => $data['name'],
            'desc' => $data['desc'],
            'ico_id' => $data['ico_id'],
            'add_time' => date('Y-m-d H:i:s')
        ];//初始化数据模型
        if(empty($data['id'])){
            //新增
            $this->classify->insertSave('',$result);

        }else{
            //修改
            $this->classify->alterSave('',['where'=>['id'=>$data['id']]],$result);
        }

        $this->redirect('classifyList');
    }

    public function removeFl(){
        $data = Request::instance()->post();
        $code = $this->classify->deleteS('',['where'=>['id'=>$data['id']]]);
        if($code){
            return ajReturn([], '删除成功');
        }else{
            return ajReturn([], '失败',1000);
        }
    }

    public function removeA(){
        $data = Request::instance()->post();
        $code = $this->article->deleteS('',['where'=>['id'=>$data['id']]]);
        if($code){
            return ajReturn([], '删除成功');
        }else{
            return ajReturn([], '失败',1000);
        }
    }



    //下面是教程列表了
    public function courseList(){

        $result = $this->course->courseList();

        $this->assign('result',$result);

        return view();
    }


    //添加和修改教程
    public function addCourse(){
        $id = Request::instance()->param('id');
        $result = [
            'id' => '',
            'cover' => 1,
            'title' => '',
            'intro' => '',
            'shelve' => 2
        ];//初始化数据模型
        if(!empty($id)){
            $result = $this->course->findS('',['where'=>['id'=>$id]]);//条件
        }
        $this->assign('result',$result);



        return view();
    }



    //添加和修改教程--保存
    public function saveCourse(){
        $data = Request::instance()->post();
        $result = [
            'cover' => $data['cover'],
            'title' => $data['title'],
            'intro' => $data['intro'],
            'shelve' => $data['shelve']
        ];//初始化数据模型

        if(empty($data['id'])){
            //新增
            $this->course->insertSave('',$result);
        }else{
            //修改
            $this->course->alterSave('',['where'=>['id'=>$data['id']]],$result);
        }
        $this->redirect('courseList');

        return view();
    }


    //删除文档
    public function removeCourse(){

        $data = Request::instance()->post();
        //在这里查询 所有教程下面的文章ID
        $cList = $this->courseArtice->where(['cid'=>$data['id']])->column('aid');
        $this->article->destroy($cList);
        $code = $this->course->deleteS('',['where'=>['id'=>$data['id']]]);
        if($code){
            return ajReturn([], '删除成功');
        }else{
            return ajReturn([], '失败',1000);
        }

    }

    //更新设置新文档
    public function updateCourseArticle(){

        $cid = Request::instance()->param('id');//获取教程ID
        $dataList = $this->courseArtice->updateCourseArticle($cid);
        $this->assign('result',$dataList);
        //返回教程的信息
        $course = $this->course->findS('',['where'=>['id'=>$cid]]);//条件
        $this->assign('course',$course);
        //获取点击文章链接 如果没有默认第一个
        $aid = Request::instance()->param('aid');//获取点击的文章ID
        $article = '';//文章内容
        if(empty($aid)){
            $aid = 0;
        }else{
            $data = $this->article->where('id',$aid)->find();//条件
            $article = $data['details'];

        }

        $this->assign('article',['aid'=>$aid,'details'=>$article]);

        return view();
    }

    //添加新的子教程
    public function attribAjax(){
        $data = Request::instance()->param('');//获取教程ID
        //首先我们先添加文章 然后返回文章ID
        $result = [
            'title' => $data['title'],
            'desc' => $data['desc'],
            'add_time' => date('Y-m-d H:i:s'),
        ];//初始化数据模型
        $aid = $this->article->insertSave('',$result);//文章ID
        if($aid){
            $case = [
                'cid' => $data['cid'],
                'sup_aid' => $data['sup_aid'],
                'aid' => $aid
            ];//初始化数据模型
        }
        $caid = $this->courseArtice->insertSave('',$case);
        return ajReturn(['id'=>$data['cid'],'aid'=>$aid], '添加成功');



    }

    //删子教程
    public function removeCaseArticle(){
        $id = Request::instance()->param('id');//获取教程ID
        $caseA = $this->courseArtice->where(['aid'=>$id])->find();
        //在这里查询 所有教程下面的文章ID
        $cList = $this->courseArtice->where(['sup_aid'=>$id])->column('aid');
        $this->aids($cList,$cList);
        $this->article->where('id',$id)->delete();
        $this->courseArtice->where('aid',$id)->delete();


        return ajReturn(['aid'=>$caseA['sup_aid']], '删除成功');


    }

    public function aids($cList,$datas){

       $data = $this->courseArtice->where('sup_aid','in',$datas)->column('aid');
       if(count($data)>0){
           foreach ($data as $k=>$v){
               array_push($cList,$v);
           }
           $this->aids($cList,$data);
       }else{
           $this->article->destroy($cList);//删除下面的文章
           $this->courseArtice->where('aid','in',$cList)->delete();
       }

    }



    //删子教程
    public function constantlyUpdatedEditor(){
        $data = Request::instance()->param('');//获取教程ID
        $this->article->where('id',$data['aid'])->update(['details' => $data['details']]);
        return ajReturn([], '更新成功');


    }



}