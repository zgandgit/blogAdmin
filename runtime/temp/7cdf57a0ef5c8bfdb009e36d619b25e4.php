<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:93:"D:\phpStudy\WWW\blogAdmin\public/../application/admin\view\article\update_course_article.html";i:1551700685;s:65:"D:\phpStudy\WWW\blogAdmin\application\admin\view\public\base.html";i:1551700685;}*/ ?>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="/static/rclikc/basicContext.min.css">
<link rel="stylesheet" href="/static/rclikc/default.min.css">
<link rel="stylesheet" href="/markdown/examples/css/style.css" />
<link rel="stylesheet" href="/markdown/css/editormd.css" />

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
                
<style>
    .navs{
        cursor:pointer;
        text-align: left;
        margin-bottom: 20px;
    }
    .navs ul{
        display: block;
        list-style: none;
        padding: 0;
    }
    .navs ul li{
        margin-left: 8px;
        padding-left: 14px;
        font-size: 16px;
    }
    .navs ul li>i{
        position: relative;
    }
    .navs ul li a{
        text-decoration:none ;
        color: #202020;
        position: relative;
        width: 0;
        white-space: nowrap;
        display: -webkit-inline-box;
        padding-left: 10px;
    }
    .navs>ul>li{
        line-height: 30px;
        cursor: pointer;
        margin-left: 0;
        white-space: nowrap;
        width: 100%;
    }
    .navs ul li.active{

    }
    .navs ul li>.wholerow {

        width: 100%;
        position: absolute;
        left: 0;
        user-select: none;
        height: 30px;
    }
    .navs ul li.active>.wholerow {
        background: #f1f2f2;
    }
    .navs ul li.hover> .wholerow{
        background: #f1f2f2;
    }
    .navs ul li>ul{
        display: none;
    }
    .navs ul li.open>ul{
        display: block;
    }

</style>
<!-- 内容区域 -->


<div class="row">
    <div class="col-md-3 stretch-card">
        <div class="card">
            <div class="card-body">
                <input type="hidden" name="cid" id="cid" value="<?php echo $course['id']; ?>">
                <input type="hidden" name="aid" id="aid" value="<?php echo $article['aid']; ?>">
                <nav class="navs">
                    <h3 class="card-title"><?php echo $course['title']; ?></h3>
                    <div  id="catalogue">
                    <!--<ul>-->
                        <!--<li class="open active">-->
                            <!--<div class="wholerow"></div>-->
                            <!--<i class="mdi mdi-arrow-down-drop-circle"></i>-->
                            <!--<a href="javascript:void(0)" name="1">目录一</a>-->
                            <!--<ul>-->
                                <!--<li>-->
                                    <!--<div class="wholerow"></div>-->
                                    <!--<i class="mdi mdi-arrow-right-drop-circle"></i>-->
                                    <!--<a href="javascript:void(0)" name="1-1">目录1-1</a>-->
                                    <!--<ul>-->
                                        <!--<li>-->
                                            <!--<div class="wholerow"></div>-->
                                            <!--<i class="mdi mdi-arrow-right-drop-circle"></i>-->
                                            <!--<a href="javascript:void(0)" name="1-1-1">目录1-1-1</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<div class="wholerow"></div>-->
                                            <!--<i class="mdi mdi-arrow-right-drop-circle"></i>-->
                                            <!--<a href="javascript:void(0)" name="1-1-2">目录1-1-2</a>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<div class="wholerow"></div>-->
                                    <!--<i class="mdi mdi-arrow-right-drop-circle"></i>-->
                                    <!--<a href="javascript:void(0)" name="1-2">目录1-2</a>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</li>-->
                    <!--</ul>-->
                    </div>

                </nav>
                <button type="button" class="btn btn-primary btn-fw" onclick="dwz()">添加章节</button>

            </div>
        </div>
    </div>

    <div class="col-md-9 stretch-card">
        <div class="card">
            <div class="card-body" id="test-editormd">
                <textarea style="display:none;"><?php echo $article['details']; ?></textarea>
            </div>
        </div>
    </div>


    <!--添加章节-->

    <!-- Modal -->
    <div class="modal fade" id="myModalZ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="forms-sample">
                        <input type="hidden" id="sup_aid" value="">
                        <div class="form-group">
                            <label for="title">教程标题</label>
                            <input type="text" class="form-control" id="c_title" placeholder="请输入教程标题">
                        </div>
                        <div class="form-group">
                            <label for="desc">教程描述</label>
                            <input type="text" class="form-control" id="c_desc" placeholder="请输入教程描述">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" onclick="jctj()">确认</button>
                </div>
            </div>
        </div>
    </div>


    <!--修改章节-->
    <!-- Modal -->
    <div class="modal fade" id="upMyModalZ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="forms-sample">
                        <input type="hidden" id="upaid" value="">
                        <div class="form-group">
                            <label for="title">教程标题</label>
                            <input type="text" class="form-control" id="up_title" placeholder="请输入教程标题">
                        </div>
                        <div class="form-group">
                            <label for="desc">教程描述</label>
                            <input type="text" class="form-control" id="up_desc" placeholder="请输入教程描述">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" onclick="upActile()">确认</button>
                </div>
            </div>
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

