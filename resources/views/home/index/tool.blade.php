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
		        <a href="https://vuefe.cn/" class="" target="_blank">Vue.js 中文文档</a> 		         
		        <img src="{{ asset('images/home/tool/font-awesome.ico') }}" alt="Node.js 中文网">
		        <a href="http://fontawesome.dashgame.com/" target="_blank">Font Awesome</a> 
		        <img src="{{ asset('images/home/tool/iconfont.ico') }}" alt="Node.js 中文网">
		        <a href="http://www.iconfont.cn/" target="_blank">Iconfont-阿里巴巴矢量图标库</a> 
		        <img src="https://pandao.github.io/editor.md/favicon.ico" alt="Markdown 编辑器">
		        <a href="https://pandao.github.io/editor.md" target="_blank">Markdown 编辑器</a>
		        <img src="http://www.elastic.co//favicon.ico" alt="Elasticsearch">
		        <a href="http://www.elastic.co/downloads/elasticsearch" target="_blank" alt="Elasticsearch">Elasticsearch</a>		        
	        </div>
        </div> 
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-language"></i> 编程语言 <small></small></h4>
	        <div class="col-xs-12">
	        	<img src="{{ asset('images/home/tool/php.ico') }}" alt="PHP">
		        <a href="http://php.net" target="_blank">PHP官网</a>
		        <img src="https://www.python.org/static/favicon.ico" alt="Python中文文档">
		        <a href="https://www.python.org/" target="_blank" title="Python 3.5.2文档">Python官网</a>
		        <img src="https://www.python.org/static/favicon.ico" alt="Python中文文档">
		        <a href="http://www.runoob.com/python/python-tutorial.html" target="_blank" title="Python 3.5.2文档">Python基础教程|菜鸟教程</a>
	        </div>
        </div>
		<div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-star"></i> 框架 <small></small></h4>
	        <div class="col-xs-12">
	        	<img src="{{ asset('images/home/tool/bootstrap.png') }}" alt="Node.js 中文网">
		        <a href="http://www.bootcss.com/" target="_blank">Bootstrap中文网</a> 
				<img src="{{ asset('images/home/tool/layui.jpg') }}" alt="Node.js 中文网">
		        <a href="http://www.layui.com/" target="_blank">layui - 经典模块化前端UI框架</a>
		        <img src="http://laravelacademy.org/favicon.png" alt="Laravel-简洁、优雅的PHP开发框架(PHP Web Framework)">
		        <a href="https://www.golaravel.com/" alt="Laravel-简洁、优雅的PHP开发框架(PHP Web Framework)" target="_blank">Laravel</a> 
		        <img src="{{ asset('images/home/tool/thinkphp.png') }}" alt="ThinkPHP框架"> 
		        <a href="https://www.golaravel.com/" alt="ThinkPHP框架" target="_blank">ThinkPHP框架</a> 
	        </div>
        </div>
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-file-code-o"></i> 开发文档 <small>开发文档/API文档</small></h4>
	        <div class="col-xs-12">
	        	<img src="http://laravelacademy.org/favicon.png" alt="Laravel 5.6 中文文档">
		        <a href="http://laravelacademy.org/laravel-docs-5_6" alt="Laravel 5.6 中文文档" target="_blank">Laravel 5.6 中文文档</a> 
	        	<img src="{{ asset('images/home/tool/nodejs.png') }}" alt="API 文档 | Node.js 中文网">
		        <a href="http://nodejs.cn/api/" target="_blank">API 文档 | Node.js 中文网</a> 
		        <img src="{{ asset('images/home/tool/thinkphp.png') }}" alt="ThinkPHP5.1完全开发手册">
		        <a href="https://www.kancloud.cn/manual/thinkphp5_1/353946" target="_blank">ThinkPHP5.1完全开发手册</a>	<img src="http://www.wangeditor.com/favicon.ico" alt="wangEditor3使用手册">
		        <a href="https://www.kancloud.cn/manual/thinkphp5_1/353946" target="_blank">wangEditor3使用手册</a>

	        </div>
        </div>
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-cloud-download"></i>下载 <small>开发工具|API文档|API手册下载</small></h4>
	        <div class="col-xs-12 hidden-xs hidden-sm">
	        	<img src="{{ asset('images/home/tool/php.ico') }}" alt="PHP">
		        <a href="http://php.net/" target="_blank">PHP</a>
		        <img src="{{ asset('images/home/tool/mysql.ico') }}" alt="MySQL">
		        <a href="https://dev.mysql.com/downloads/mysql/" target="_blank">MySQL</a>
				<img src="{{ asset('images/home/tool/apache.jpg') }}" alt="Apache">
		        <a href="http://httpd.apache.org/download.cgi" target="_blank">Apache</a>
		        <img src="{{ asset('images/home/tool/nginx.jpg') }}" alt="nginx">
		        <a href="http://nginx.org/en/download.html" target="_blank">Nginx</a>
		        <img src="https://www.jetbrains.com/favicon-16x16.png" alt="PhpStorm">
		        <a href="https://www.jetbrains.com/phpstorm/" target="_blank">PhpStorm</a>
		        <img src="https://www.percona.com/sites/default/files/favicon_0.ico" alt="Percona">
		        <a href="https://www.jetbrains.com/phpstorm/" target="_blank" alt="Percona Toolkit">Percona</a>
	        </div>
        </div>
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-cog"></i> JSON在线工具 <small>JSON在线解析、JSON格式化、JSON对比、JSON压缩</small></h4>
	        <div class="col-xs-12">
	        	<img src="{{ asset('images/home/tool/oschina.ico') }}" alt="Node.js 中文网">
		        <a href="http://tool.oschina.net/codeformat/json" target="_blank">在线代码格式化</a> 
		        <img src="{{ asset('images/home/tool/sojson.png') }}" alt="Node.js 中文网">
		        <a href="https://www.sojson.com/simple_json.html" target="_blank">SO JSON</a> 
	        </div>
        </div>
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-key"></i> 加密/解密 <small>在线加密/解密|AES|DES|MD5|Base64</small></h4>
	        <div class="col-xs-12">
		        <img src="{{ asset('images/home/tool/md5.jpg') }}" alt="md5在线解密破解,md5解密加密">
		        <a href="http://www.cmd5.com/" target="_blank">md5解密加密</a> 
	        </div>
        </div>
        <div class="row tool-default tool-web">
	        <h4 class="title"><i class="fa fa-recycle"></i> 第三方 <small></small></h4>
	        <div class="col-xs-12">	        	
		        <a href="https://connect.qq.com/index.html" target="_blank"><i class="fa fa-qq" aria-hidden="true" style="color:#3aadf2;font-size:18px;"></i> QQ互联官网</a>	
		        <a href="http://open.weibo.com/" target="_blank"><i class="fa fa-weibo" aria-hidden="true" style="color:#3aadf2;font-size:18px;"></i> 新浪微博开放平台</a>				
		        <img src="https://assets-cdn.github.com/favicon.ico" alt="nginx">
		        <a href="http://nginx.org/en/download.html" target="_blank">GitHub</a>
				<img src="http://www.miit.gov.cn/favicon.ico" alt="nginx">
		        <a href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank">工信部备案系统</a>
	        </div>
        </div>
    </div>
    <!-- 左侧列表结束 -->
@endsection

@section('right-content')
    @include("layouts.right-stat")
    @include("layouts.right-common")
@endsection