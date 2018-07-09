
<!-- 热门标签 -->
<div class="b-tags">
    <h4 class="b-title">热门标签</h4>
    <ul class="b-all-tname">
        <?php $tag_i = 0; ?>
        <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $tag_i++; ?>
            <?php $tag_i=$tag_i==5?1:$tag_i; ?>
            <li class="b-tname">
                <a class="tstyle-<?php echo e($tag_i); ?>" href="<?php echo e(url('tag', [$v->id])); ?>"><?php echo e($v->name); ?> (<?php echo e($v->articles_count); ?>)</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<!-- QQ -->
<?php if(!empty($config['QQ_QUN_NUMBER'])): ?>
    <div class="b-qun cl">
        <h4 class="b-title">把妹俱乐部</h4>
        <ul class="b-all-tname">
            <li class="b-qun-or-code">
                <img src="<?php echo e(asset($config['QQ_QUN_OR_CODE'])); ?>" alt="QQ">
            </li>
            <li class="b-qun-word">
                <p class="b-qun-nuber">
                    1. 手Q扫左侧二维码
                </p>
                <p class="b-qun-nuber">
                    2. 搜Q群：<?php echo e($config['QQ_QUN_NUMBER']); ?>

                </p>
                <p class="b-qun-code">
                    3. 点击 <?php echo $config['QQ_QUN_CODE']; ?>

                </p>
                <p class="b-qun-article">
                    <?php if(!empty($qqQunArticle['id'])): ?>
                        <a href="<?php echo e(url('article', [$qqQunArticle['id']])); ?>" target="_blank"><?php echo e($qqQunArticle['title']); ?></a>
                    <?php endif; ?>
                </p>
            </li>
        </ul>
    </div>
<?php endif; ?>

<!-- 公众号 -->
<div class="b-weixin">
    <h4 class="b-title">拍照自修室</h4>
    <div class="b-qrcode">
        <img src="<?php echo e(asset('/uploads/images/qrcode.jpg')); ?>" style="width:150px;">
    </div>
</div>