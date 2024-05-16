<?php $__env->startSection('content'); ?>


   <!-- Libraries Stylesheet -->
    <!-- <link href="../website/lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="../website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="../website/css/style.css" rel="stylesheet"> -->
    <!-- Carousel Start -->


    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCount-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                    <div class="carousel-inner">                      
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slider_first->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slider_first->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo e($slider_first->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                         <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slides->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?php echo e($slides->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider_first->attachment)); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider_first->title); ?></h6>
                           <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider_second->attachment)); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider_second->title); ?></h6>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Students</span></h2>
        <div class="row px-xl-5 pb-3">
 <?php $__currentLoopData = $student_webs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="#">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="<?php echo e(URL::asset('/storage/photos/'.$student->photo)); ?>" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></h6>
                            <small class="text-body"><?php echo e($student->session); ?></small>
                        </div>
                    </div>
                </a>
            </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">
  
</div> 
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="#" class="btn btn-primary float-right">Explore More</a>
</div>
</div>
       
                       
    </div>
    <!-- Categories End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/website/home/index.blade.php ENDPATH**/ ?>