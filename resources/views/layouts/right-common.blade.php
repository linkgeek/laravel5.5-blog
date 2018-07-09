<!-- 热门标签 -->
<div class="b-tags">
    <h4 class="b-title">热门标签</h4>
    <ul class="b-all-tname">
        <?php $tag_i = 0; ?>
        @foreach($tag as $v)
            <?php $tag_i++; ?>
            <?php $tag_i=$tag_i==5?1:$tag_i; ?>
            <li class="b-tname">
                <a class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}" onclick="return recordId('tid','{{ $v->id }}')">{{ $v->name }}({{ $v->articles_count }})</a>
            </li>
        @endforeach
    </ul>
</div>
<!-- 置顶推荐 -->
<div class="b-recommend">
    <h4 class="b-title">置顶推荐</h4>
    <p class="b-recommend-p">
        @foreach($topArticle as $v)
            <a class="b-recommend-a" href="{{ url('article', [$v->id]) }}" target="_blank"><span class="fa fa-angle-double-right"></span> {{ $v->title }}</a>
        @endforeach
    </p>
</div>
<!-- 最新评论 -->
<div class="b-link">
    <h4 class="b-title">最新评论</h4>
    <div>
        @foreach($newComment as $v)
            <ul class="b-new-comment @if($loop->first) b-new-commit-first @endif">
                <img class="b-head-img js-head-img" src="{{ asset('uploads/avatar/default.gif') }}" _src="{{ asset($v->avatar) }}" alt="{{ $v->name }}">
                <li class="b-nickname">
                    {{ $v->name }}<span>{{ word_time($v->created_at) }}</span>
                </li>
                <li class="b-nc-article">
                    在<a href="{{ url('article', [$v->article_id]) }}" target="_blank">{{ $v->title }}</a>中评论
                </li>
                <li class="b-content">
                    {!! $v->content !!}
                </li>
            </ul>
        @endforeach
    </div>
</div>
<!-- 友情链接 -->
<eq name="show_link" value="1">
    <div class="b-link">
        <h4 class="b-title">友情链接</h4>
        <p>
            @foreach($friendshipLink as $v)
                <a class="b-link-a" href="{{ $v->url }}" target="_blank"><span class="fa fa-star-o" style="font-size:12px;"></span> {{ $v->name }}</a>
            @endforeach
        </p>
    </div>
</eq>