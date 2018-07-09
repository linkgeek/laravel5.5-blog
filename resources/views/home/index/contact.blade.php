@extends('layouts.home')

@section('title', $title)

@section('keywords', $config['WEB_KEYWORDS'])

@section('description', $config['WEB_DESCRIPTION'])

@section('content')
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8 b-chat">
        <div class="b-chat-left">
            
        </div>
        <div class="b-chat-middle"></div>
        <div class="b-chat-right">
            
        </div>
    </div>
    <!-- 左侧列表结束 -->
@endsection