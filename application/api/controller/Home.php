<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-22
 * Time: 22:29
 */

namespace app\api\controller;


use think\Request;

class Home extends Base
{

    protected $classify;
    protected $article;
    public function _initialize()
    {
        $this->classify = model('common/Classify');
        $this->article = model('common/Article');
    }
    /**
     * 博客首页的帖子数据列表
     * @return false|string
     */
    public function homeList(){

        //查询条件 最新 最热 评论 分类
        $record = Request::instance()->post();
        $data = [];
        if($record){
            $data = $this->article->apiList($record);
            foreach ($data['data'] as $k=>&$v){
                $v['share'] = 1;
                if($v['praise'] > 100){
                    $v['hot'] = '热';
                }else{
                    $v['hot'] = '';
                }

                $v['add_time'] = mdate(strtotime($v['add_time']));

            }
        }

        return ajReturn($data, 'ok');


    }


}