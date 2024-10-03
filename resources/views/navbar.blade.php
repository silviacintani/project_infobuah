<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #B99470 ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-white " style="margin-left: 200px">InfoBuah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar" style="margin-right: 100px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/tampilan" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

<div class="container">
    @yield('content')
</div>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
