@extends('layouts.admin')

@section('title', '公告列表')

@section('nav', '公告列表')

@section('description', '博客公告')

@section('content')
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/notice/index') }}">公告列表</a>
        </li>
        <li>
            <a href="{{ url('admin/notice/create') }}">添加公告</a>
        </li>
    </ul>

    <form class="form-horizontal" action="{{ url('admin/notice/store') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="6" placeholder="公告内容">{{ old('content') }}</textarea>
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="{{ old('url') }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
@endsection
