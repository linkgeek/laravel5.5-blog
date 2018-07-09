<?php $__env->startSection('title', '配置项'); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('statics/gentelella/vendors/iCheck/skins/square/blue.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('statics/jasny-bootstrap/css/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav', '配置项'); ?>

<?php $__env->startSection('description', '配置项'); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-inline" enctype="multipart/form-data" action="<?php echo e(url('admin/config/update')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th width="20%">网站状态：</th>
                <td>
                    <span class="inputword">开启</span>
                    <input class="bjy-icheck" type="radio" name="WEB_STATUS" value="1" <?php if($config['WEB_STATUS'] ==1): ?> checked <?php endif; ?>>
                    <span class="inputword">关闭</span>
                    <input class="bjy-icheck" type="radio" name="WEB_STATUS" value="0" <?php if($config['WEB_STATUS'] ==0): ?> checked <?php endif; ?>>
                </td>
            </tr>
            <tr>
                <th>网站关闭时提示文字：</th>
                <td>
                    <textarea class="form-control modal-sm" name="WEB_CLOSE_WORD" rows="5" placeholder=""><?php echo e($config['WEB_CLOSE_WORD']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>备案号：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="WEB_ICP_NUMBER" value="<?php echo e($config['WEB_ICP_NUMBER']); ?>" >
                </td>
            </tr>
            <tr>
                <th>站长邮箱：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="ADMIN_EMAIL" value="<?php echo e($config['ADMIN_EMAIL']); ?>" >
                </td>
            </tr>
            <tr>
                <th>网站名：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="WEB_NAME" value="<?php echo e($config['WEB_NAME']); ?>" >
                </td>
            </tr>
            <tr>
                <th>网站标题：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="WEB_TITLE" value="<?php echo e($config['WEB_TITLE']); ?>" >
                </td>
            </tr>
            <tr>
                <th>网站关键字：</th>
                <td>
                    <textarea class="form-control modal-sm" name="WEB_KEYWORDS" rows="5" placeholder=""><?php echo e($config['WEB_KEYWORDS']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>网站描述：</th>
                <td>
                    <textarea class="form-control modal-sm" name="WEB_DESCRIPTION" rows="5" placeholder=""><?php echo e($config['WEB_DESCRIPTION']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>默认作者：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="AUTHOR" value="<?php echo e($config['AUTHOR']); ?>" >
                </td>
            </tr>
            <tr>
                <th>文章保留版权提示：</th>
                <td>
                    <textarea class="form-control modal-sm" name="COPYRIGHT_WORD" rows="5" placeholder=""><?php echo e($config['COPYRIGHT_WORD']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>文章图片title和alt内容：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="IMAGE_TITLE_ALT_WORD" value="<?php echo e($config['IMAGE_TITLE_ALT_WORD']); ?>" >
                </td>
            </tr>
            <tr>
                <th>文字水印内容：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="TEXT_WATER_WORD" value="<?php echo e($config['TEXT_WATER_WORD']); ?>" >
                </td>
            </tr>
            <tr>
                <th>文字水印文字颜色：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="TEXT_WATER_COLOR" value="<?php echo e($config['TEXT_WATER_COLOR']); ?>" >
                </td>
            </tr>
            <tr>
                <th>QQ登录APP ID：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="QQ_APP_ID" value="<?php echo e($config['QQ_APP_ID']); ?>" >
                </td>
            </tr>
            <tr>
                <th>QQ登录APP KEY：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="QQ_APP_KEY" value="<?php echo e($config['QQ_APP_KEY']); ?>" >
                </td>
            </tr>
            <tr>
                <th>新浪微博登录API KEY：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="SINA_API_KEY" value="<?php echo e($config['SINA_API_KEY']); ?>" >
                </td>
            </tr>
            <tr>
                <th>新浪微博登录SECRET：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="SINA_SECRET" value="<?php echo e($config['SINA_SECRET']); ?>" >
                </td>
            </tr>
            <tr>
                <th>github Client ID：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="GITHUB_CLIENT_ID" value="<?php echo e($config['GITHUB_CLIENT_ID']); ?>" >
                </td>
            </tr>
            <tr>
                <th>github Client Secret：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="GITHUB_CLIENT_SECRET" value="<?php echo e($config['GITHUB_CLIENT_SECRET']); ?>" >
                </td>
            </tr>
            <tr>
                <th>百度推送site提交链接：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="BAIDU_SITE_URL" value="<?php echo e($config['BAIDU_SITE_URL']); ?>" >
                </td>
            </tr>
            <tr>
                <th>第三方统计代码：</th>
                <td>
                    <textarea class="form-control modal-sm" name="WEB_STATISTICS" rows="5" placeholder=""><?php echo e($config['WEB_STATISTICS']); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>SMTP服务器：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="EMAIL_SMTP" value="<?php echo e($config['EMAIL_SMTP']); ?>" >
                </td>
            </tr>
            <tr>
                <th>邮箱账号：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="EMAIL_USERNAME" value="<?php echo e($config['EMAIL_USERNAME']); ?>" >
                </td>
            </tr>
            <tr>
                <th>邮箱密码：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="EMAIL_PASSWORD" value="<?php echo e($config['EMAIL_PASSWORD']); ?>" >
                </td>
            </tr>
            <tr>
                <th>发件人名称：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="EMAIL_FROM_NAME" value="<?php echo e($config['EMAIL_FROM_NAME']); ?>" >
                </td>
            </tr>
            <tr>
                <th>接收评论通知邮箱：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="EMAIL_RECEIVE" value="<?php echo e($config['EMAIL_RECEIVE']); ?>" >
                </td>
            </tr>
            <tr>
                <th>QQ群说明文章id：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="QQ_QUN_ARTICLE_ID" value="<?php echo e($config['QQ_QUN_ARTICLE_ID']); ?>" >
                </td>
            </tr>
            <tr>
                <th>QQ群账号：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="QQ_QUN_NUMBER" value="<?php echo e($config['QQ_QUN_NUMBER']); ?>" >如果群账号为空则前台不展示赞赏捐赠模块
                </td>
            </tr>
            <tr>
                <th>QQ群代码：</th>
                <td>
                    <textarea class="form-control modal-sm" name="QQ_QUN_CODE" rows="5" placeholder=""><?php echo e($config['QQ_QUN_CODE']); ?></textarea><a href="http://qun.qq.com/join.html" target="_blank">http://qun.qq.com/join.html</a>
                </td>
            </tr>
            <tr>
                <th>QQ群二维码：</th>
                <td>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 180px; height: 180px;">
                            <img src="<?php echo e(asset($config['QQ_QUN_OR_CODE'])); ?>" alt="群二维码">
                        </div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">选择图片</span>
                                <span class="fileinput-exists">更改</span>
                                <input type="file" name="QQ_QUN_OR_CODE">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">删除</a>
                        </div>
                    </div>
                    <a href="http://qun.qq.com/join.html" target="_blank">http://qun.qq.com/join.html</a>
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

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('statics/gentelella/vendors/iCheck/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(asset('statics/jasny-bootstrap/js/jasny-bootstrap.min.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            $('.bjy-icheck').iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>