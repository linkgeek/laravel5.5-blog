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

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="5%">id</th>
            <th width="65%">内容</th>
            <th width="15%">添加日期</th>
            <th width="5%">状态</th>
            <th width="10%">操作</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($v->id); ?></td>
                <td><?php echo e($v->content); ?></td>
                <td><?php echo e($v->created_at); ?></td>
                <td>
                    <?php if(is_null($v->deleted_at)): ?>
                        √
                    <?php else: ?>
                        ×
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(url('admin/chat/edit', [$v->id])); ?>">编辑</a>
                    |
                    <?php if(is_null($v->deleted_at)): ?>
                        <a href="javascript:if(confirm('确认删除?'))location.href='<?php echo e(url('admin/chat/destroy', [$v->id])); ?>'">删除</a>
                    <?php else: ?>
                        <a href="javascript:if(confirm('确认恢复?'))location.href='<?php echo e(url('admin/chat/restore', [$v->id])); ?>'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='<?php echo e(url('admin/chat/forceDelete', [$v->id])); ?>'">彻底删除</a>
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