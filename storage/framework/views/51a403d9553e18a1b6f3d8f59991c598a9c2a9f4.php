<?php $__env->startSection('title', '添加友情链接'); ?>

<?php $__env->startSection('nav', '添加友情链接'); ?>

<?php $__env->startSection('description', '添加新的友情链接'); ?>

<?php $__env->startSection('content'); ?>

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="<?php echo e(url('admin/friendshipLink/index')); ?>">友情链接列表</a>
        </li>
        <li class="active">
            <a href="<?php echo e(url('admin/friendshipLink/create')); ?>">添加友情链接</a>
        </li>
    </ul>
    <form class="form-horizontal " action="<?php echo e(url('admin/friendshipLink/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>名称</th>
                <td>
                    <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>">
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="<?php echo e(old('url')); ?>">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="<?php echo e(old('sort')); ?>">
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