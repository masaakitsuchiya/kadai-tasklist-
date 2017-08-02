@extends('layouts.app')

@section('content')

<h1>id:{{ $task->id }} のタスク編集ページ</h1>
{{-- */$create_or_edit = "edit"/* --}}

@include('commons.task_form')

@endsection