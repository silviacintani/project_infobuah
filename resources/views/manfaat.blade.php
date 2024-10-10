<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manfaat</title>
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

    <div class="container mt-5"></div>
    <h4 class="" style="margin-top: 100px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px; margin-left: 3%; color: #B99470">Yukk Simak Tentang</h4>
    <h4 class="" style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px; margin-left: 6%; color: #B99470">Manfaat Buah-buahan!!</h4>

    <div class="row 9-0">
        <h3 class=" mb-4" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 60px; margin-left: 16%">{{$buah->nama_buah}}</h3>
        <div class="col-md-4">
            <img src="{{asset('storage/foto/'.$buah->foto)}}" alt="" style="width: 400px; height:200px; margin-left:50%" class="rounded-3">
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">{{$buah->manfaat}}</div>
        </div>
    </div>


    {{-- <div class="container " style="margin-top: 100px;">
        <h4 class="text-black " style="margin-bottom: 80px; text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px;">Manfaat Buah Buahan</h4>
        <div class="row">
            <div class="col-md-3">
                    <img src="image/apell.jpg" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text mt-3" style="font-size: 30px;">
                            Apel
                        </h6>
                        <div class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                            Apel mengandung vitamin C yang membantu meningkatkan sistem kekebalan tubuh. Vitamin C dapat membantu melawan infeksi dan meningkatkan produksi sel darah putih yang penting dalam melawan infeksi dan penyakit. 
                        </div>
                        <a href="#" class="btn btn-dark">Baca Selengkapnya....</a>
                    </div>
            </div>

            <div class="col-md-3">
                    <img src="image/strawberry.png" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text mt-3" style="font-size: 30px;">
                            Strawberry
                        </h6>
                        <div class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                            Stroberi adalah sumber vitamin C yang sangat baik, yang berperan penting dalam meningkatkan sistem kekebalan tubuh, membantu penyembuhan luka, dan meningkatkan kesehatan kulit.
                        </div>
                         <a href="#" class="btn btn-dark">Baca Selengkapnya....</a>
                    </div>
            </div>

            <div class="col-md-3">
                <img src="image/delima.jpg" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
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
            </div>

            <div class="col-md-3">
                <img src="image/pisang.webp" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                <div class="card-body">
                    <h6 class="card-text mt-3" style="font-size: 30px;">
                        Pisang
                    </h6>
                    <div class="card-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; ">
                        pisang mengandung kalium, sumber karbohidrat dan vitamin A, perlancar metabolisme, meningkatkan kekebalan tubuh, melancarkan aliran oksigen ke otak, mengatasi anemia, hingga dapat menurunkan berat badan dan masih banyak lagi.
                    </div>
                </div>
            </div>
        </div> 


        <div class="row" style="margin-top: 100px">
            <div class="col-md-3">
                    <img src="image/alpukat.webp" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text mt-3" style="font-size: 30px;">
                            Alpukat
                        </h6>
                        <div class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                            Menjaga berat badan, karena alpukat mengandung serat dan karbohidrat yang memberikan rasa kenyang lebih lama.
                            Mengontrol tekanan darah, karena alpukat mengandung kalium yang membantu menyeimbangkan cairan tubuh.
                        </div>
                         <a href="#" class="btn btn-dark">Baca Selengkapnya....</a>
                    </div>
            </div>

            <div class="col-md-3">
                    <img src="image/strawberry.png" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text mt-3" style="font-size: 30px;">
                            Strawberry
                        </h6>
                        <div class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                            Stroberi adalah sumber vitamin C yang sangat baik, yang berperan penting dalam meningkatkan sistem kekebalan tubuh, membantu penyembuhan luka, dan meningkatkan kesehatan kulit.
                        </div>
                         <a href="#" class="btn btn-dark">Baca Selengkapnya....</a> 
                    </div>
            </div>

            <div class="col-md-3">
                <img src="image/apelh.webp" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
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

            <div class="col-md-3">
                <img src="image/kiwi.webp" class="card-img-top rounded-3" alt="" style="width: 100%; height: 250px;">
                <div class="card-body">
                    <h6 class="card-text mt-3" style="font-size: 30px;">
                       Kiwi
                    </h6>
                    <div class="card-text" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; ">
                       Mengatasi masalah rambut
                       Meningkatkan imunitas tubuh
                       Mengatasi masalah pencernaan
                    </div>
                </div>
            </div>
        </div> 
    </div>     --}}

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