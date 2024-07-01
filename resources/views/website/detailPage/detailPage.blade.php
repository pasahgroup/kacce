
@extends('website.layouts.app_hm')
@section('content')

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">{{$p}}</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                   
                    <div class="carousel-inner bg-light">                       
                     @foreach ($sliders as $slides)    
             <div class="row px-xl-5">
                       <div class="col-lg-5 product-offer mb-30" style="height:280px;width:420px !important;">
                            <img class="w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" alt="Image">
                                               </div>   
                        

                        <div class="col-lg-7 mb-30">
                           <div class="h-100 bg-light p-30">
                    <h4>{{$slides->title}}</h4>                  
                  
                    
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Description: bnm</strong>
                       <p class="mb-4">{{$slides->description}}</p>
                    </div>
                      <a type="button"  class="btn btn-primary px-3" href="/dh/{{$slides->id}}"><i class="#"></i>Read More</a>                                     
                      </div>
                        </div> 
                        </div>                   
                        @endforeach
                    </div>
                  
                </div>       

                        </div>

        </div>
    </div>

    <!-- Shop Detail End -->
 @endsection