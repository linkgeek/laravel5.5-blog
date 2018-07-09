<?php $__env->startSection('title', '添加分类'); ?>

<?php $__env->startSection('nav', '添加分类'); ?>

<?php $__env->startSection('description', '添加新的分类'); ?>

<?php $__env->startSection('content'); ?>

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="<?php echo e(url('admin/category/index')); ?>">分类列表</a>
        </li>
        <li class="active">
            <a href="<?php echo e(url('admin/category/create')); ?>">添加分类</a>
        </li>
    </ul>
    <form class="form-horizontal " action="<?php echo e(url('admin/category/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>分类名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>">
                </td>
            </tr>
            <tr>
                <th>关键字</th>
                <td>
                    <input class="form-control" type="text" name="keywords" value="<?php echo e(old('keywords')); ?>">
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <input class="form-control" type="text" name="description" value="<?php echo e(old('description')); ?>">
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