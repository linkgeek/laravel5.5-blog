<?php $__env->startSection('title', $head['title']); ?>

<?php $__env->startSection('keywords', $head['keywords']); ?>

<?php $__env->startSection('description', $head['description']); ?>

<?php $__env->startSection('css'); ?>
##parent-placeholder-2f84417a9e73cead4d5c99e05daff2a534b30132##
<style>
    .txtScroll-top{width:100%;overflow:hidden;position:relative;}
    .txtScroll-top .bd{padding:15px;}
    .txtScroll-top .infoList li{height:24px;overflow:hidden;line-height:24px;}
    .txtScroll-top .infoList li .date{float:right;color:#999;}
    .txtScroll-top .infoList li a{word-break:break-all;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;}
    .layui-layer-setwin a {transition:none;-moz-transition:none;-webkit-transition:none;-o-transition:none;}
</style> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/home/jquery.SuperSlide.2.1.1.js')); ?>"></script>
<script type="text/javascript">
jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,delayTime:1000});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <!-- 公告开始 -->
        <div class="row b-notice">
            <div class="col-xs-3 col-sm-2 col-md-2 b-notice-l">
                <span class="mobile-code"><i class="fa fa-bell-o"></i> 公告：&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-9 col-sm-10 col-md-10 scroll-box">
                <div class="txtScroll-top">
                    <div class="bd">
                        <ul class="infoList">
                            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><span class="date b-none-768"><?php echo e($v->created_at->format('Y-m-d')); ?></span> <a href="<?php echo e($v->url); ?>" target="_blank"><?php echo e($v->content); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>       
        </div>
        <!-- 公告结束 -->
        <?php if(!empty($tagName)): ?>
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>拥有<span class="b-highlight"><?php echo e($tagName); ?></span>标签的文章</h2>
                </div>
            </div>
        <?php endif; ?>
        <?php if(request()->has('kw')): ?>
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>搜索到的与<span class="b-highlight"><?php echo e(request()->input('kw')); ?></span>相关的文章</h2>
                </div>
            </div>
        <?php endif; ?>
        <!-- 循环文章列表开始 -->
        <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row b-one-article">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <ul class="b-art-list">
                    <li class="b-list-li">
                        <a class="b-list-avatar" href="<?php echo e(url('article', $v->id)); ?>" target="_blank">
                            <img src="<?php echo e(asset($v->cover)); ?>" alt="<?php echo e($config['IMAGE_TITLE_ALT_WORD']); ?>" title="<?php echo e($config['IMAGE_TITLE_ALT_WORD']); ?>">
                        </a>
                        <h2 class="b-tip">
                            <a class="b-oa-title" href="<?php echo e(url('article', [$v->id])); ?>" target="_blank"><?php echo e($v->title); ?></a>
                        </h2>
                        <p>
                            <span><a href="#"><img src="<?php echo e(asset('uploads/avatar/default.jpg')); ?>" alt=""><?php echo e($v->author); ?></a></span>
                            <span class="b-none-768"><?php echo e($v->created_at); ?></span>
                            <span class="b-list-hint" style="padding-right: 0;"> 
                                <i class="fa fa-commenting-o" title="评论"></i> <?php echo e($v->comments_count); ?><i class="fa fa-eye" title="人气"></i> <?php echo e($v->click); ?> <i class="fa fa-thumbs-o-up" title="点赞"></i> <?php echo e($v->zan_num); ?>

                            </span>
                        </p>
                        <p class="b-none-768"><?php echo str_limit($v->description, 200, '...'); ?></p>
                    </li>
                </ul>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- 循环文章列表结束 -->

        <!-- 列表分页开始 -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">
                <?php echo e($article->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage')); ?>

            </div>
        </div>
        <!-- 列表分页结束 -->
    </div>
    <!-- 左侧列表结束 -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('right-content'); ?>
    <?php echo $__env->make("layouts.right-stat", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make("layouts.right-common", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>