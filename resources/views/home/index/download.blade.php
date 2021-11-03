@extends('layouts.home')

@section('title', $title)

@section('keywords', $config['WEB_KEYWORDS'])

@section('description', $config['WEB_DESCRIPTION'])

@section('content')
    <!-- 左侧列表开始 -->
    <div id="b-tool" class="col-xs-12 col-md-12 col-lg-8">
    	<div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-paper-plane-o"></i> 前端WEB工具 <small>前端WEB工具/前端工具</small></h4>
	        <div class="col-xs-12">
	        	<img src="{{ asset('images/home/tool/vue.png') }}" alt="Node.js 中文网">
                <a href="javascript:void(0);" onclick="download('http://120.25.227.106:8081/uploads/article/default1.jpg')">下载1</a>
                <a href="{{ url('download2') }}">下载2</a>
                <a href="{{ url('download?filename=images/home/tool/vue.png') }}">下载3</a>
		        <a href="https://vuefe.cn/" class="" target="_blank">Vue.js 中文文档</a>
		        <img src="{{ asset('images/home/tool/font-awesome.ico') }}" alt="Node.js 中文网">
		        <a href="javascript:void(0);">Font Awesome</a>
		        <img src="{{ asset('images/home/tool/iconfont.ico') }}" alt="Node.js 中文网">
		        <a href="http://www.iconfont.cn/" target="_blank">Iconfont-阿里巴巴矢量图标库</a>
		        <img src="https://pandao.github.io/editor.md/favicon.ico" alt="Markdown 编辑器">
		        <a href="https://pandao.github.io/editor.md" target="_blank">Markdown 编辑器</a>
		        <img src="http://www.elastic.co//favicon.ico" alt="Elasticsearch">
		        <a href="http://www.elastic.co/downloads/elasticsearch" target="_blank" alt="Elasticsearch">Elasticsearch</a>
	        </div>
        </div>
    </div>
    <!-- 左侧列表结束 -->
@endsection

@section('right-content')
    @include("layouts.right-stat")
    @include("layouts.right-common")
@endsection

<script>
    function download(img_url) {
        console.log(22, img_url);
        window.location.href = "/download2?img=" + img_url;
    }
</script>
