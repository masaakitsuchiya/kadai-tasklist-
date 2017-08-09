<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if (Auth::check())
                    {!! link_to_route('tasks.index', 'TaskLists',null, ['class' => 'navbar-brand']) !!}
                @else
                    <a class="navbar-brand" href="/">TaskLists</a>
                @endif
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <?php $user = Auth::user(); ?>
                        <li>{!! link_to_route('tasks.create', '新規タスクの設定') !!}</li>
                        <li><a href="#">{{ $user->name }}</a></li>
                        <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login.get', 'Login') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>