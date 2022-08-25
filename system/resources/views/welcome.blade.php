<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NANA CAKE'S</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('public')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{url('public')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('public')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('public')}}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/css/produk.css">
</head>

<body>
    

   @include('navbar')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('public')}}/img/walpaper...jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                         
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Toko Kue Terbaik</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Jalani Hidup yang Manis!<br>"Kue adalah kebahagiaan dalam bentuk yang nyata dan dapat dimakan"</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{url('public')}}/img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Toko Kue Terbaik</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Kami memanggang dengan penuh semangat</h1>
                                <p class="text-light fs-5 mb-4 pb-3">"Jika ada kue di depan Anda, maka Anda tidak perlu mencari lebih jauh untuk bersenang-senang!"</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="gallery">
      <div class="content p-2">
        <img src="{{url('public')}}/img/CAKE.jpg">
        <h3>Chocolate Cake</h3>
       
        <h6>Rp 60.000</h6> 
      </div>
      <div class="content p-2">
        <img src="{{url('public')}}/img/Dalgona Coffee Cake.jpg">
        <h3>Dalgona Coffee</h3>
       
        <h6>Rp 85.000</h6>
      </div>
      <div class="content p-2">
        <img src="{{url('public')}}/img/cheese cake.jpg">
        <h3>Cheese Cake</h3>
       
        <h6>Rp 85.000</h6>
      </div>
      <div class="content p-2 ">
        <img src="{{url('public')}}/img/Flower buttercream cake.jpg">
        <h3>Flower Buttercream</h3>
       
        <h6>Rp 100.000</h6> 
      </div>
      <div class="content p-2">
        <img src="{{url('public')}}/img/bolu susu lembang.jpg">
        <h3>Bolu Susu Lembang</h3>
       
        <h6>Rp 75.000</h6>
      </div>
      <div class="content p-2">
        <img src="{{url('public')}}/img/Milky Cake.jpg">
        <h3>Milky Cake</h3>
       
        <h6>Rp 100.000</h6>
      </div>
    </div>
    


    


    

   


 
   


  @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public')}}/lib/wow/wow.min.js"></script>
    <script src="{{url('public')}}/lib/easing/easing.min.js"></script>
    <script src="{{url('public')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{url('public')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{url('public')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url('public')}}/js/main.js"></script>
</body>

</html>