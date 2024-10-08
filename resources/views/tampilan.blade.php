<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #B99470">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-white " style="margin-left: 200px">InfoBuah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar" style="margin-right: 100px">
                <form action="/search" method="post">
                    @csrf
                    <div class="input-group">
                      <input type="text" name="search" id="search" placeholder="cari" style="width: 18vw; margin-right:600px" class="form-control rounded-pill"/>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/informasi" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:18px">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- tampilan1 --> 
    <div style=" width: 100%; height: 70vh" class="container-fluid d-flex align-items-center">
        <div style="margin-left: 300px;margin-bottom: 100px; margin-top:20px">
            <h1 class="fw-bold" style="font-size: 4vh; color:#B99470; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Buah Buahan</h1>
            <p class="" style="font-size: 20px; color:#B99470">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Eos ea sed eligendi quasi exercitationem quo rerum quod,  vel neque  sunt accusamus dolor nulla quas eum dignissimos illo ex, laboriosam temporibus.
            </p>
            <button type="button" class="btn rounded-pill text-white fw-bold my-2" style="background-color: #C0C78C; width: 180px; height: 45px">Learn More</button>
        </div>
        <div class="container mt-4">
            <div class="d-flext align-items-start">
                <img src="image/apaa_rmv.png" alt="gambar" class="rounded-5 me-3 shadow mt-4" style="width: 420px; margin-bottom: 110px; margin-left: 80px; background-color:#B99470" >
            </div>
        </div>
    </div>

    {{-- gambar buahbuahan --}}
    <div class="container">
        <div class="row">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-items-center" class="text-center">Fresh Fruit</h3>
            @foreach ($buah as $item)
                
            <div class="col-3">
                <img src="{{asset('/storage/foto/'.$item->foto)}}" class=" mt-5 rounded-3" alt="gambar1" height="250px" width="300px">
                <a href="/manfaat/{{$item->id}}"><h5 class="text-black text-center">{{$item->nama_buah}}</h5></a>
            </div>
            @endforeach

            <div class="col-3">
                <img src="image/delima.jpg" class=" mt-5 rounded-3" alt="gambar1" height="250px" width="300px">
                <a href="/manfaatd"><h5 class="text-black text-center">Delima</h5></a>
            </div>

            <div class="col-3">
                <img src="image/pisang.webp" class=" mt-5 rounded-3" alt="gambar1" height="250px" width="300px">
                <a href="/manfaati"><h5 class="text-black text-center">Pisang</h5></a>
            </div>
            
            <div class="col-3">
                <img src="image/alpukat.webp" class=" mt-5 rounded-3" alt="gambar1" height="250px" width="300px">
                <a href="/manfaatk"><h5 class="text-black text-center">Alpukat</h5></a>
            </div>


        </div>
    </div>
    
    {{-- deskripsi --}}
        <div class="container mt-3">
            <h4 class="text-black text-center" style="margin-top:100px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px; margin-left: 3%;">Deskripsi</h4>
            <div class="row align-items-start">
                <div class="col-md-8 d-flex flex-column justify-content-start" style="margin-top: 70px">
                    <h2 class="text-black">Strawberry</h2>
                        <p class="text-black" style="font-size: 20px;">
                            Buah stroberi (Fragaria x ananassa Duch.) adalah buah dengan kulit merah dengan bintik-bintik putih di bagian kulit yang merupakan bijinya, buah ini berwarna merah ketika sudah masak dan hijau ketika masih muda. 
                        </p>
                    </div>

                <div class="col-md-8 d-flex flex-column justify-content-start" style="padding-top:100px">
                   <h2 class="text-black">Delima</h2>
                    <p class="text-black" style="font-size: 20px;">
                        Meringankan artritis dan nyeri persendian
                        Menurunkan tekanan darah
                        Meningkatkan kekebalan tubuh
                        Melawan infeksi virus dan bakteri
                        Menahan lapar
                    </p>
                </div>

                <div class="col-md-8 d-flex flex-column justify-content-start" style="padding-top:100px">
                   <h2 class="text-black">Pisang</h2>
                    <p class="text-black" style="font-size: 20px;">
                        Stroberi adalah sumber vitamin C yang sangat baik, yang berperan penting dalam meningkatkan sistem kekebalan tubuh, membantu penyembuhan luka, dan meningkatkan kesehatan kulit.
                    </p>
                </div>

                <div class="col-md-8 d-flex flex-column justify-content-start" style="padding-top:100px">
                    <h2 class="text-black">Alpukat</h2>
                     <p class="text-black" style="font-size: 20px;">
                        Menjaga berat badan, karena alpukat mengandung serat dan karbohidrat yang memberikan rasa kenyang lebih lama.
                        Mengontrol tekanan darah, karena alpukat mengandung kalium yang membantu menyeimbangkan cairan tubuh.
                     </p>
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
                    <p class="mb-0">&copy; silvia.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>