<script src="/admin_mb/js/file-upload.js"></script>
<script src="/static/rclikc/basicContext.min.js"></script>
<script src="/markdown/editormd.js"></script>
<script>
    //菜单列表html
    var menus = '';
    var aid = <?php echo $article['aid']; ?>;

    function GetData(id, arry) {
        var childArry = GetParentArry(id, arry);
        if (childArry.length > 0) {
            menus += '<ul>';
            for (var i in childArry) {
                if(childArry[i].id == aid){
                    menus += '<li class="active">';
                }else{
                    menus += '<li>';
                }
                menus += '<div class="wholerow"></div>';
                menus += '<i class="mdi mdi-arrow-right-drop-circle"></i>';
                menus += '<a name="'+childArry[i].id+'" href="<?php echo url('updateCourseArticle'); ?>'+'?aid='+childArry[i].id+'&id='+$('#cid').val()+'">'+childArry[i].title+'</a>';
                GetData(childArry[i].id, arry);
                menus += '</li>';
            }
            menus += '</ul>';
        }
    }

    function GetParentArry(id, arry) {
        var newArry = new Array();
        for (var i in arry) {
            if (arry[i].sup_aid == id)
                newArry.push(arry[i]);
        }
        return newArry;
    }

    $(function () {
        //获取数据 js 递归查询
        let result = <?php echo $result; ?>;
        GetData(0, result);
        $('#catalogue').html(menus);
        //让所有的 节点是active 的上级li 都带有open
        $('li.active').parents('li').addClass('open');

        $('li.active').parents('li').children('.mdi').removeClass("mdi-arrow-right-drop-circle");
        $('li.active').parents('li').children('.mdi').addClass("mdi-arrow-down-drop-circle");


        //点击箭头切换
        $('.navs ul li>i').click(function () {
            let cls = $(this).hasClass("mdi-arrow-down-drop-circle");
            if(cls){
               //删除这个class 改变箭头向右 收缩子节点
                $(this).removeClass("mdi-arrow-down-drop-circle");
                $(this).addClass('mdi-arrow-right-drop-circle');
                //获取同级的ul节点 并隐藏
                $(this).parent('li').removeClass('open');
            }else{
                //删除这个class 改变箭头向下 放开子节点
                $(this).removeClass("mdi-arrow-right-drop-circle");
                $(this).addClass('mdi-arrow-down-drop-circle');
                //获取同级的ul节点 并开放
                $(this).parent('li').addClass('open');

            }
        });



        $('.navs ul li').mouseover(function(e){
            e.stopPropagation();
            $('.navs ul li').removeClass('hover')
            $(this).addClass('hover')

        });

        $('.navs ul li').mouseout(function(e){
            e.stopPropagation();
            $(this).removeClass('hover')
        });



        $('.navs ul li>a').bind("contextmenu", function (e) {
            let id = $(this).attr('name');
            onClick(e,id)
            return false;
        });

        });

    function onClick(e,id) {
        var addCourse = function() {
            $('#myModalZ').modal('toggle');
            $('#sup_aid').val(id);
        }
        var bgCourse = function() {
            $('#upMyModalZ').modal('toggle');
            $('#upaid').val(id);
        }
        var delCourse = function() {
            if(confirm("您确定要删除吗?将会删除所有此文档下面的教程")){
                // alert(id);
                $.ajax({
                    type:"post",
                    url:"<?php echo url('removeCaseArticle'); ?>",
                    dataType:"json",
                    data:{id:id},
                    success:function(result){
                        if(result.code == 200){
                            window.location.href="<?php echo url('updateCourseArticle'); ?>"+"?aid"+result.data['aid']+"&id="+$('#cid').val();
                        }else{
                            alert(result.msg);
                        }
                    }
                });
            }



        }
        var items = [
            { title: '新增', icon: 'mdi mdi-book-plus', fn: addCourse },
            { title: '编辑', icon: 'mdi mdi-lead-pencil', fn: bgCourse },
            { title: '删除', icon: 'mdi mdi-archive', fn: delCourse },
        ]
        basicContext.show(items, e)
    }
    document.oncontextmenu = function() {
        return false;
    }

    function dwz() {
        $('#myModalZ').modal('toggle');
        $('#sup_aid').val(0);
    }

    function upActile() {


        let data = {};
        data.title = $('#up_title').val();
        data.desc = $('#up_desc').val();
        data.aid = $('#upaid').val();

        $('#upMyModalZ').modal('toggle');
        // //在这里提交并保存
        $.ajax({
            type:"post",
            url:"<?php echo url('upArticle'); ?>",
            dataType:"json",
            data:data,
            success:function(result){
                if(result.code == 200){
                    window.location.href="<?php echo url('updateCourseArticle'); ?>"+"?aid"+data.aid+"&id="+$('#cid').val();
                }else{
                    alert(result.msg);
                }
            },
            error:function(jqXHR){
                console.log("Error: "+jqXHR.status);
            }
        });
    }
    function jctj() {
        let data = {};
        data.cid = $('#cid').val();
        data.title = $('#c_title').val();
        data.desc = $('#c_desc').val();
        data.sup_aid = $('#sup_aid').val();
        $('#myModalZ').modal('toggle');//隐藏起来
        //在这里提交并保存
        $.ajax({
            type:"post",
            url:"<?php echo url('attribAjax'); ?>",
            dataType:"json",
            data:data,
            success:function(result){
                if(result.code == 200){
                    window.location.href="<?php echo url('updateCourseArticle'); ?>"+"?aid="+result.data['aid']+"&id="+result.data['id'];
                }else{
                    alert(result.msg);
                }
            },
            error:function(jqXHR){
                console.log("Error: "+jqXHR.status);
            }
        });

    }
