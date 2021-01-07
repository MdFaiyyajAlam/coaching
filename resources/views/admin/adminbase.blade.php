<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminbase</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
    <a href="" class="navbar-brand">Adminbase</a>

    <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item"><a href="" class="btn btn-danger">Lougout</a></li>
        @endauth

        @auth
            <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-danger">Login</a></li>
        @endauth
    </ul>
   </div>
</nav>

@yield('content')
    
</body>
</html>