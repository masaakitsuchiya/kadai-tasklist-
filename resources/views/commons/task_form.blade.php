{!! Form::model($task, ['route' => 'tasks.store']) !!}

    {!! Form::label('content', 'タスク:') !!}
    {!! Form::text('content') !!}
    
    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status', [
        "not doing" => "not doing",
        "on going"  => "on going",
        "done"      => "done",
        "holding"   => "holding"
        ]
        )
    !!}  

    {!! Form::submit('設定') !!}

{!! Form::close() !!}