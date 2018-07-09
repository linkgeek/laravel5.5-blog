<?php $__env->startSection('title', '公告列表'); ?>

<?php $__env->startSection('nav', '公告列表'); ?>

<?php $__env->startSection('description', '博客公告'); ?>

<?php $__env->startSection('content'); ?>
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="<?php echo e(url('admin/notice/index')); ?>">公告列表</a>
        </li>
        <li>
            <a href="<?php echo e(url('admin/notice/create')); ?>">添加公告</a>
        </li>
    </ul>

    <form class="form-horizontal" action="<?php echo e(url('admin/notice/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="6" placeholder="公告内容"><?php echo e(old('content')); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="<?php echo e(old('url')); ?>">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>