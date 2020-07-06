@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area three"> 
            <div class="slider-owl owl-theme owl-carousel"> 
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(img/slider/slide-10.jpg)">
                    <!-- Start Slider Content -->
                    <div class="slider-content-area">  
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7"> 
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content">
                                            <h3>SOY PROPUESTA </h3>
                                            <p>Te invitamos a presentar tus propuestas que brinde una solución a los diferentes problemas que atravieza nuestra ciudad!  <br>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eaque quisquam nihil vitae iusto illum voluptatem animi accusantium modi vero distinctio atque, ex. Earum nulla ad ut blanditiis totam at?</p>
                                            <a class="default-btn" href="about.html">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="slider-img">
                                        <img src="img/slider/home-2.png" alt="slider">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Slingle Slide -->                            
            </div>
        </section>
        <!-- Background Area End -->
@endsection
