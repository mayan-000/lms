<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Library Management System') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} "> <!-- Custom stlylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="flex">
                <div>
                    <h1 class="logo">
                        <strong>Library Management System</strong>
                    </h1>
                </div>
                <div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-light">
                      <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      </div>
                    </nav>
                    <ul class="navbar navbar-light mt-2 collapse" id="navbarToggleExternalContent">
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('authors') }}">Authors</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('publishers') }}">Publishers</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('categories') }}">Categories</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('books') }}">Books</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('students') }}">Reg Students</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('book_issued') }}">Book Issue</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('reports') }}">Reports</a></li>
                        <li class="nav-item btn btn-success p-2"><a href="{{ route('settings') }}">Settings</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    @yield('content')

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
