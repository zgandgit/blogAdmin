<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-22
 * Time: 22:29
 */

namespace app\api\controller;


use think\Controller;
use think\Request;

class Base extends Controller
{
    protected $classify;
    protected $article;

    public function __construct()
    {
        parent::__construct();
        // 指定允许其他域名访问
        header('Access-Control-Allow-Origin:*');
        // 响应类型
        header('Access-Control-Allow-Methods:POST,GET,OPTIONS');
        // 响应头设置
        header('Access-Control-Allow-Headers:x-requested-with,content-type');

        $this->classify = model('common/Classify');
        $this->article = model('common/Article');

    }

    public function userInfo(){
        $record = Request::instance()->post();
        //获取个人信息
        $user = $this->article->lists(['a.fid'=>config('classify.user')]);
        $advertising = $this->article->lists(['a.fid'=>config('classify.advertising')]);
        $openSource = $this->article->lists(['a.fid'=>config('classify.openSource')]);
        $deploy = $this->article->lists(['a.fid'=>config('classify.deploy')]);
        $blogroll = $this->article->lists(['a.fid'=>config('classify.blogroll')]);
//        $banner = $this->article->lists(['a.fid'=>config('classify.banner')]);

        $data = [
            'user' => $user,
            'advertising' => $advertising,
            'openSource' => $openSource,
            'deploy' => $deploy,
            'blogroll' => $blogroll
        ];

        return ajReturn($data, 'ok');



    }

}