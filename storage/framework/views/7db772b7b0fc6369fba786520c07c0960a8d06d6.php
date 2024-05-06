<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2><?php echo e($programs->tour_name); ?></h2>
    </div>
 </section>

</section>
    <section class="ws-section-spacing bg-gray">
    <div class="container-fluid">
          <!-- Start of Image filled from slider -->
             <div class="package-list-wrap ">
                
                 <img src="<?php echo e(URL::asset('/storage/uploads/'.$programs->attachment)); ?>" class="" alt="det-img" style="min-height: 35vh !important;max-height:50vh !important;background-size:100% 100%;width: 100%;">
                 
                <div class="package-list-content">
                    <p class="package-list-duration"> <span
                            class=""><?php echo e($programs->title); ?>

                            </span>
                                
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"></a>
                    </h3>
                    <a role="button" class="btn btn-primary text-center" href="<?php echo e(route('safaris.show',$programs->id)); ?>">Acquire</a>                    
                </div>
                </div>              
                <div  class="col-lg-12 col-md-12 col-sm-12">
                 <p>
                  <?php echo e($programs->description); ?>

                 </p>
                </div>
                <hr>
      <!-- End of Image filled from slider -->
      <section class="text-center bg-white">
    <div>
        <h3 style="color:#b76b0b;" class=""><b>Other List of <?php echo e($title); ?></b></h3>
    </div>
     <!-- Content Header (Page header) -->
         <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('info')): ?>
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>   

 <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>     
</div> 
    <hr>
 </section>
        <div class="masonry-item">
            <!-- item -->
             <div class="container-fluid" data-aos="fade-up">
            <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4">
                        <div class="search_area search_area_two">                         
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($safari->tour_name); ?>" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                 <hr>     
                            <div class="blog-text">       
                            <div class="">
                              <div class="col-md-12 col-sm-12 col-xs-12 booking-btn-gray" style="border-right:1px solid rgba(71,85,95,.11)">
                                     
                                 <h4 class="text-center demo-3"> <b style="color:yellow" title="<?php echo e($safari->tour_name); ?>" style="color:red"><?php echo e($safari->tour_name); ?></b>
                                                                             </h4>
                               </div>

                                  
                                     <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);font-size:16px;">
                                             <strong><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</strong>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="font-size:16px;">
                                           <strong>From $<b><?php echo e(number_format($safari->price),2); ?></b>  </strong>
                                          
                                         </div> 
                                    </div> 
                                                                                                                               
                                     <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">                                    
                                                                                   <div class="row">
                                               <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Physical Rating: </span>  
                                             </div>
                                           
                                                          
                                               <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                   <strong><?php echo e($safari->physical_rating); ?></strong>
                                                </div>
                                               </div>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Category: </span>  
                                           </div>
                            
                                           
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($safari->category); ?></strong>
                                                </div>  
                                            </div>  
                                                  <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Code: </span>  
                                           </div>
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($safari->tour_code); ?></strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               
                             <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      </div> 
                                   </div>   
                                        
                                         <ul class="booking-btn booking-tourPadding">
                            <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn text-center"><b>View More</b></a>
                                                       
                        </ul>                            
                                </div>
                          
                        </div>
                    </div>                       
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/website/programs/safaris-slider-packages.blade.php ENDPATH**/ ?>