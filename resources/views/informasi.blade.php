<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi</title>
    <link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
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
                {{-- <form action="" method="get">
                    <div class="input-group">
                        <input type="text" name="search" id="search" placeholder="cari" style="width: 18vw; margin-right:600px" class="form-control rounded-pill"/>
                    </div>
                </form> --}}
                <ul class="navbar-nav">
                    {{-- <li class="nav-item ">
                        <a href="" class="nav-link text-dark" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Manfaat</a>
                    </li>  --}}
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
    
    {{-- Banner --}}
    <div class="carousel slide" id="fruitCarousel" data-bs-ride="carousel" style="margin-top: 100px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/kiwi.webp" alt="kiwi" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <h5>Kiwi</h5>
                    <p>Buah segar yang kaya akan vitamin dan serat.</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="image/pisang.webp" alt="kiwi" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <h5>pisang</h5>
                    <p>Buah segar yang kaya akan vitamin dan serat.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="image/alpukat.webp" alt="kiwi" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <h5>Kiwi</h5>
                    <p>Buah segar yang kaya akan vitamin dan serat.</p>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#fruitCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#fruitCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="align-items-center">
                <a href="/infoapelh"><h2 class="text-black" style="margin-top: 90px">Apel</h2></a>
                <img src="image/kiwi.webp" alt="gambar" class="rounded-4 me-3 " style="width: 300px; margin-top: 10px;">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-start" style="padding-top:40px">
               {{-- <div class="" style="margin-left: 100px; margin-top:40px;"> --}}
            </div>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">1. Cara Menanam Buah Kiwi:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">-Isi pot dengan media tanam dan pupuk sepertiga bagian. <br> -Kemudian, tanam biji kiwi di tengah pot. <br> -Isi kembali pot dengan media tanam dan siram dengan air secukupnya. <br> -Anda juga bisa memasang ajir untuk mempermudah tanaman kiwi merambat.</p>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">2. Pemberian Pupuk:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Gunakan pupuk cair setiap bulan untuk nutrisi yang lebih baik.</p>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">3. Cara Merawat:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Tanaman kiwi perlu dilakukan pemangkasan setidaknya empat kali selama musim tanam. Mulailah dengan memotong setengah pertumbuhan baru di cabang tanaman setiap beberapa minggu sekali.</p>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Jaga kelembapan tanah dan pastikan tanaman mendapatkan sinar matahari yang cukup.</p>
        </div>
        
        <div class="row align-items-start">
            <div class="align-items-center">
                <h2 class="text-black" style="margin-top: 90px">Pisang</h2>
                <img src="image/pisang.webp" alt="gambar" class="rounded-4 me-3 " style="width: 300px; margin-top: 10px;">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-start" style="padding-top:40px">
               {{-- <div class="" style="margin-left: 100px; margin-top:40px;"> --}}
            </div>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">1. Cara Menanam Buah Kiwi:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">-Pilih bibit pisang yang cocok,Anda dapat membeli sulur pisang dari petani atau pembibitan. <br>
                -Rapikan tanaman. <br>
                -Galilah lubang untuk setiap tanaman dan isi dengan tanah yang gembur dan subur. <br>
                -Letakkan tanaman secara tegak di tanah baru. <br>
                -Anjurkan penyiraman dan pemupukan rutin untuk pertumbuhan yang optimal.</p> <br>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">2. Pemberian Pupuk:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Gunakan pupuk cair setiap bulan untuk nutrisi yang lebih baik.</p>
            <h6 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">3. Cara Merawat:</h6>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Jaga kelembapan tanah dan pastikan tanaman mendapatkan sinar matahari yang cukup.</p>
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
                    <p class="mb-0">&copy;Silvia</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>