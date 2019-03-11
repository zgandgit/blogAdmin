<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-29
 * Time: 20:15
 */

namespace app\api\controller;

use think\Request;

class Discuss extends Base
{


    public function discuss(){
        $discuss = model('common/Discuss');
        $record = Request::instance()->post();//获取数据
        $data = [];
        if(isset($record['aid'])){
            $data = $discuss->discuss(['aid'=>$record['aid'],'one_id'=>0]);//查询大评论列表
            foreach ($data as $k=>&$v){
                $v['reply'] = $discuss->discuss(['aid'=>$record['aid'],'one_id'=>$v['id']]);//查询评论评论的评论列表
                $v['hour'] = mdate(strtotime($v['hour']));
            }
        }

            return ajReturn($data, 'ok');
    }

    public function discussPresent(){
        $discuss = model('common/Discuss');
        $record = Request::instance()->post();//获取数据
        if(isset($record['aid'])){
            $data = [
                'uid'=>$record['uid'],
                'aid'=>$record['aid'],
                'one_id'=>$record['oneId'],
                'content'=>$record['content'],
                'hour'=>date('Y-m-d H:i:s'),
                'over'=>2,
            ];
            $data = $discuss->addDiscuss($data);
            return ajReturn($data, 'ok');
        }else{
            return ajReturn([], '评论失败',1000);
        }


    }



}