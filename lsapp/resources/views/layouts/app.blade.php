<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('APP.name','lsapp')}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h1>Faculty attendace Monitoring System</h1>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/lsapp/public/dashboard/attendance">Attendance</a></li>
                <li><a href="/lsapp/public/posts/create">Enroll a student</a></li>
                <li><a href="/lsapp/public/posts">students</a></li>
                <li><a href="{{asset('/delete')}}">Delete</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/lsapp/public/dashboard/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/lsapp/public/dashboard/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    @yield('content');
    </body>
</html>
