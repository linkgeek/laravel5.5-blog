<?php $__env->startSection('title', '文章列表'); ?>

<?php $__env->startSection('nav', '文章列表'); ?>

<?php $__env->startSection('description', '已发布的文章列表'); ?>

<?php $__env->startSection('content'); ?>

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="<?php echo e(url('admin/article/index')); ?>">文章列表</a>
        </li>
        <li>
            <a href="<?php echo e(url('admin/article/create')); ?>">发布文章</a>
        </li>
    </ul>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>文章id</th>
            <th>分类</th>
            <th>标题</th>
            <th>点击数</th>
            <th>状态</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($v->id); ?></td>
                <td><?php echo e($v->category->name); ?></td>
                <td>
                    <a href="<?php echo e(url('article', [$v->id])); ?>" target="_blank"><?php echo e($v->title); ?></a>
                </td>
                <td><?php echo e($v->click); ?></td>
                <td>
                    <?php if(is_null($v->deleted_at)): ?>
                        √
                    <?php else: ?>
                        ×
                    <?php endif; ?>
                </td>
                <td><?php echo e($v->created_at); ?></td>
                <td>
                    <a href="<?php echo e(url('admin/article/edit', [$v->id])); ?>">编辑</a>
                    |
                    <?php if($v->trashed()): ?>
                        <a href="javascript:if(confirm('确认恢复?'))location.href='<?php echo e(url('admin/article/restore', [$v->id])); ?>'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='<?php echo e(url('admin/article/forceDelete', [$v->id])); ?>'">彻底删除</a>
                    <?php else: ?>
                        <a href="javascript:if(confirm('确认删除?'))location.href='<?php echo e(url('admin/article/destroy', [$v->id])); ?>'">删除</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="text-center">
        <?php echo e($article->links('vendor.pagination.bjypage')); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>