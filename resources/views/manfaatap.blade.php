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
                            <a href="/" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">logout</a>
                        </li>
                    </ul>
    
                </div>
            </div>
        </nav>

    <div class="container" style="margin-top: 100px">
        <div class="tulisan">
            <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#B99470">YUK SIMAK!</h3>
            <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;margin-left:60px; color:#B99470">Manfaat Tentang Buah-Buahan</h4>
        </div>
        <img src="image/apelh.webp" class="card-img-top rounded-3" alt="" style="width: 400px; height: 200px;">
        <div class="card-body">
            <h6 class="card-text mt-3" style="font-size: 30px;">
                Apel Hijau
            </h6>
            <div class="card-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; ">
                Melancarkan pencernaan karena kandungan serat yang tinggi.
                Mengurangi risiko terkena diabetes.
                Menurunkan risiko terkena penyakit jantung.
                Menurunkan berat badan.
            </div>
        </div>
    </div>

    
</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>