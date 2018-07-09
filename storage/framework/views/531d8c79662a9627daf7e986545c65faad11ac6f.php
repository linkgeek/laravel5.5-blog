<?php $__env->startSection('title', '评论列表'); ?>

<?php $__env->startSection('nav', '评论列表'); ?>

<?php $__env->startSection('description', '文章评论'); ?>

<?php $__env->startSection('css'); ?>
    <style>
        /*表格和div内容自动换行*/
        table,
        div {
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="5%">id</th>
            <th width="35%">评论内容</th>
            <th width="25%">文章</th>
            <th width="10%">用户</th>
            <th width="15%">评论日期</th>
            <th width="5%">状态</th>
            <th width="5%">操作</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($v->id); ?></td>
                <td><?php echo htmlspecialchars_decode($v->content); ?></td>
                <td>
                    <a href="<?php echo e(url('article', [$v->article_id])); ?>#comment-<?php echo e($v->id); ?>" target="_blank"><?php echo e($v->title); ?></a>
                </td>
                <td><?php echo e($v->name); ?></td>
                <td><?php echo e($v->created_at); ?></td>
                <td>
                    <?php if(is_null($v->deleted_at)): ?>
                        √
                    <?php else: ?>
                        ×
                    <?php endif; ?>
                </td>
                <td>
                    <?php if(is_null($v->deleted_at)): ?>
                        <a href="javascript:if(confirm('确认删除?'))location.href='<?php echo e(url('admin/comment/destroy', [$v->id])); ?>'">删除</a>
                    <?php else: ?>
                        <a href="javascript:if(confirm('确认恢复?'))location.href='<?php echo e(url('admin/comment/restore', [$v->id])); ?>'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='<?php echo e(url('admin/comment/forceDelete', [$v->id])); ?>'">彻底删除</a>
                    <?php endif; ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="text-center">
        <?php echo e($data->links('vendor.pagination.bjypage')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>