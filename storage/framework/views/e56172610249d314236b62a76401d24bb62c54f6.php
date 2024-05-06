<?php $__env->startSection('content'); ?>

    <style type="text/css">
.bg-color{
  /*background-color:#93c192;*/
   background-color:#2e4432;
}
.w-100 {
  /*min-width: 100% !important;*/
  /*min-height: 5% !important;*/
  /*min-height: 50px;*/
  background-repeat:no-repeat;
  /*background-size: 99% 100%;*/
}
</style>



  
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" style="padding:0px;">

        <div class="hero-slides owl-carousel" style="margin-bottom:0%">
            <!-- Single Hero Slide -->
           
           <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>); margin-left:20px;margin-right:20px">
                <div class="container h-100" style="height:10% !important;">
                    <div class="row h-100 align-items-center" style="margin-top:100px;">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important;"><?php echo e($slides->tour_name); ?> </h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1" style="color:white"><?php echo e($slides->description); ?></p>


                                                                    <p><a href="<?php echo e(route('safaris-slider',$slides->tour_id)); ?>" data-animation="animated fadeInUp">
                                                                        <b style="color:yellow">Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      <?php $__currentLoopData = $quickLinkSliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quickSliderf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="single-hero-slide bg-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$quickSliderf->attachment)); ?>); margin-left:20px;margin-right:20px;">
                  <div class="container h-100" style="height:10% !important;">
                   <div class="row h-100 align-items-center" style="margin-top:100px;">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important"><?php echo e($quickSliderf->quick_title); ?></h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1" style="color:white"><?php echo e($quickSliderf->quick_description); ?></p>


                                                                    <p><a href="/QuickLink/<?php echo e($quickSliderf->id); ?>" data-animation="animated fadeInUp">
                                                                        <b style="color:yellow">Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->


   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search Tour By</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                            <form  method="post"  action="<?php echo e(route('search-tour')); ?>" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>
                            <div class="row">
                                <input type="hidden" name="_method" value="POST">


                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" name="tours">
                                            <option>--Select program--</option>
                                            <option value="Wildlife Safaris">Wildlife Safaris</option>
                                               <option value="Hiking & Trekking">Hiking & Trekking</option>                                               
                                          <option value="Beach Holidays">Beach Holidays</option>
                                           <option value="Historical Site">Historical Site</option>
                                            <option value="Day Tours">Day Tours</option>
                                                                                  </select>
                                    </div>
                                </div>

                                
                              
                                <div class="col-12 search-form-second-steps">
                                    <div class="row">                                                                          
                                    
                                          <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="price" placeholder="maximum price">
                                    </div>
                                </div>


                                          <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="input" placeholder="any keyword">
                                    </div>
                                </div> 
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0" target="_blank">
                                        <button type="submit" class="btn south-btn" target="_blank">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->











 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">

   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Tour Packages</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                        
                            <div class="row">
                               
  <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Wildlife Safaris</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                 



           <div class="single-featured-properties-slide">

             <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                         <span class="off-box" style="background-color:#2e4432"><?php echo e($popular_safari->days); ?> Days: $<?php echo e(number_format($popular_safari->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_safari->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_safari->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>
                         

                               </div>



                                  <?php $__currentLoopData = $popular_safarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <!-- <a href="#"><img src="../assetf/img/bg-img/fea-product.jpg" alt=""></a> -->
                               

        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$safaris->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                            <span class="off-box" style="background-color:#2e4432"><?php echo e($safaris->days); ?> Days: $<?php echo e(number_format($safaris->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($safaris->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$safaris->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>


                                </div>                          

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>




   <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Beach Holiday</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->

                                 <div class="single-featured-properties-slide">
                                            <div class="item active">
                 <div class="package-list-wrap ">
                                                                                <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432"><?php echo e($popular_holiday->days); ?> Days: $<?php echo e(number_format($popular_holiday->price),2); ?></span>
                <div class="package-list-content">
                        <h3 class="package-list-title">
            <p><?php echo e($popular_holiday->tour_name); ?></p>
                                                    </h3>
     <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_holiday->id)); ?>">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>

                               </div>




                            
                         <?php $__currentLoopData = $popular_holidayf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holidays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="item active">
                                                    <div class="package-list-wrap ">
                                                                                <img src="<?php echo e(URL::asset('/storage/uploads/'.$holidays->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432"><?php echo e($holidays->days); ?> Days: $<?php echo e(number_format($holidays->price),2); ?></span>
                <div class="package-list-content">
                    <h3 class="package-list-title">
            <p><?php echo e($holidays->tour_name); ?></p>
                                                    </h3>
     <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$holidays->id)); ?>">Explore More</a>
                                                                                    </div>
                                                                                </div>
                                            </div>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>
                    </div>


       <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hiking and Trekking</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">


   <div class="single-featured-properties-slide">
    <div class="item active">
                 <div class="package-list-wrap ">

                                                                                <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                <span class="off-box" style="background-color:#2e4432"><?php echo e($popular_trekking->days); ?> Days: $<?php echo e(number_format($popular_trekking->price),2); ?></span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p><?php echo e($popular_trekking->tour_name); ?></p>
                                                    </h3>
     <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_trekking->id)); ?>">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>
