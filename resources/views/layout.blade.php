<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('/css/app.css')}}" rel="stylesheet" type="text/css">
        @yield('header')

        <title>@yield('title')</title>
    </head>
    <body>
        <div class="col-md-12 header">
            <h1 class="title">Dungeon Dashboard</h1>
            @if (Auth::check())
                <a href="{{action('Auth\AuthController@getLogout')}}" class="logout"><i class="fa fa-power-off"></i></a>
            @endif
        </div>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>
</html>
