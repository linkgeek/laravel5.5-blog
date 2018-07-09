<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')@if(request()->path() !== '/') - {{ $config['WEB_TITLE'] }} @endif</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="加藤非,{{ htmlspecialchars_decode($config['ADMIN_EMAIL']) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/css/bjy.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/animate/animate.min.css') }}">
    @yield('css')
</head>
<body>
<!-- 顶部导航开始 -->
<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" onclick="recordId('/',0)">
                <div class="hidden-xs b-nav-background"></div>
                <p class="b-logo-word">^_^ {{ $config['WEB_NAME'] }}</p>
                <p class="b-logo-end"></p>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav b-nav-parent">
                <li class="hidden-xs b-nav-mobile"></li>
                <li class="b-nav-cname  @if($category_id == 'index') b-nav-active @endif">
                <a href="/" onclick="recordId('/',0)">首页</a>
                </li>
                @foreach($category as $v)
                    <li class="b-nav-cname @if($v->id == $category_id) b-nav-active @endif">
                        <a href="{{ url('category/'.$v->id) }}" onclick="return recordId('cid', '{{ $v->id }}')">{{ $v->name }}</a>
                    </li>
                @endforeach
                
                @if(!$gitProject->isEmpty())
                    <li class="b-nav-cname hidden-sm  @if($category_id == 'git') b-nav-active @endif">
                    <a href="{{ url('git') }}">开源项目</a>
                    </li>
                @endif
                <li class="b-nav-cname @if($category_id == 'tool') b-nav-active @endif">
                    <a href="{{ url('tool') }}">在线工具</a>
                </li>
                <li class="b-nav-cname @if($category_id == 'puamap') b-nav-active @endif">
                    <a href="{{ url('puamap') }}" class="b-nav-puamap">把妹专区</a>
                </li>
                <!-- <li class="b-nav-cname hidden-sm @if($category_id == 'contact') b-nav-active @endif">
                    <a href="{{ url('contact') }}">留言板</a>
                </li> -->
            </ul>
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
                @if(empty(session('user.name')))
                    <li class="b-nav-cname b-nav-login">
                        <div class="hidden-xs b-login-mobile"></div>
                        <div class="b-login-pc">
                            <a href="javascript:void(0);" onclick="login()" style="padding:0;"><i class="fa fa-user-circle-o"></i>登录</a>
                        </div>                        
                    </li>
                @else
                    <li class="b-user-info">
                        <span><img class="b-head_img" src="{{ session('user.avatar') }}" alt="{{ session('user.name') }}" title="{{ session('user.name') }}"  /></span>
                        <span class="b-nickname">{{ session('user.name') }}</span>
                        <span><a href="{{ url('auth/oauth/logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> 退出</a></span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
<!-- 顶部导航结束 -->

<div class="b-h-70"></div>

<div id="b-content" class="container">
    <div class="row">
        @yield('content')
        <!-- 通用右部区域开始 -->
        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
            @yield("right-content")           
        </div>
        <!-- 通用右部区域结束 -->
    </div>
</div>
<div id="b-footer">
    <div class="row">
        <!-- 通用底部文件开始 -->
        <footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p class="b-copy text-center">
                <span class="b-none-768 b-none-1024">加藤非曰：一技在 <i class="fa fa-hand-peace-o" title="G" style="color:#FF5722"></i>，走遍天下都不愁<span class="pipe">|</span></span><a class="banquan" target="_blank" href="#">Powered by 加藤非 {{ parse_url(config('app.url'))['host'] }}</a><span class="b-none-768 b-none-1024"><span class="pipe">|</span>Copyright© 2017-2018 </span><br>
                <span class="b-none-768 b-none-1024">
                    @if(!empty($config['WEB_ICP_NUMBER'])) 
                        <a href="http://www.miitbeian.gov.cn/" target="_blank">{{ $config['WEB_ICP_NUMBER'] }} </a>&nbsp;&nbsp;
                    @endif
                </span>
                <a href="#">
                    @if(!empty($config['ADMIN_EMAIL']))
                        博主邮箱：{!! $config['ADMIN_EMAIL'] !!}
                    @endif
                </a>
            </p>
            <a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a>
        </footer>
        <!-- 通用底部文件结束 -->
    </div>
</div>
<!-- 主体部分结束 -->

<!-- 登录模态框开始 -->
<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                <ul class="row">
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img src="{{ asset('images/home/qq-login.png') }}" alt="QQ登录" title="QQ登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录"></a>
                    </li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img src="{{ asset('images/home/github-login.jpg') }}" alt="github登录" title="github登录"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 登录模态框结束 -->

<!-- 打赏开始 -->
<div id="zanzhus" class="b-zan cl" style="display: none;">
    <h2>感谢您的支持，我会继续努力的</h2>
    <div class="b-zan-content cl">
        <div class="b-zan-item cl"><img src="{{ asset('images/home/alipay.jpg') }}"></div>
        <div class="b-zan-item cl"><img src="{{ asset('images/home/weipay.jpg') }}"></div>
    </div>
    <p>支付宝账号：K先生 | 微信账号：加藤非（*展）</p>
    <h3>打开支付宝或微信扫一扫，即可进行扫码打赏哦</h3>
</div>
<!-- 打赏结束 -->
<script src="{{ asset('statics/js/jquery-2.0.0.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('statics/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="{{ asset('statics/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('statics/js/respond.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('statics/pace/pace.min.js') }}"></script>
<script src="{{ asset('statics/layer-3.1/layer.js') }}"></script>
<script src="{{ asset('js/home/index.js') }}"></script>
<script src="{{ asset('js/home/home.js') }}"></script>
<script type="text/javascript">
    // 定义评论url
    touGaoUrl = "{{ url('tougao') }}";
    checkLogin = "{{ url('checkLogin') }}";
</script>
<!-- 百度统计开始 -->
{!! htmlspecialchars_decode($config['WEB_STATISTICS']) !!}
<!-- 百度统计结束 -->
@yield('js')
</body>
</html>
