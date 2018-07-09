<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keywords', $config['WEB_KEYWORDS']); ?>

<?php $__env->startSection('description', $config['WEB_DESCRIPTION']); ?>

<?php $__env->startSection('content'); ?>
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8 b-chat">
        <div class="b-chat-left">
           投稿页面还没出炉...         
        </div>
    </div>
    <!-- 左侧列表结束 -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>