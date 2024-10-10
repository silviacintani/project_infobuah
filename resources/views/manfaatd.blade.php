<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
          <!-- navbar -->
          <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #B99470">
            <div class="container-fluid">
                <a href="#" class="navbar-brand text-white" style="margin-left: 200px">InfoBuah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="mynavbar" style="margin-right: 100px">
                    <form action="/search" method="post">
                        <div class="input-group">
                          <input type="text" name="search" id="search" placeholder="cari" style="width: 18vw; margin-right:400px" class="form-control rounded-pill"/>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="/tampilan" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Home</a>
                        </li> 
                        <li class="nav-item">
                            <a href="/informasi " class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="/ " class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Logout</a>
                        </li>
                    </ul>
    
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 100px">
            <h4 class="" style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px;  color: #B99470">Yukk Simak Tentang</h4>
            <h4 class="" style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px; color: #B99470; margin-left: 50px">Manfaat Buah-buahan!!</h4>
            {{-- <div class="col-md-3"> --}}
                <img src="image/delima.jpg" class="card-img-top rounded-3" alt="" style="width: 400px; height: 250px;margin-top: 50px">
                <div class="card-body">
                    <h6 class="card-text mt-3" style="font-size: 30px;">
                        Delima
                    </h6>
                    <div class="card-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; ">
                        Meringankan artritis dan nyeri persendian
                        Menurunkan tekanan darah
                        Meningkatkan kekebalan tubuh
                        Melawan infeksi virus dan bakteri
                        Menahan lapar
                    </div>
                </div>
            {{-- </div> --}}
        </div>
</body>
</html>
<script src="{{asset('assets/bootstrap/jc/bootstrap.min.js')}}"></script>