@extends('layouts.app')

@section('content')

            <div class="center jumbotron">
                <div class="text-center">
                    <h1>Welcome to the Tasklist</h1>
                    {!! link_to_route('signup.get', 'Sign up now!' , null ,['class' => 'btn btn-lg btn-primary']) !!}
                    {!! link_to_route('login.get', 'Login' , null ,['class' => 'btn btn-lg btn-info']) !!}
                </div>
        
            </div>
@endsection