</script>

<script>



    var testEditor;
    $(function() {
        testEditor = editormd("test-editormd", {
            width: "100%",
            height: 600,
            path : '/markdown/examples/../lib/',
            // 自定义主题样式
            theme : "default",
            previewTheme : "default",
            editorTheme : "pastel-on-default",
            markdown : '',
            codeFold : true,
            syncScrolling : true,//实时解析预览
            saveHTMLToTextarea : true,    // 保存 HTML 到 Textarea
            searchReplace : true,
            //watch : false,                // 关闭实时预览
            htmlDecode : "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启
            toolbar  : true,             //关闭工具栏
            //previewCodeHighlight : false, // 关闭预览 HTML 的代码块高亮，默认开启
            emoji : true,
            taskList : true,
            tocm            : true,         // Using [TOCM]
            tex : true,                   // 开启科学公式TeX语言支持，默认关闭
            flowChart : true,             // 开启流程图支持，默认关闭
            sequenceDiagram : true,       // 开启时序/序列图支持，默认关闭,
            //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
            //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
            //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
            //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
            //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL : "/markdown/examples/php/upload.php",
            onload : function() {
                console.log('onload', this);
                //this.fullscreen();
                //this.unwatch();
                //this.watch().fullscreen();

                //this.setMarkdown("#PHP");
                //this.width("100%");
                //this.height(480);
                //this.resize("100%", 640);
            },
            onchange : function() {
                console.log(this.getValue());
                // $("#output").html("onchange : this.id =>" + this.id + ", markdown =>" + this.getValue());
                // console.log("onchange =>", this, this.id, this.settings, this.state);
                let datas = {};
                datas.aid = '<?php echo $article['aid']; ?>';
                datas.details = this.getValue();
                $.ajax({
                    type:"post",
                    url:"<?php echo url('constantlyUpdatedEditor'); ?>",
                    dataType:"json",
                    data:datas,
                    success:function(result){
                        if(result.code == 200){

                        }else{
                            alert(result.msg);
                        }
                    },
                    error:function(jqXHR){
                        console.log("Error: "+jqXHR.status);
                    }
                });


            }
        });
    });




</script>


</body>

</html>


































