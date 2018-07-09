<?php $__env->startSection('title', '友情链接列表'); ?>

<?php $__env->startSection('nav', '友情链接列表'); ?>

<?php $__env->startSection('description', '博客友情链接'); ?>

<?php $__env->startSection('content'); ?>

    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="<?php echo e(url('admin/friendshipLink/index')); ?>">友情链接列表</a>
        </li>
        <li>
            <a href="<?php echo e(url('admin/friendshipLink/create')); ?>">添加友情链接</a>
        </li>
    </ul>
    <form action="<?php echo e(url('admin/friendshipLink/sort')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th width="5%">id</th>
                <th width="5%">排序</th>
                <th width="20%">链接名</th>
                <th width="40%">链接地址</th>
                <th width="5%">状态</th>
                <th width="15%">操作</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($v->id); ?></td>
                    <td>
                        <input class="form-control" type="text" name="<?php echo e($v->id); ?>" value="<?php echo e($v->sort); ?>">
                    </td>
                    <td><?php echo e($v->name); ?></td>
                    <td><a href="<?php echo e($v->url); ?>" target="_blank"><?php echo e($v->url); ?></a></td>
                    <td>
                        <?php if(is_null($v->deleted_at)): ?>
                            √
                        <?php else: ?>
                            ×
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(url('admin/friendshipLink/edit', [$v->id])); ?>">编辑</a> |
                        <?php if(is_null($v->deleted_at)): ?>
                            <a href="javascript:if(confirm('确定要删除吗?')) location='<?php echo e(url('admin/friendshipLink/destroy', [$v->id])); ?>'">删除</a>
                        <?php else: ?>
                            <a href="javascript:if(confirm('确认恢复?'))location.href='<?php echo e(url('admin/friendshipLink/restore', [$v->id])); ?>'">恢复</a>
                            |
                            <a href="javascript:if(confirm('彻底删除?'))location.href='<?php echo e(url('admin/friendshipLink/forceDelete', [$v->id])); ?>'">彻底删除</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-success" type="submit" value="排序">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>