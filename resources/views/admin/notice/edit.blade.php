@extends('layouts.admin')

@section('title', '编辑公告')

@section('nav', '编辑公告')

@section('description', '编辑公告')

@section('content')
    <form class="form-horizontal" action="/admin/notice/{{$data->id}}" method="post">
        {{method_field("PUT")}}
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="10" placeholder="公告内容">{{ old('content') ? old('content') :$data['content'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="{{ $data['url'] }}">
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
