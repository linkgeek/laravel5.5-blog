<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理后台登录 - laravel-bjyblog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('statics/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('statics/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('statics/gentelella/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('statics/gentelella/build/css/custom.min.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="nav-md admin-login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="<?php echo e(url('auth/admin/login')); ?>" method="post">
                    <input class="hidden" type="checkbox" name="remember" checked>
                    <?php echo e(csrf_field()); ?>

                    <h1><i class="fa fa-paw"></i> <?php echo e($config['WEB_NAME']); ?></h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Email" required="" name="email" value="<?php echo e(old('email') ? old('email') : ''); ?>">
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="password">
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">登录</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <div>
                            <p>©2018 All Rights Reserved. <a href="http://www.jiatengfei.com" target="_blank"><?php echo e($config['WEB_NAME']); ?> </a></p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('statics/gentelella/vendors/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('statics/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('statics/gentelella/vendors/fastclick/lib/fastclick.js')); ?>"></script>
<!-- NProgress -->
<script src="<?php echo e(asset('statics/gentelella/vendors/nprogress/nprogress.js')); ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo e(asset('statics/gentelella/build/js/custom.min.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
