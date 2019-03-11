<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 17:05
 */

namespace app\admin\controller;

use think\Controller;
use think\Cookie;
use think\Request;

class Base extends Controller
{
    /**
     * 系统初始化方法
     */
    public function __construct()
    {
        parent::__construct();
        $login = Cookie::has('login');
        if(!$login){
            $this->redirect('Register/login');

        }




    }

}