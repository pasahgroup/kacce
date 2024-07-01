<?php $__env->startSection('content'); ?>

<style type="text/css">
  .cores{
    width: 200.447px; 
    margin-right: 10px;
  }

</style>

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
                        
                       <?php for($x =0; $x <=$sliderCount-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x" style="background-color:green"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                    <div class="carousel-inner">                      
                       <?php if(isset($slider_first)): ?>
                        <div class="carousel-item position-relative active" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slider_first->attachment ?? '')); ?>" style="object-fit: cover;" alt="No Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slider_first->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn demo-1"><?php echo e($slider_first->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slider_first->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slides->title); ?></h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn demo-1"><?php echo e($slides->description); ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slides->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php if(isset($slider1)): ?>
                <div class="product-offer mb-30" style="height: 230px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider1->attachment)); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider1->title); ?></h6>
                           <a href="/detail-page/<?php echo e($slider1->id); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                  <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>
                
<?php if(isset($slider2)): ?>
                <div class="product-offer mb-30" style="height: 240px;">
                    <img class="img-fluid" src="<?php echo e(URL::asset('/storage/uploads/'.$slider2->attachment)); ?>" alt="" style="object-fit: cover;">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"><?php echo e($slider2->title); ?></h6>
                        <a href="/detail-page/<?php echo e($slider2->id); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                  <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>
            </div>
        </div>
    </div>
  


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
           
            <div class="col-md-3">  
            <strong>Tree Planting</strong>                   
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountTree-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x" style="background-color:green"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                      
                       
                        <?php if(isset($tree)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$tree->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($tree->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($tree->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $tree_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_tree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_tree->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_tree->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_tree->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            


             <div class="col-md-3">   
             <strong>Bee Keeping</strong>                    
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountBee-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x" style="background-color:green"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                      
                        
                         <?php if(isset($bee)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$bee->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($bee->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($bee->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $bee_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_bee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_bee->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_bee->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_bee->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>


   <div class="col-md-3">    
   <strong>Entrepreneurship</strong>                   
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountEntrepreneurship-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x" style="background-color:green"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                    
                      

 <?php if(isset($entrepreneurship)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$entrepreneurship->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($entrepreneurship->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($entrepreneurship->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $entrepreneurship_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_entrepreneurship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_entrepreneurship->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_entrepreneurship->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_entrepreneurship->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">    
   <strong>Vulnarable Children</strong>                   
                     <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">            
                    <ol class="carousel-indicators">
                        
                       <?php for($x =0; $x <=$sliderCountVulnarable-1; $x++): ?>
                        <li data-target="#header-carousel" data-slide-to="$x" style="background-color:green"></li>
                          <?php endfor; ?> 
                    </ol>
                        
                      
                       <div class="carousel-inner">                    
                      

 <?php if(isset($vulnarable)): ?>
                        <div class="carousel-item position-relative active" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$vulnarable->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h2 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($vulnarable->title); ?></h2>
                                    
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($vulnarable->id); ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>

                           <?php else: ?>
                       <img class="position-absolute w-100 h-100" src="#" style="object-fit: cover;" alt="No Image">
                       <div>No Image</div>
                        <?php endif; ?>

                         <?php $__currentLoopData = $vulnarable_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide_vulnarable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <div class="carousel-item position-relative" style="height: 400px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(URL::asset('/storage/uploads/'.$slide_vulnarable->attachment)); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?php echo e($slide_vulnarable->title); ?></h1>
                                   
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/detail-page/<?php echo e($slide_vulnarable->id); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<hr>
    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
              <strong>Partiners</strong>
                <div class="owl-carousel vendor-carousel">
                      <div class="bg-light p-4x cores">
                        <img src="../img/partiners/tegonet-logo.png" alt="" style="max-height:45px;">
                    </div>
                       <div class="bg-light p-4x">
                        <img src="../img/partiners/twam-logo.png" alt="" style="max-height:45px;">
                    </div>
                       <div class="bg-light p-4x">
                        <img src="../img/partiners/eecg-logo1.png" alt="" style="max-height:45px;">
                    </div>
                      <div class="bg-light p-4x">
                        <img src="../img/partiners/nutritio.jpg" alt="" style="max-height:45px;">
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Offer End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kacceff\resources\views/website/home/index.blade.php ENDPATH**/ ?>