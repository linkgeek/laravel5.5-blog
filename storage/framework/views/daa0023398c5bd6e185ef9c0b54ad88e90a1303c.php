<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> - 加藤非博客</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
<body class="nav-md admin-index">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo e(url('admin/index/index')); ?>" class="site_title"><i class="fa fa-paw"></i> <span>加藤非博客</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile cl">
                    <div class="profile_pic">
                        <img src="<?php echo e(session('user.avatar')); ?>" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>welcome.</span>
                        <h2><?php echo e(session('user.name')); ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-book"></i> 文章管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/article/index')); ?>">文章列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-th"></i> 分类管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/category/index')); ?>">分类列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-tags"></i> 标签管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/tag/index')); ?>">标签列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-comments"></i> 评论管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/comment/index')); ?>">评论列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-users"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/user/index')); ?>">管理员列表</a></li>
                                    <li><a href="<?php echo e(url('admin/oauthUser/index')); ?>">第三方用户列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-link"></i> 友情链接 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/friendshipLink/index')); ?>">友情链接列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-commenting"></i> 随言碎语 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/chat/index')); ?>">随言碎语列表</a></li>
                                    <li><a href="<?php echo e(url('admin/notice/index')); ?>">公告列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-cogs"></i> 系统设置 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('admin/config/edit')); ?>">设置列表</a></li>
                                    <li><a href="<?php echo e(url('admin/gitProject/index')); ?>">开源项目</a></li>
                                    <li><a href="<?php echo e(url('admin/config/clear')); ?>">清空缓存</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a href="<?php echo e(url('admin/config/edit')); ?>" data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="<?php echo e(url('admin/login/logout')); ?>" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>


        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo e(asset(session('user.avatar'))); ?>" alt=""><?php echo e(session('user.name')); ?>

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?php echo e(url('admin/login/logout')); ?>"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                        <h3><?php echo $__env->yieldContent('nav'); ?> <small><?php echo $__env->yieldContent('description'); ?></small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer content -->
        <footer>
            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>