</div>





                                <!-- Single Slide -->
                                 <?php $__currentLoopData = $popular_trekkingf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trekking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                            <span class="off-box" style="background-color:#2e4432"><?php echo e($trekking->days); ?> Days: $<?php echo e(number_format($trekking->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($trekking->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$trekking->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>


                                </div>                          

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                           <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Historical Sites</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">




 <div class="single-featured-properties-slide">
    <div class="item active">
                 <div class="package-list-wrap ">
                                                                                <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_historical->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432"><?php echo e($popular_historical->days); ?> Days: $<?php echo e(number_format($popular_historical->price),2); ?></span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p><?php echo e($popular_historical->tour_name); ?></p>
                                                    </h3>
     <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_historical->id)); ?>">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>
</div>







                                <!-- Single Slide -->
                                         <?php $__currentLoopData = $popular_historicalf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historicalf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                <div class="single-featured-properties-slide">
                              

    <div class="item">
                                                    <div class="package-list-wrap ">
                                                                                <img src="<?php echo e(URL::asset('/storage/uploads/'.$historicalf->attachment)); ?>" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                        <span class="off-box" style="background-color:#2e4432"><?php echo e($historicalf->days); ?> Days: $<?php echo e(number_format($historicalf->price),2); ?></span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p><?php echo e($historicalf->tour_name); ?></p>
                                                    </h3>
     <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$historicalf->id)); ?>">Explore More</a>
                                                                                    </div>
                                                                                </div>
                                            </div>

                                </div>
                               
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>


                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>


 <hr class="">









 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="containerx">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Special Offers</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                        
                            <div class="row">
                               
           

                        <div class="footer-widget-area mb-100">
                           
    <?php $__currentLoopData = $offers_private; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_private): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:"><?php echo e($special_private->sales_header); ?></b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong><?php echo e(round($special_private->save/$special_private->price * 100),0); ?>% Off</strong></div>
                                                                        <div class="blog_image">
                                                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$special_private->attachment)); ?>" class="img-responsive" alt="<?php echo e($special_private->tour_name); ?>" style="height:280px;width:100%;">
                                                                        </div>
                                                                </div>
                                                                             <h3 class="text-center demo-3"> <b style="color:" title="<?php echo e($special_private->tour_name); ?>"><?php echo e($special_private->tour_name); ?></b>
                                                                             </h3>
                                                                 <hr>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);height:40px; ">
                                                                                         <strong>Dead Line: <b class="text-danger"><?php echo e($special_private->offer_deadline); ?></b></strong>
                                                                                 </div>

                                                                                <div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_private->new_price),2); ?> </strong> pp
                                                                                     </span><s style=""><sup>$ <?php echo e(number_format($special_private->price),2); ?> </sup></s><br>
                                                                                        <span style="font-size:12px;">Save $<?php echo e(number_format($special_private->save),2); ?></span>

                                                                                 </div>
                                                                        </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_private->days); ?> Days, <?php echo e($special_private->days -1); ?> Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_private->physical_rating); ?></strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_private->category); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_private->tour_code); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>

                                                            <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
                                                                                    <a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Explore Tour Details</b></a>
                                                                        </div>
                                                                            </div>
                                                                </div>

                                                </div>
                                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                         <?php $__currentLoopData = $offers_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:"><?php echo e($special_group->sales_header); ?></b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong><?php echo e(round($special_group->save/$special_group->price * 100),0); ?>% Off</strong></div>
                                                                        <div class="blog_image">
                                                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$special_group->attachment)); ?>" class="img-responsive" alt="<?php echo e($special_group->tour_name); ?>" style="height:280px;width:100%;">
                                                                        </div>
                                                                </div>
                                                                             <h3 class="text-center demo-3"> <b style="color:" title="<?php echo e($special_group->tour_name); ?>"><?php echo e($special_group->tour_name); ?></b>
                                                                             </h3>
                                                                 <hr>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);height:40px;">
                                                                                         <strong>Dead Line: <b class="text-danger"><?php echo e($special_group->offer_deadline); ?></b></strong>
                                                                                 </div>

                                                                                <div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_group->new_price),2); ?> </strong> pp
                                                                                     </span><s style=""><sup>$ <?php echo e(number_format($special_group->price),2); ?> </sup></s><br>
                                                                                        <span style="font-size:12px;">Save $<?php echo e(number_format($special_group->save),2); ?></span>

                                                                                 </div>
                                                                        </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_group->days); ?> Days, <?php echo e($special_group->days -1); ?> Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_group->physical_rating); ?></strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_group->category); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($special_group->tour_code); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>

                                                            <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
                                                                                    <a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Explore Tour Details</b></a>
                                                                        </div>
                                                                            </div>
                                                                </div>

                                                </div>
                                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                              


                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <!-- <a href="#" id="moreFilter">+ More filters</a> -->
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0" target="_blank">
                                        <a class="btn-transparent" href="/offers" target="_blank"  style="color:#b76b0b"><i class="fa fa-rocket margin-right-10"></i>Explore More Offers
                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>







 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%" >  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="container">
            <div class="row bg-color">
                <div class="col-12">
                    <div class="advanced-search-form" style="background-color:#cabaa5;">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Partnering</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                            <div class="row">
  <div class="col-md-12">
                    <div class="heading-section heading-section-white">
                        <h3 class="subheading" style="color:#b76b0b">Partnering with SafariBookings.com</h3>
                <h2 class="mb-3"><a href="https://www.safaribookings.com/" target="_blank"><b>https://www.safaribookings.com</b></a></h2>
              </div>
            </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

 <hr class="">
 



 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="containerx">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Popular Experiences</p>
                        </div>
                     
 <div class="row small-package-list">
                                             <?php if($popular_safari): ?>
                                                <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_safari->tour_name); ?>" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_safari->tour_name); ?>"><?php echo e($popular_safari->tour_name); ?></b>
                                                                    </h3>


                                                                            <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_safari->type); ?></marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11)">
                                                                                         <strong><b class="text-white"><?php echo e($popular_safari->days); ?> Days, <?php echo e($popular_safari->days -1); ?> Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From $<?php echo e(number_format($popular_safari->price),2); ?></b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_safari->days); ?> Days, <?php echo e($popular_safari->days -1); ?> Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_safari->physical_rating); ?></strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_safari->category); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_safari->tour_code); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                              
                                                                             <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/<?php echo e($popular_safari->id); ?>" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        <?php endif; ?>


        <?php if($popular_trekking): ?>
                                                         <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_trekking->tour_name); ?>" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_trekking->tour_name); ?>"><?php echo e($popular_trekking->tour_name); ?></b>
                                                                    </h3>

                                                                        <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_trekking->type); ?></marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                                                                         <strong><b class="text-white"><?php echo e($popular_trekking->days); ?> Days, <?php echo e($popular_trekking->days -1); ?> Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From $<?php echo e(number_format($popular_trekking->price),2); ?></b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_trekking->days); ?> Days, <?php echo e($popular_trekking->days -1); ?> Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_trekking->physical_rating); ?></strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_trekking->category); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_trekking->tour_code); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                                 <div class="row">
                                                                            </div>
                                                                             <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/<?php echo e($popular_trekking->id); ?>" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        <?php endif; ?>



   <?php if($popular_holiday): ?>
                                        <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_holiday->tour_name); ?>" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_holiday->tour_name); ?>"><?php echo e($popular_holiday->tour_name); ?></b>
                                                                    </h3>

                                                                    <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_holiday->type); ?></marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                                                                         <strong><b class="text-white"><?php echo e($popular_holiday->days); ?> Days, <?php echo e($popular_holiday->days -1); ?> Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From $<?php echo e(number_format($popular_holiday->price),2); ?></b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_holiday->days); ?> Days, <?php echo e($popular_holiday->days -1); ?> Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_holiday->physical_rating); ?></strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_holiday->category); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong><?php echo e($popular_holiday->tour_code); ?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                                 <div class="row">
                                                                            </div>
                                                        <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/<?php echo e($popular_holiday->id); ?>" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        <?php endif; ?>


                                      </div>




                         <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <a class="btn-transparent" href="/popularExperienceClient" target="_blank"  style="color:#b76b0b;float: right"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
                        </a>
                    </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>



 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%"> 

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>POPULAR DESTINATIONS</p>
                        </div>
                     
                          <div class="row mb-1">
                        <!-- Card Block -->
                <?php if($popular_safari): ?>
                    <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two">
