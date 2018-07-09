<?php $__env->startSection('title', '编辑公告'); ?>

<?php $__env->startSection('nav', '编辑公告'); ?>

<?php $__env->startSection('description', '编辑公告'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" action="/admin/notice/<?php echo e($data->id); ?>" method="post">
        <?php echo e(method_field("PUT")); ?>

        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="10" placeholder="公告内容"><?php echo e(old('content') ? old('content') :$data['content']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="<?php echo e($data['url']); ?>">
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