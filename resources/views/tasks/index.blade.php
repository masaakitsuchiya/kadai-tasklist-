@extends('layouts.app')

@section('content')
<h1>タスク一覧</h1>
            {!! link_to_route('tasks.create', '新規設定', null ,['class' => 'btn btn-primary']) !!}
    @if(count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
        <!--<ul>-->
        <!--    @foreach($tasks as $task)-->
        <!--    <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}:{{ $task->content }} [{{ $task->status }}]</li>-->
            <!--<li>{{ $task->content }}</li>-->
        <!--    @endforeach-->
        <!--</ul>-->
    </table>
    @endif
@endsection