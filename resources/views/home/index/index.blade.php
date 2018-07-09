@extends('layouts.home')

@section('title', $head['title'])

@section('keywords', $head['keywords'])

@section('description', $head['description'])

@section('css')
@parent
<style>
    .txtScroll-top{width:100%;overflow:hidden;position:relative;}
    .txtScroll-top .bd{padding:15px;}
    .txtScroll-top .infoList li{height:24px;overflow:hidden;line-height:24px;}
    .txtScroll-top .infoList li .date{float:right;color:#999;}
    .txtScroll-top .infoList li a{word-break:break-all;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;}
    .layui-layer-setwin a {transition:none;-moz-transition:none;-webkit-transition:none;-o-transition:none;}
</style> 
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/home/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript">
jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,delayTime:1000});
</script>
@endsection

@section('content')
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <!-- 公告开始 -->
        <div class="row b-notice">
            <div class="col-xs-3 col-sm-2 col-md-2 b-notice-l">
                <span class="mobile-code"><i class="fa fa-bell-o"></i> 公告：&nbsp;&nbsp;</span>
            </div>
            <div class="col-xs-9 col-sm-10 col-md-10 scroll-box">
                <div class="txtScroll-top">
                    <div class="bd">
                        <ul class="infoList">
                            @foreach($notices as $v)
                            <li><span class="date b-none-768">{{$v->created_at->format('Y-m-d')}}</span> <a href="{{$v->url}}" target="_blank">{{$v->content}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>       
        </div>
        <!-- 公告结束 -->
        @if(!empty($tagName))
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>拥有<span class="b-highlight">{{ $tagName }}</span>标签的文章</h2>
                </div>
            </div>
        @endif
        @if(request()->has('kw'))
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>搜索到的与<span class="b-highlight">{{ request()->input('kw') }}</span>相关的文章</h2>
                </div>
            </div>
        @endif
        <!-- 循环文章列表开始 -->
        @foreach($article as $k => $v)
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
                {{ $article->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage') }}
            </div>
        </div>
        <!-- 列表分页结束 -->
    </div>
    <!-- 左侧列表结束 -->
@endsection

@section('right-content')
    @include("layouts.right-stat")
    @include("layouts.right-common")
@endsection