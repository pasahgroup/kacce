@extends('website.layouts.app_hm')
@section('content')


   <!-- Libraries Stylesheet -->
    <!-- <link href="../website/lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="../website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="../website/css/style.css" rel="stylesheet"> -->
    <!-- Carousel Start -->


<!--   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
 -->
    <!-- Font Awesome -->
  

    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
            
                    <ol class="carousel-indicators">
                        {{-- <li data-target="#header-carousel" data-slide-to="0" class="active"></li> --}}
                       @for ($x =0; $x <=$sliderCount-1; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor 
                    </ol>
                        
                      
                    <div class="carousel-inner">                      
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_first->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $slider_first->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                         @foreach ($sliders as $slides)                      
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slides->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $slides->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment)}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{ $slider_first->title }}</h6>
                           <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$slider_second->attachment)}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{ $slider_second->title }}</h6>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Students</span></h2>
        <div class="row px-xl-5 pb-3">
 @foreach ($student_webs as $student)   
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="#">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ URL::asset('/storage/photos/'.$student->photo) }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$student->first_name}} {{$student->last_name}}</h6>
                            <small class="text-body">{{$student->session}}</small>
                        </div>
                    </div>
                </a>
            </div>
 @endforeach 
  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">
  
</div> 
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="/login" target="_blank" class="btn btn-primary float-right">Explore More</a>
</div>
</div>
       
                       
    </div>
    <!-- Categories End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-4">
                <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_second->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_second->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $slider_second->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-md-4">
                   <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_first->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $slider_first->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-md-4">
                     <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_first->title }}</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $slider_first->description }}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
@endsection