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
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 100px">
            <div class="tulisan">
                <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#B99470">YUK SIMAK!</h3>
                <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;margin-left:60px; color:#B99470">Manfaat Tentang Buah-Buahan</h4>
            </div>
            <img src="image/apell.jpg" class="card-img-top rounded-3" alt="" style="width: 400px; height: 200px; margin-top:50px">
                <div class="card-body">
                    <h6 class="card-text mt-3" style="font-size: 30px;">
                        Apel
                    </h6>
                    <div class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        Apel mengandung vitamin C yang membantu meningkatkan sistem kekebalan tubuh. Vitamin C dapat membantu melawan infeksi dan meningkatkan produksi sel darah putih yang penting dalam melawan infeksi dan penyakit. 
                    </div>
                </div>
        </div>

    <!-- footer -->
    <footer class=" text-black mt-5">
        <div class="garis" style="background-color:#B99470 ; width: 100%; height: 40px;"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <h4>Tentang Kami</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit, corrupti saepe eligendi veritatis, sequi, asperiores similique amet excepturi minus dolorem impedit accusamus quae! Fugiat neque nulla ea?</p>
                </div>

                <div class="col-md-4">
                    <h4 style="margin-left: 90px;">hhhhh</h4>
                    <div class="list-unstyled" style="margin-left: 90px;">
                        <li><a href="#" class="text-black">Tentang kami</a></li>
                        <li><a href="#" class="text-black">Kontak</a></li>
                        <li><a href="#" class="text-black">hhhhh</a></li>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4>Sosial Media</h4>
                    <i class="fa-brands fa-facebook fs-3" style="margin-left: 20px;" ></i>
                    <i class="fa-brands fa-instagram fs-3"></i>
                    <i class="fa-brands fa-whatsapp fs-3"></i>
                </div>

                <div class="text-center py-3">
                    <p class="mb-0">&copy; 2024 Perusahaan Anda. Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>