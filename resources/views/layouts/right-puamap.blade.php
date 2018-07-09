
<!-- 热门标签 -->
<div class="b-tags">
    <h4 class="b-title">热门标签</h4>
    <ul class="b-all-tname">
        <?php $tag_i = 0; ?>
        @foreach($tag as $v)
            <?php $tag_i++; ?>
            <?php $tag_i=$tag_i==5?1:$tag_i; ?>
            <li class="b-tname">
                <a class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}">{{ $v->name }} ({{ $v->articles_count }})</a>
            </li>
        @endforeach
    </ul>
</div>

<!-- QQ -->
@if(!empty($config['QQ_QUN_NUMBER']))
    <div class="b-qun cl">
        <h4 class="b-title">把妹俱乐部</h4>
        <ul class="b-all-tname">
            <li class="b-qun-or-code">
                <img src="{{ asset($config['QQ_QUN_OR_CODE']) }}" alt="QQ">
            </li>
            <li class="b-qun-word">
                <p class="b-qun-nuber">
                    1. 手Q扫左侧二维码
                </p>
                <p class="b-qun-nuber">
                    2. 搜Q群：{{ $config['QQ_QUN_NUMBER'] }}
                </p>
                <p class="b-qun-code">
                    3. 点击 {!! $config['QQ_QUN_CODE'] !!}
                </p>
                <p class="b-qun-article">
                    @if(!empty($qqQunArticle['id']))
                        <a href="{{ url('article', [$qqQunArticle['id']]) }}" target="_blank">{{ $qqQunArticle['title'] }}</a>
                    @endif
                </p>
            </li>
        </ul>
    </div>
@endif

<!-- 公众号 -->
<div class="b-weixin">
    <h4 class="b-title">拍照自修室</h4>
    <div class="b-qrcode">
        <img src="{{ asset('/uploads/images/qrcode.jpg') }}" style="width:150px;">
    </div>
</div>