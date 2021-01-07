<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Code Width Sadiq</a>

        <ul class="navbar-nav ms-auto">

            @auth
                <li class="nav-item"><a href="{{route('apply')}}" class="nav-link">Apply for admission</a></li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        <input type="submit" class="nav-link" value="Logout">
                    @csrf
                    </form>
                </li>
            @endauth

            @guest
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Registor</a></li>
            @endguest
            
        </ul>
    </div>
</nav>


@yield('content')
    
</body>
</html>