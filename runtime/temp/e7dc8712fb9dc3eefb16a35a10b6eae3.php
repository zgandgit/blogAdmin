<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\blogAdmin\public/../application/admin\view\register\login.html";i:1551700685;}*/ ?>
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <h4>请登录</h4>
                        <h6 class="font-weight-light">登录夏日里的一把阳光博客管理后台</h6>
                        <form class="pt-3" action="<?php echo url('Register/login'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username" placeholder="账户名">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="密码">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">确认登录</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
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
</body>

</html>
