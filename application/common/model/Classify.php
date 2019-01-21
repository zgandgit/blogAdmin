<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-08
 * Time: 20:10
 */

namespace app\common\model;


class Classify extends Base
{

    public function packetFind($id){
        $packet =  [
            'alias'=>'a',
            'field'=>'a.*,b.url',
            'join'=>['resource b','a.ico_id = b.id','left'],
            'where'=>['a.id'=>$id]
        ];

        return $this->findS('',$packet);
    }

    public function classifyList(){
        $packet = [
            'alias'=>'a',
            'field'=>'a.*,b.url',
            'join'=>['resource b','a.ico_id = b.id','left']
        ];
        return $this->queryS('',$packet);
    }


}