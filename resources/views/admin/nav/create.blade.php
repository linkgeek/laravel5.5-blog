@extends('layouts.admin')

@section('title', '添加菜单')

@section('nav', '添加菜单')

@section('description', '')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="{{ url('admin/nav/index') }}">菜单列表</a>
        </li>
        <li class="active">
            <a href="{{ url('admin/nav/create') }}">添加菜单</a>
        </li>
    </ul>
    <form class="form-horizontal " action="{{ url('admin/nav/store') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th width="7%">父类</th>
                <td>
                    <select class="form-control" name="pid">
                        <option value="">请选择分类</option>
                        @foreach($navs as $v)
                            <option value="{{ $v->id }}" @if(old('nav_id')) selected="selected" @endif>{{ $v->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>菜单名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>
            <tr>
                <th>url</th>
                <td>
                    <input class="form-control" type="text" name="url" value="{{ old('url') }}">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="{{ old('sort') }}">
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
