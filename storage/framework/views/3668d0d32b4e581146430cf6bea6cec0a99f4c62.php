<?php $__env->startSection('title', '管理后台首页'); ?>

<?php $__env->startSection('nav', '后台首页'); ?>

<?php $__env->startSection('description', '后台管理首页'); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('statics/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <style>
        .bjy-img{
            width: 52px;
            border-radius:4px;
        }
        .bjy-content{
            height: 352px;
        }
        ul.widget_tally .month{
            width: 60%;
        }
        ul.widget_tally .count{
            width: 40%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                <div class="count"><?php echo e($commentCount); ?></div>
                <h3>总评论数</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count"><?php echo e($oauthUserCount); ?></div>
                <h3>第三方用户</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="count"><?php echo e($articleCount); ?></div>
                <h3>原创文章</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-wechat"></i></div>
                <div class="count"><?php echo e($chatCount); ?></div>
                <h3>随言碎语</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>最新登录的用户<small>top 5</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php $__currentLoopData = $oauthUserData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="media event">
                            <a class="pull-left">
                                <img class="bjy-img" src="<?php echo e(url($v->avatar)); ?>" alt="">
                            </a>
                            <div class="media-body">
                                <?php echo e($v->name); ?>

                                <p>
                                    登录次数：<?php echo e($v->login_times); ?> <br>
                                    登录时间：<?php echo e($v->updated_at); ?>

                                </p>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>最新评论 <small>top5</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php $__currentLoopData = $commentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="media event">
                            <a class="pull-left">
                                <img class="bjy-img" src="<?php echo e(url($v->avatar)); ?>" alt="">
                            </a>
                            <div class="media-body">
                                <?php echo e($v->name); ?>

                                <p>
                                    <a href="<?php echo e(url('article', [$v->article_id])); ?>"><?php echo e($v->title); ?></a>
                                    <br>
                                    <?php echo e(re_substr($v->content, 0, 14, '...')); ?>

                                </p>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>环境 <small>php</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content bjy-content">
                    <ul class="list-inline widget_tally">
                        <li>
                            <p>
                                <span class="month">博客版本 </span>
                                <span class="count"><?php echo e(config('bjyblog.version')); ?> <a href="<?php echo e(url('admin/index/upgrade')); ?>" target="_blank">更新</a></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">操作系统 </span>
                                <span class="count"><?php echo e($version['system']); ?></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">环境 </span>
                                <span class="count"><?php echo e($version['webServer']); ?></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">php </span>
                                <span class="count"><?php echo e($version['php']); ?></span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="month">mysql </span>
                                <span class="count"><?php echo e($version['mysql']); ?></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>