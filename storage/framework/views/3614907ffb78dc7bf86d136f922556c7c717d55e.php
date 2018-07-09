<?php $__env->startSection('title', '随言碎语列表'); ?>

<?php $__env->startSection('nav', '随言碎语列表'); ?>

<?php $__env->startSection('description', '博客随言碎语'); ?>

<?php $__env->startSection('content'); ?>
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="<?php echo e(url('admin/chat/index')); ?>">随言碎语列表</a>
        </li>
        <li>
            <a href="<?php echo e(url('admin/chat/create')); ?>">添加随言碎语</a>
        </li>
    </ul>

    <form class="form-inline" action="<?php echo e(url('admin/chat/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="10" placeholder="随言碎语内容"><?php echo e(old('content')); ?></textarea>
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