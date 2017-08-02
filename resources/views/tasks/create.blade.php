@extends('layouts.app')

@section('content')


<h1>タスクの新規作成ページ</h1>
<!-- ここにページ毎のコンテンツを書く -->

{{-- */$create_or_edit = "create"/* --}}
@include('commons.task_form')


@endsection