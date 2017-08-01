@extends('layouts.app')

@section('content')

<h1>id:{{ $task->id }} のタスク編集ページ</h1>

@include('commons.task_form')

@endsection