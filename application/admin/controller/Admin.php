<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 15:49
 */

namespace app\admin\controller;


class Admin extends Base
{


    public function _initialize()
    {


    }


    /**
     * 系统配置主页
     * @return \think\response\View
     */
    public function index(){
        //获取所有的字段
        $condition = model('common/Website')->queryS();
        $this->assign('result',$condition);
        return view();
    }

    /**
     * 新增系统属性
     * @return false|string
     */
    public function addWebSite(){
        $result = $this->postResult();
        $id = model('common/Website')->insertSave('',$result);
        if($id){
            return ajReturn(['id'=>$id], '新增成功了');
        }else{
            return ajReturn(['id'=>$id], '失败',1000);
        }
    }

    /**
     * 修改
     * @return false|string
     */
    public function updateWebSite(){
        $result = $this->postResult();
        $data = $_POST;
        $code = model('common/Website')->alterSave('',['where'=>['id'=>$data['id']]],$result);
        if($code){
            return ajReturn(['code'=>$code], '修改成功');
        }else{
            return ajReturn(['code'=>$code], '失败',1000);
        }
    }

    /**
     * 删除数据
     * @return false|string
     */
    public function removeWebSite(){
        $data = $_POST;
        $code = model('common/Website')->deleteS('',['where'=>['id'=>$data['id']]]);
        if($code){
            return ajReturn([], '删除成功');
        }else{
            return ajReturn([], '失败',1000);
        }
    }

    /**
     * 接收数据封装
     * @return array
     */
    public function postResult(){
        $data = $_POST;
        $result = [
            'name' => $data['name'],
            'type' => $data['type'],
            'value' => $data['value'],
            'hint' => $data['hint']
        ];
        return $result;
    }




}