<?php
/**
 * Created by noahzhou.
 * User: 周光
 * Date: 2019-01-06
 * Time: 17:05
 */

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    /**
     * 系统初始化方法
     */
    public function _initialize()
    {

        parent::_initialize(); // 调用父级初始化方法

    }

}