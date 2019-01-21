<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-13
 * Time: 18:40
 */

namespace app\admin\controller;


class Resource extends Base
{
    //上传文件 base64
    public function updateFile(){
        $data = $_POST;
        $url = base64_image_content($data['resource'],config('up_file.resource'));
        if($url){
            $result = [
                'name' => $data['name'],
                'url' => $url,
                'type' => 2
            ];
            //新增资源到数据库
            $id = model('common/Resource')->insertSave('',$result);
            return ajReturn(['id'=>$id], '添加成功');
        }else{
            return ajReturn([], '失败',1000);
        }
    }

    //文章文件上传 formdata
    public function fileUpdate(){


    }

}