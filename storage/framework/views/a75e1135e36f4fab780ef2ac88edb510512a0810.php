<?php $__env->startSection('title', '发布文章'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('statics/editormd/css/editormd.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('statics/iCheck-1.0.2/skins/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('statics/gentelella/vendors/switchery/dist/switchery.min.css')); ?>">
    <link href="<?php echo e(asset('statics/jasny-bootstrap/css/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
    <style>
        #bjy-content{
            z-index: 1000;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav', '发布文章'); ?>

<?php $__env->startSection('description', '发布新的文章'); ?>

<?php $__env->startSection('content'); ?>

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="<?php echo e(url('admin/article/index')); ?>">文章列表</a>
        </li>
        <li class="active">
            <a href="<?php echo e(url('admin/article/create')); ?>">发布文章</a>
        </li>
    </ul>
    <form class="form-horizontal " action="<?php echo e(url('admin/article/store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th width="7%">分类</th>
                <td>
                    <select class="form-control" name="category_id">
                        <option value="">请选择分类</option>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" <?php if(old('category_id')): ?> selected="selected" <?php endif; ?>><?php echo e($v->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>标题</th>
                <td>
                    <input class="form-control" type="text" name="title" value="<?php echo e(old('title')); ?>">
                </td>
            </tr>
            <tr>
                <th>作者<?php echo e($author); ?></th>
                <td>
                    <input class="form-control" type="text" name="author" value="<?php if(empty(old('author'))): ?><?php echo e($author); ?><?php else: ?><?php echo e(old('author')); ?><?php endif; ?>">
                </td>
            </tr>
            <tr>
                <th>关键词</th>
                <td>
                    <input class="form-control" type="text" placeholder="用英文逗号分隔" name="keywords" value="<?php echo e(old('keywords')); ?>">
                </td>
            </tr>
            <tr>
                <th>标签</th>
                <td>
                    <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($v['name']); ?><input class="bjy-icheck" type="checkbox" name="tag_ids[]" value="<?php echo e($v['id']); ?>" <?php if(in_array($v['id'], old('tag_ids', []))): ?> checked="checked" <?php endif; ?>> &emsp;
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <i class="fa fa-plus-square" style="font-size: 20px;cursor: pointer" data-toggle="modal" data-target="#bjy-tag-modal"></i>
                </td>
            </tr>
            <tr>
                <th>封面图</th>
                <td>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 220px; height: 150px;">

                        </div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">选择图片</span>
                                <span class="fileinput-exists">更改</span>
                                <input type="file" name="cover">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">删除</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <textarea class="form-control modal-sm" name="description" rows="7" placeholder="可以不填，如不填；则截取文章内容前300字为描述"><?php echo e(old('description')); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                    <div id="bjy-content">
                        <textarea name="markdown"><?php echo e(old('markdown')); ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th>置顶</th>
                <td>
                    <input class="js-switch" type="checkbox" name="is_top" value="1" <?php if(old('is_top', 0) == 1): ?> checked="checked" <?php endif; ?>>
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

    
    <div class="modal fade" id="bjy-tag-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">添加标签</h4>
                </div>
                <div class="modal-body text-center">
                    <form class="form-inline" role="form">
                        <input class="form-control bjy-tag-name" type="text" placeholder="标签名">
                        <button type="button" class="btn btn-success" onclick="addTag()">提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('statics/gentelella/vendors/switchery/dist/switchery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('statics/editormd/editormd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('statics/iCheck-1.0.2/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(asset('statics/jasny-bootstrap/js/jasny-bootstrap.min.js')); ?>"></script>
    <script>
        var testEditor;

        $(function() {
            // You can custom @link  base url.
            editormd.urls.atLinkBase = "https://github.com/";

            testEditor = editormd("bjy-content", {
                width     : "100%",
                height    : 720,
                toc       : true,
                //atLink    : false,    // disable @link
                //emailLink : false,    // disable email address auto link
                todoList  : true,
                placeholder: '输入文章内容',
                toolbarAutoFixed: false,
                path      : '<?php echo e(asset('/statics/editormd/lib')); ?>/',
                emoji: true,
                toolbarIcons : ['undo', 'redo', 'bold', 'del', 'italic', 'quote', 'uppercase', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'list-ul', 'list-ol', 'hr', 'link', 'reference-link', 'image', 'code', 'code-block', 'table', 'emoji', 'html-entities', 'watch', 'preview', 'search', 'fullscreen'],
                imageUpload: true,
                imageUploadURL : '<?php echo e(url('admin/article/uploadImage')); ?>',
            });
        });
        function icheckInit() {
            $('.bjy-icheck').iCheck({
                checkboxClass: "icheckbox_minimal-blue",
                radioClass: "iradio_minimal-blue",
                increaseArea: "20%"
            });
        }
        icheckInit();

        function addTag() {
            var postData = {
                name: $('.bjy-tag-name').val()
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo e(url('admin/tag/store')); ?>',
                dataType: 'json',
                data: postData,
                success: function (response) {
                    var redioStr = response.name+'<input class="bjy-icheck" type="checkbox" name="tag_ids[]" value="'+response.id+'" checked="checked"> &emsp;';
                    $('.fa-plus-square').before(redioStr);
                    icheckInit();
                    $('#bjy-tag-modal').modal('hide');
                },
                error: function (response) {
                    $.each(response.responseJSON.errors, function (k, v) {
                        alert(v);
                    })
                }
            })
        }
    </script>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>