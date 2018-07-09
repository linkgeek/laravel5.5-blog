<?php $__env->startSection('title', $data->title); ?>

<?php $__env->startSection('keywords', $data->keywords); ?>

<?php $__env->startSection('description', $data->description); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('statics/prism/prism.css')); ?>" />
    <style>
        .js-content p{
            margin-bottom: 20px;;
        }
        pre{border-radius:2px;}
        :not(pre) > code[class*="language-"], pre[class*="language-"] {
            background: #20222A;
        }
        .token.operator, .token.entity, .token.url, .language-css .token.string, .style .token.string {
            background:transparent;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- 左侧文章开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <div class="row b-article">
            <div class="art-main">
                <h1 class="col-xs-12 col-md-12 col-lg-12 b-title"><?php echo e($data->title); ?></h1>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <ul class="row b-metadata">
                        <li class="col-xs-5 col-md-2 col-lg-3"><img src="<?php echo e(asset('uploads/avatar/default.jpg')); ?>" alt=""> <?php echo e($data->author); ?></li>
                        <li class="col-xs-7 col-md-3 col-lg-3 b-fr-768"><img src="<?php echo e(asset('uploads/avatar/time.png')); ?>" alt=""> <?php echo e($data->created_at); ?></li>
                        <li class="col-xs-5 col-md-2 col-lg-3 b-none-768"><i class="fa fa-columns"></i> <a href="<?php echo e(url('category', [$data->category->id])); ?>"><?php echo e($data->category->name); ?></a>
                        <li class="col-xs-7 col-md-5 col-lg-3 b-none-768"><i class="fa fa-tags"></i>
                            <?php $__currentLoopData = $data->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="b-tag-name" href="<?php echo e(url('tag', [$v->id])); ?>"><?php echo e($v->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12 b-content-word">
                    <div class="js-content"><?php echo $data->html; ?></div>  
                    <!-- 推荐 -->
                    <div class="b-praise">
                        <a href="javascript:void(0);" class="btn-praise" data-aid="<?php echo e($data->id); ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                        <div class="praise-num"> 
                            <span class="zan_num"><?php echo e($data->zan_num); ?></span> 人推荐
                        </div>
                        <p class="blame">
                            <?php echo htmlspecialchars_decode($config['COPYRIGHT_WORD']); ?> 。如有侵权，请联系本站删除。
                        </p>
                    </div>
                    <ul class="b-prev-next">
                        <li class="b-prev">
                            上一篇：
                            <?php if(is_null($prev)): ?>
                                <span>没有了</span>
                            <?php else: ?>
                                <a href="<?php echo e(url('article', [$prev->id])); ?>"><?php echo e($prev->title); ?></a>
                            <?php endif; ?>

                        </li>
                        <li class="b-next">
                            下一篇：
                            <?php if(is_null($next)): ?>
                                <span>没有了</span>
                            <?php else: ?>
                                <a href="<?php echo e(url('article', [$next->id])); ?>"><?php echo e($next->title); ?></a>
                            <?php endif; ?>
                        </li>
                    </ul>           
                </div>
            </div>
        </div>
        <!-- 引入通用评论开始 -->
        <script>
            var userEmail='<?php echo e(session('user.email')); ?>';
            tuzkiNumber=1;
        </script>
        <div class="row b-comment">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box">
                <img class="b-head-img" src="<?php if(empty(session('user.avatar'))): ?><?php echo e(asset('images/home/default_head_img.jpg')); ?><?php else: ?><?php echo e(session('user.avatar')); ?><?php endif; ?>" alt="<?php echo e($config['WEB_NAME']); ?>" title="<?php echo e($config['WEB_NAME']); ?>">
                <div class="b-box-textarea">
                    <div class="b-box-content" <?php if(session()->has('user')): ?>contenteditable="true" <?php endif; ?> onfocus="delete_hint(this)" onchange="changeWord(this)">请先登录再发表评论</div>
                    <ul class="b-emote-submit">
                        <li class="b-emote">
                            <i class="fa fa-smile-o" onclick="getTuzki(this)"></i>
                            <input class="form-control b-email" type="text" name="email" placeholder="接收回复的email地址" value="<?php echo e(session('user.email')); ?>">
                            <div class="b-tuzki">

                            </div>
                        </li>
                        <li class="b-submit-button">
                            <input type="button" value="提交评论" aid="<?php echo e(request()->id); ?>" pid="0" onclick="comment(this)">
                        </li>
                        <li class="b-clear-float"></li>
                    </ul>
                </div>
                <div class="b-clear-float"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-title">
                <ul class="row">
                    <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><p>最新评论</p></li>
                    <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">总共<span><?php echo e(count($comment)); ?></span>条评论</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-user-comment">
            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="comment-<?php echo e($v['id']); ?>" class="row b-user b-parent">
                    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                        <img class="b-user-pic js-head-img" src="<?php echo e(asset('uploads/avatar/default.gif')); ?>" _src="<?php echo e(asset($v['avatar'])); ?>" alt="<?php echo e($config['WEB_NAME']); ?>" title="<?php echo e($config['WEB_NAME']); ?>">
                    </div>
                    <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first">
                        <p class="b-content">
                            <span class="b-user-name"><?php echo e($v['name']); ?></span>：<?php echo $v['content']; ?>

                        </p>
                        <p class="b-date">
                            <?php echo e($v['created_at']); ?> <a href="javascript:;" aid="<?php echo e(request()->id); ?>" pid="<?php echo e($v['id']); ?>" username="<?php echo e($v['name']); ?>" onclick="reply(this)">回复</a>
                        </p>
                        <foreach name="v['child']" item="n">
                        <?php $__currentLoopData = $v['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="comment-<?php echo e($n['id']); ?>" class="row b-user b-child">
                                <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                                    <img class="b-user-pic js-head-img" src="<?php echo e(asset('uploads/avatar/default.gif')); ?>" _src="<?php echo e(asset($n['avatar'])); ?>" alt="<?php echo e($config['WEB_NAME']); ?>" title="<?php echo e($config['WEB_NAME']); ?>">
                                </div>
                                <ul class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col">
                                    <li class="b-content">
                                        <span class="b-reply-name"><?php echo e($n['name']); ?></span>
                                        <span class="b-reply">回复</span>
                                        <span class="b-user-name"><?php echo e($n['reply_name']); ?></span>：<?php echo $n['content']; ?>

                                    </li>
                                    <li class="b-date">
                                        <?php echo e($n['created_at']); ?> <a href="javascript:;" aid="<?php echo e(request()->id); ?>" pid="<?php echo e($n['id']); ?>" username="<?php echo e($n['reply_name']); ?>" onclick="reply(this)">回复</a>
                                    </li>
                                    <li class="b-clear-float"></li>
                                </ul>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="b-clear-float"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="b-border"></div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!-- 引入通用评论结束 -->
    </div>
    <!-- 左侧文章结束 -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('right-content'); ?>
    <?php echo $__env->make("layouts.right-user", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if($category_id == 5): ?>
        <?php echo $__env->make("layouts.right-puamap", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make("layouts.right-common", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('statics/prism/prism.js')); ?>"></script>
    <script>
        // 添加行数
        $('pre').addClass('line-numbers');
        // 新页面跳转
        $('.js-content a').attr('target', '_blank');

        // 定义评论url
        ajaxZanUrl = "<?php echo e(url('zan')); ?>";
        ajaxCommentUrl = "<?php echo e(url('comment')); ?>";
        checkLogin = "<?php echo e(url('checkLogin')); ?>";
        titleName = '<?php echo e($config['WEB_NAME']); ?>';
    </script>
    <script src="<?php echo e(asset('js/home/comment.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>