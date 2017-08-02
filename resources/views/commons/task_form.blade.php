<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">

{!! Form::model($task, ['route' => 'tasks.store']) !!}
    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status', [
        "not doing" => "not doing",
        "on going"  => "on going",
        "done"      => "done",
        "holding"   => "holding"
        ], null, ['class' => 'form-control'] 
        )
    !!} 
    </div>

    {!! Form::submit('設定',['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
</div>