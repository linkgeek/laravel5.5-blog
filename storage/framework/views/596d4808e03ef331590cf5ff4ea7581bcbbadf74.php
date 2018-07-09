<!-- 热门标签 -->
<div class="b-tags">
    <h4 class="b-title">热门标签</h4>
    <ul class="b-all-tname">
        <?php $tag_i = 0; ?>
        <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $tag_i++; ?>
            <?php $tag_i=$tag_i==5?1:$tag_i; ?>
            <li class="b-tname">
                <a class="tstyle-<?php echo e($tag_i); ?>" href="<?php echo e(url('tag', [$v->id])); ?>" onclick="return recordId('tid','<?php echo e($v->id); ?>')"><?php echo e($v->name); ?>(<?php echo e($v->articles_count); ?>)</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<!-- 置顶推荐 -->
<div class="b-recommend">
    <h4 class="b-title">置顶推荐</h4>
    <p class="b-recommend-p">
        <?php $__currentLoopData = $topArticle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="b-recommend-a" href="<?php echo e(url('article', [$v->id])); ?>" target="_blank"><span class="fa fa-angle-double-right"></span> <?php echo e($v->title); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>
<!-- 最新评论 -->
<div class="b-link">
    <h4 class="b-title">最新评论</h4>
    <div>
        <?php $__currentLoopData = $newComment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="b-new-comment <?php if($loop->first): ?> b-new-commit-first <?php endif; ?>">
                <img class="b-head-img js-head-img" src="<?php echo e(asset('uploads/avatar/default.gif')); ?>" _src="<?php echo e(asset($v->avatar)); ?>" alt="<?php echo e($v->name); ?>">
                <li class="b-nickname">
                    <?php echo e($v->name); ?><span><?php echo e(word_time($v->created_at)); ?></span>
                </li>
                <li class="b-nc-article">
                    在<a href="<?php echo e(url('article', [$v->article_id])); ?>" target="_blank"><?php echo e($v->title); ?></a>中评论
                </li>
                <li class="b-content">
                    <?php echo $v->content; ?>

                </li>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- 友情链接 -->
<eq name="show_link" value="1">
    <div class="b-link">
        <h4 class="b-title">友情链接</h4>
        <p>
            <?php $__currentLoopData = $friendshipLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="b-link-a" href="<?php echo e($v->url); ?>" target="_blank"><span class="fa fa-star-o" style="font-size:12px;"></span> <?php echo e($v->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
    </div>
</eq>