<a href="/safaris">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>); height:250px;width:100%; background-size: cover;">
                                    <lif class="one-forth text-center">

                                        <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_safari->type); ?></h6>
            </div>


                                        </lif>
                                </div>
                                 </a>
                         </div>
                 </div>
                     <?php endif; ?>
                     <?php if($popular_trekking): ?>
                        <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two booking-tourPadding">
 <a href="/trekking">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>); height:250px;width:100%; background-size: cover;">
                                <lif class="one-forth text-center">

                                        <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_trekking->type); ?></h6>
            </div>




                                        </lif>
                                </div>
</a>
</div>

                         </div>
                     <?php endif; ?>

                     <?php if($popular_holiday): ?>
                    <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two booking-tourPadding">
                         <a href="/holiday">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>); height:250px;width:100%; background-size: cover;">
                                <lif class="one-forth text-center">

                            <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_holiday->type); ?></h6>
            </div>


                                        </lif>
                                </div>
                                </a>
                         </div>
                 </div>
             <?php endif; ?>
        
         </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



    <hr class="">



    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2  style="color:#b76b0b;">Quick Link</h2>
                        <!-- <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
    
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
     <div class="service-box-heading bg-color">
                            <p><strong>Quick Link</strong></p>
                     <?php $__currentLoopData = $datasLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="bg-colorx">
                                                    <ul>
                                             <li><a href="/QuickLink/<?php echo e($data->id); ?>"><b style="color:#b76b0b;"><?php echo e($data->quick_title); ?></b></a><li>  </ul>
                             </div>
                     </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonials-v1">
      <div class="service-box-heading bg-color">
    <span><b>Testimonials</b></span>
                                 <span><p>What Travellers Say Tour Reviews</p></span>
                                 <div id="myCarousel1" class="carousel slide">
                                     <!-- Carousel items -->
                                     <div class="carousel-inner">
                                         <div class="active item">
                                             <blockquote><i><?php echo e($testimonies_one->comments); ?></i></blockquote>
                                             <div class="carousel-info">
                                                 <img class="pull-left" src="<?php echo e(URL::asset('/storage/uploads/'.$testimonies_one->attachment)); ?>" width="50" alt="review image">
                                                 <div class="pull-left">
                                                     <span class="testimonials-name"><?php echo e($testimonies_one->full_name); ?></span>
                                                     <span class="testimonials-post">
                                                                <div class="test-rating">
                                                                     <ul class="list-inline">
                                                                             <li class="list-inline-item">
                                                                                    <?php for($i = 0; $i <$testimonies_one->rating; $i++): ?>
                                                                                     <i class="text-primary fa fa-star text-warning"></i>
                                                                                    <?php endfor; ?>

                                                                                <?php for($i=0;$i<5-$testimonies_one->rating;$i++): ?>
                                                                             <i class="fa fa-star-o text-warning"></i>
                                                                                    <?php endfor; ?>

                                                                             </li>
                                                                     </ul>
                                                             </div>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>


                                             <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                             <blockquote><i><?php echo e($testimony->comments); ?>.</i></blockquote>
                                             <div class="carousel-info">
                                                 <img class="pull-left" src="<?php echo e(URL::asset('/storage/uploads/'.$testimony->attachment)); ?>" width="50" alt="review image">
                                                 <div class="pull-left">
                                                     <span class="testimonials-name"><?php echo e($testimony->full_name); ?></span>
                                                     <span class="testimonials-post">
                                                                <div class="test-rating">
                                                                     <ul class="list-inline">
                                                                             <li class="list-inline-item">
                                                                                    <?php for($i = 0; $i <$testimony->rating; $i++): ?>
                                                                                     <i class="text-primary fa fa-star text-warning"></i>
                                                                                    <?php endfor; ?>

                                                                                <?php for($i=0;$i<5-$testimony->rating;$i++): ?>
                                                                             <i class="fa fa-star-o text-warning"></i>
                                                                                    <?php endfor; ?>

                                                                             </li>
                                                                     </ul>
                                                             </div>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </div>
                                     <!-- Carousel nav -->
                                     <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
                                     <a class="right-btn" href="#myCarousel1" data-slide="next"></a>
                                 </div>

</div>
</div>
             
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/website/home/index.blade.php ENDPATH**/ ?>