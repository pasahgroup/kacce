@extends('website.layouts.app_hm')
@section('content')

<style>
.bg-bannerw{
   @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
   @endisset

    height: 70vh;
    width: 100%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
};

</style>

<style type="text/css">
  
  .p{
  color:#115b27  !important;
  }
</style>




 @isset($PostcategoryImage->attachment)
  <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>About US</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About US</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endisset

  <section class="ws-section-spacing bg-gray ">
        <div class="container">

            <div class="row masonry-item">
                <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                    <div class="package-detail">
                        <div class="package-list-wrap ">
                                @isset($aboutus->attachment)
                            <img src="{{URL::asset('/storage/uploads/'.$aboutus->attachment) }}" class="img-fluid" alt="det-img">
                                  @endisset
                            <div class="package-list-content">
                            <p class="package-list-duration p">Home/About us
                            </p>
                            </div>
                        </div>
                             <div class="col-lg-12">
                            <div class="package-info">
                               <p class="text-center p"><b>About US</b>
                               </p>
                           </div>
                        </div>
                          <div class="col-lg-12">
                            <div class="package-info">
                                @if($aboutus->introduction ?? '')
                                <h3>Introduction</h3>
                                <p class="p">
                                {{$aboutus->introduction ?? ''}}
                              </p>
                                @endif
                           </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="package-info">
                                @if($aboutus->mission ?? '')
                                <h3>Mission</h3>
                                <p class="p">
                                {{$aboutus->mission ?? ''}}
                              </p>
                                @endif
                           </div>
                        </div>
                          <div class="col-lg-12 p">
                            <div class="package-info">
                                @if($aboutus->vission ?? '')
                                <h3>Vission</h3>
                                <p class="p">
                                {{$aboutus->vission ?? ''}}
                                </p>
                                @endif
                            </div>
                         </div>
                          <div class="col-lg-12">
                            <div class="package-info">
                                @if($aboutus->objectives ?? '')
                                <h3>Objectives</h3>
                               <p class="p">
                                {{$aboutus->objectives ?? ''}}
                                </p>
                                @endif
                            </div>
                        </div> 
                      </div>                                           
                  

                </div>
            </div>
        </div>
    </section>

@endsection

