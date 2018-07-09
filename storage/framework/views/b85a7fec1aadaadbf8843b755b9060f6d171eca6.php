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

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="2%">id</th>
            <th width="42%">内容</th>
            <th width="26%">链接</th>
            <th width="12%">添加日期</th>
            <th width="10%">状态</th>
            <th width="12%">操作</th>
        </tr>
        <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($v->id); ?></td>
                <td><?php echo e($v->content); ?></td>
                <td><?php echo e($v->url); ?></td>
                <td><?php echo e($v->created_at); ?></td>
                <td>
                    <?php if( $v->status == 1 ): ?>
                        <label class="checkbox-inline">
                            <input type="checkbox" class="notice-status" onclick="changeshow(this);" data-id="<?php echo e($v->id); ?>" value="1" checked>
                        </label>
                    <?php else: ?>
                        <label class="checkbox-inline">
                            <input type="checkbox" class="notice-status" onclick="changeshow(this);" data-id="<?php echo e($v->id); ?>" value="0">
                        </label>
                    <?php endif; ?>                   
                </td>
                <td>
                    <a href="<?php echo e(url('admin/notice/edit', [$v->id])); ?>">编辑</a>
                    |
                    <?php if(is_null($v->deleted_at)): ?>
                        <a href="javascript:if(confirm('确认删除?'))location.href='<?php echo e(url('admin/notice/destroy', [$v->id])); ?>'">删除</a>
                    <?php else: ?>
                        <a href="javascript:if(confirm('确认恢复?'))location.href='<?php echo e(url('admin/notice/restore', [$v->id])); ?>'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='<?php echo e(url('admin/notice/forceDelete', [$v->id])); ?>'">彻底删除</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="text-center">
        <?php echo e($notices->links('vendor.pagination.bjypage')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    function changeshow(o){
        var code = $(o).attr("value");
        var id = $(o).attr("data-id");

        $.ajax({
          type: 'POST',
          data:{code: code,id: id},
          url: "<?php echo e(url('admin/notice/status')); ?>",
          success:function(data){
            
          }
        });
    }
</script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>