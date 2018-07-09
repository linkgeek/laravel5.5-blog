@extends('layouts.home')

@section('title', $title)

@section('keywords', $config['WEB_KEYWORDS'])

@section('description', $config['WEB_DESCRIPTION'])

@section('css')
@parent
<style>
    .slideBox{width:100%;position:relative;overflow: hidden;}
    .slideBox .hd{position:absolute;left:50%;bottom:10px;margin-left:-31px;z-index:1;}
	.slideBox .hd ul{ float:left; padding:4px;background-color:rgba(0,0,0,.2);border-radius:10px;}
	.slideBox .hd ul li{float:left;margin:0 4px;width:10px;height:10px;line-height:14px;text-align:center;background:#fff;border-radius:100%;}
	.slideBox .hd ul li.on{background:#FF5722;color:#fff;}
	.slideBox .bd{width:100%;position:relative;}
	.slideBox .bd li{zoom:1;vertical-align:middle;}
	.slideBox .bd img{width:100%;max-height:320px;display:block;}
	.slideBox .prev,
	.slideBox .next{position:absolute;left:3%; top:50%; margin-top:-25px; display:block; width:36px; height:36px;background:rgba(0,0,0,.2); filter:alpha(opacity=50);opacity:0.5;border-radius: 100%;color: #fff;font-size: 36px;text-align: center; line-height: 30px;}
	.slideBox .next{left:auto; right:3%; background-position:8px 5px;}
	.slideBox .prev:hover,.slideBox .next:hover{filter:alpha(opacity=100);opacity:1;}
	.slideBox .prevStop{display:none;}
	.slideBox .nextStop{display:none;}
</style> 
@endsection

@section('content')
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8 b-puamap">
        <!-- 轮播 -->
        <div class="row p-banner" style="">
    		<div id="slideBox" class="slideBox" style="background:#fff;padding:4px;box-shadow:0 1px 2px 0 #E2E2E2;">
    			<div class="hd">
					<ul><li></li><li></li><li></li></ul>
				</div>
				<div class="bd">
					<ul>
						<li><a href="" target="_blank"><img src="{{ asset('uploads/images/banner01.jpg') }}"></a></li>
						<li><a href="" target="_blank"><img src="{{ asset('uploads/images/banner02.jpg') }}"></a></li>
						<li><a href="" target="_blank"><img src="{{ asset('uploads/images/banner03.jpg') }}"></a></li>
					</ul>
				</div>
				<!-- 前/后按钮代码 -->
				<a class="prev" href="javascript:void(0)"> ‹ </a>
				<a class="next" href="javascript:void(0)"> › </a>
			</div>
        </div>
        <!-- 循环文章列表开始 -->
        @foreach($puamap as $k => $v)
        <div class="row b-one-article">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <ul class="b-art-list">
                    <li class="b-list-li">
                        <a class="b-list-avatar" href="{{ url('article', $v->id) }}" target="_blank">
                            <img src="{{ asset($v->cover) }}" alt="{{ $config['IMAGE_TITLE_ALT_WORD'] }}" title="{{ $config['IMAGE_TITLE_ALT_WORD'] }}">
                        </a>
                        <h2 class="b-tip">
                            <a class="b-oa-title" href="{{ url('article', [$v->id]) }}" target="_blank">{{ $v->title }}</a>
                        </h2>
                        <p>
                            <span><a href="#"><img src="{{ asset('uploads/avatar/default.jpg') }}" alt="">{{ $v->author }}</a></span>
                            <span class="b-none-768">{{ $v->created_at }}</span>
                            <span class="b-list-hint" style="padding-right: 0;"> 
                                <i class="fa fa-commenting-o" title="评论"></i> {{ $v->comments_count }}<i class="fa fa-eye" title="人气"></i> {{ $v->click }} <i class="fa fa-thumbs-o-up" title="点赞"></i> {{ $v->zan_num }}
                            </span>
                        </p>
                        <p class="b-none-768">{!! str_limit($v->description, 200, '...') !!}</p>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
        <!-- 循环文章列表结束 -->

        <!-- 列表分页开始 -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">
                {{ $puamap->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage') }}
            </div>
        </div>
        <!-- 列表分页结束 -->
    </div>
    <!-- 左侧列表结束 -->
@endsection

@section('right-content')
    @include("layouts.right-user")
    @include("layouts.right-puamap")
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/home/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript">
    jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true,delayTime:700});
</script>
@endsection