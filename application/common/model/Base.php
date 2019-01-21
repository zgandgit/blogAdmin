<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 17:00
 */

namespace app\common\model;


use think\Model;

class Base extends Model
{
    //系统初始化
    public function initialize()
    {

        parent::initialize(); // 系统初始化
    }


    /**
     * 普通添加数据
     * @param string $table
     * @param array $data
     * @return int|string
     */
    public function insertSave($table='',$data=[]){
        if($table != ''){
            $this->table($table);
        }
        if(!empty($data)){
            return $this->insertGetId($data);
        }
    }


    //更新数据
    public function alterSave($table='',$packet=[],$data=[]){
        if($table != ''){
            $this->table($table);
        }
        $this->getChained($packet);
        if(!empty($data)){
            return $this->update($data);
        }
    }

    //查询数据-多条
    public function queryS($table='',$packet=[]){
        if($table != ''){
            $this->table($table);
        }
        $this->getChained($packet);
        return $this->select();
    }

    //查询数据-单条
    public function findS($table='',$packet=[]){
        if($table != ''){
            $this->table($table);
        }
        $this->getChained($packet);
        return $this->find();
    }


    //删除数据
    public function deleteS($table='',$packet=[]){
        if($table != ''){
            $this->table($table);
        }
        $this->getChained($packet);
        return $this->delete();
    }


    //链式操作 封装
    public function getChained($packet=[]){
        //初始化链式条件
        $condition = [
            'where'     =>'',
            'alias'     =>'',
            'field'     =>'',
            'order'     =>'',
            'limit'     =>'',
            'page'      =>'',
            'group'     =>'',
            'having'    =>'',
            'join'      =>'',
            'union'     =>'',
            'distinct'  =>'',
            'lock'      =>'',
            'cache'     =>'',
            'comment'   =>'',
            'fetchSql'  =>'',
            'force'     =>'',
            'bind'      =>'',
            'partition' =>'',
            'failException'=>'',
            'sequence'     =>''
        ];
        if(!empty($packet)){
            foreach ($packet as $k=>$v){
                if(array_key_exists($k,$condition)){
                    if($k == 'join'){
                        $this->$k($v[0],$v[1],$v[2]);
                    }else{
                        $this->$k($v);
                    }

                }
            }

        }
        return $this;
    }










}