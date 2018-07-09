
<div class="b-stat">
    <div class="b-search cl">
        <form class="form-inline" role="form" action="<?php echo e(url('search')); ?>" method="get">
            <input class="b-search-text" type="text" name="kw" placeholder="全站搜索">
            <button type="submit" class="b-search-submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="b-stat-list cl">
        <ul>
            <li><span><?php echo e($articleCount); ?></span>文章总数</li>
            <li style="border-left: 1px solid #f1f1f1;border-right: 1px solid #f1f1f1;"><span><?php echo e($userCount); ?></span>会员总数</li>
            <li><span><?php echo e($commentCount); ?></span>评论总数</li>
        </ul>
    </div>
    <div class="b-grid-org cl">
        <h2>欢迎投稿打赏</h2>
        <a class="tougao" href="javascript:void(0);" onclick="tougao(this)">我要投稿</a>
        <a class="zanzhu" href="javascript:void(0);">我要打赏</a>
    </div>
</div>
