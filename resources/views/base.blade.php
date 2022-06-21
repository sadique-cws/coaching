<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coach Tech - @yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3" style="">
        <div class="container">
            <a href="" class="navbar-brand">Coach Tech</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
                @guest
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{route('signup')}}" class="nav-link">signup</a></li>
                @endguest
               
                @auth
                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">logout</a></li>
                @endauth

                <li class="nav-item"><a href="{{route('student.create')}}" class="btn btn-dark btn-sm my-1">Apply for Join Us</a></li>

            </ul>
        </div>
    </nav>

    @section('data')
        @show
</body>
</html>