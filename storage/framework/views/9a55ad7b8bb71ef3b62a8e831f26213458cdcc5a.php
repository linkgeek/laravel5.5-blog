<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keywords', $config['WEB_KEYWORDS']); ?>

<?php $__env->startSection('description', $config['WEB_DESCRIPTION']); ?>

<?php $__env->startSection('content'); ?>
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8 b-chat">
        <div class="b-chat-left">
            <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($k%2 == 0): ?>
                    <ul class="b-chat-one animated bounceInLeft">
                        <li class="b-chat-title "><?php echo e($v->created_at); ?></li>
                        <li class="b-chat-content"><?php echo e($v->content); ?></li>
                        <div class="b-arrows-right1">
                            <div class="b-arrows-round"></div>
                        </div>
                        <div class="b-arrows-right2"></div>
                    </ul>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="b-chat-middle"></div>
        <div class="b-chat-right">
            <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($k%2 == 1): ?>
                    <ul class="b-chat-one animated bounceInRight">
                        <li class="b-chat-title "><?php echo e($v->created_at); ?></li>
                        <li class="b-chat-content"><?php echo e($v->content); ?></li>
                        <div class="b-arrows-right1">
                            <div class="b-arrows-round"></div>
                        </div>
                        <div class="b-arrows-right2"></div>
                    </ul>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- 左侧列表结束 -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>