<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\phpStudy\WWW\blogAdmin\public/../application/admin\view\article\classify_list.html";i:1551700685;s:65:"D:\phpStudy\WWW\blogAdmin\application\admin\view\public\base.html";i:1551700685;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>夏日里的一把阳光博客后台管理</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin_mb/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin_mb/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin_mb/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin_mb/images/favicon.png" />
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="/admin_mb/images/logo.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin_mb/images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="暂不可用">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="/admin_mb/images/faces/face1.jpg" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">admin</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>
                            活动日志
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            登出
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count-symbol bg-warning"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">新消息</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin_mb/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                <p class="text-gray mb-0">
                                    1 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin_mb/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                <p class="text-gray mb-0">
                                    15 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin_mb/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                <p class="text-gray mb-0">
                                    18 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">4 条新的消息</h6>
                    </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-format-line-spacing"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="/admin_mb/images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span> <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">admin</span>
                            <span class="text-secondary text-small">超级管理员</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item nav-a">
                    <a class="nav-link" href="javascript:urlLink('nav-a','<?php echo url('Index/index'); ?>');">
                        <span class="menu-title">首页</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item nav-b">
                    <a class="nav-link" href="javascript:urlLink('nav-b','<?php echo url('Admin/index'); ?>');">
                        <span class="menu-title">系统设置</span>
                        <i class="mdi mdi-brightness-5 menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item nav-c">
                    <a class="nav-link list-a" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">文章管理</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-book-open-variant menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="javascript:urlLink('nav-c','<?php echo url('Article/classifyList'); ?>');">分类管理</a></li>
                            <li class="nav-item"> <a class="nav-link" href="javascript:urlLink('nav-c','<?php echo url('Article/index'); ?>');">文章列表</a></li>
                            <li class="nav-item"> <a class="nav-link" href="javascript:urlLink('nav-c','<?php echo url('Article/courseList'); ?>');">教程列表</a></li>
                        </ul>
                    </div>
                </li>

                <!--<li class="nav-item">-->
                    <!--<a class="nav-link" href="/admin_mb/pages/charts/chartjs.html">-->
                        <!--<span class="menu-title">Charts</span>-->
                        <!--<i class="mdi mdi-chart-bar menu-icon"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                    <!--<a class="nav-link" href="/admin_mb/pages/tables/basic-table.html">-->
                        <!--<span class="menu-title">Tables</span>-->
                        <!--<i class="mdi mdi-table-large menu-icon"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                    <!--<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">-->
                        <!--<span class="menu-title">Sample Pages</span>-->
                        <!--<i class="menu-arrow"></i>-->
                        <!--<i class="mdi mdi-medical-bag menu-icon"></i>-->
                    <!--</a>-->
                    <!--<div class="collapse" id="general-pages">-->
                        <!--<ul class="nav flex-column sub-menu">-->
                            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>-->
                            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>-->
                            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>-->
                            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>-->
                            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>-->
                <!--<li class="nav-item sidebar-actions">-->
                        <!--<span class="nav-link">-->
                          <!--<div class="border-bottom">-->
                            <!--<h6 class="font-weight-normal mb-3">Projects</h6>-->
                          <!--</div>-->
                          <!--<button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>-->
                          <!--<div class="mt-4">-->
                            <!--<div class="border-bottom">-->
                              <!--<p class="text-secondary">Categories</p>-->
                            <!--</div>-->
                            <!--<ul class="gradient-bullet-list mt-4">-->
                              <!--<li>Free</li>-->
                              <!--<li>Pro</li>-->
                            <!--</ul>-->
                          <!--</div>-->
                        <!--</span>-->
                <!--</li>-->
            </ul>
        </nav>
        
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                
<!-- 内容区域 -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="<?php echo url('Article/addUpdateFl'); ?>"> <button type="button" class="btn btn-gradient-success btn-fw">添加分类</button></a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        上级分类ID
                    </th>
                    <th>
                        分类图标
                    </th>
                    <th>
                        名称
                    </th>
                    <th>
                        描述
                    </th>
                    <th>
                        添加时间
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <tr id="del<?php echo $vo['id']; ?>">
                    <td class="py-1">
                        <?php echo $vo['id']; ?>
                    </td>
                    <td>
                        <?php echo $vo['superior_id']; ?>
                    </td>
                    <td>
                        <img src="<?php echo $vo['url']; ?>" alt="<?php echo $vo['url']; ?>" title="<?php echo $vo['url']; ?>">

                    </td>
                    <td>
                        <?php echo $vo['name']; ?>
                    </td>
                    <td>
                        <?php echo $vo['desc']; ?>
                    </td>
                    <th>
                        <?php echo $vo['add_time']; ?>



                    </th>
                    <th>
                        <a href="<?php echo url('Article/addUpdateFl',['id'=>$vo['id']]); ?>">
                        <button type="button" class="btn btn-gradient-success btn-sm">修改</button>
                        </a>
                        <button type="button" onclick="remove('<?php echo $vo['id']; ?>')" class="btn btn-gradient-danger btn-sm">删除</button>
                    </th>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              这里是底部模板
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<!-- plugins:js -->
<script src="/admin_mb/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin_mb/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/admin_mb/js/off-canvas.js"></script>
<script src="/admin_mb/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/admin_mb/js/dashboard.js"></script>
<!-- End custom js for this page-->
<!--ajax submit-->
<script src="/admin_mb/js/ajaxS.js"></script>
<!--public js-->
<script src="/admin_mb/js/commont.js"></script>

<script>
    function remove(e) {
        if(confirm("您确定要删除吗?")){
            let data = {};
            data.id = e;
            ajaxRemoveFl(data);
            return false;
        }

    }
</script>

</body>

</html>


































