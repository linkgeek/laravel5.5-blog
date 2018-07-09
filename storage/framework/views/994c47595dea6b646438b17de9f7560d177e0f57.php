<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keywords', $config['WEB_KEYWORDS']); ?>

<?php $__env->startSection('description', $config['WEB_DESCRIPTION']); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .pro_name a{color: #4183c4;}
        .osc_git_title{background-color: #d8e5f1;}
        .osc_git_box{background-color: #fafafa;}
        .osc_git_box{border-color: #ddd;}
        .osc_git_info{color: #666;}
        .osc_git_main a{color: #4183c4;}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="col-xs-12 col-md-12 col-lg-8 b-chat">
        <?php $__currentLoopData = $gitProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($v->type == 1): ?>
                <div class="github-widget" data-repo="<?php echo e($v->name); ?>"></div>
            <?php elseif($v->type == 2): ?>
                <script src='//gitee.com/<?php echo e($v->name); ?>/widget_preview'></script>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('statics/js/jquery.githubRepoWidget.min.js')); ?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.osc_git_box a,.github-widget a').attr('target','_blank');
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>