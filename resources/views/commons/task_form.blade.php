<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
@if($create_or_edit == 'create')
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
@elseif($create_or_edit == 'edit')
    {!! Form::model($task, ['route' => ['tasks.update',$task->id], 'method' => 'put']) !!}
@endif
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
@if($create_or_edit =='create')
    {!! Form::submit('設定',['class' => 'btn btn-primary']) !!}
@elseif($create_or_edit == "edit")
    {!! Form::submit('変更',['class' => 'btn btn-default']) !!}
@endif
{!! Form::close() !!}
</div>
</div>