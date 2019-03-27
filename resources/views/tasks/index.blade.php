@extends('app')
@section('title')
    @lang('common.list_task')
@endsection
@section('content')
    <div class="table-users">
        <div class="header">@lang('common.list_task')</div>
        <table cellspacing="0">
            <tr>
                <th>@lang('common.id')</th>
                <th>@lang('common.name')</th>
                <th>@lang('common.created_at')</th>
                <th>@lang('common.updated_at')</th>
                <th>@lang('common.options')</th>
            </tr>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>
                    <a href="">@lang('common.edit')</a>
                    <a href="">@lang('common.del')</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
