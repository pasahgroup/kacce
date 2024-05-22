 
  <?php $__env->startSection('contents'); ?>


<section class="user-profile section">
    <div class="container">
        <div class="row widget">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="<?php echo e(URL::asset('/storage/trainee/'.$trainee->photo)); ?>" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center"><?php echo e($trainee->first_name); ?> <?php echo e($trainee->middle_name); ?> <?php echo e($trainee->last_name); ?></h5>
                        <p class="text-center"><?php echo e($trainee->first_name); ?> <?php echo e($trainee->middle_name); ?> <?php echo e($trainee->last_name); ?></p>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget dashboard-links">

                        <input type="text" class="form-control" name="classg" value="<?php echo e($trainee->last_name); ?>">
                          <input type="text" class="form-control" name="session" value="<?php echo e($trainee->last_name); ?>">

                       <div><a class="my-1 d-inline-block" href="">Addmission: <b><?php echo e($trainee->addmission_no); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Session: <b><?php echo e($trainee->session); ?></b></a></div>
                       
                        <div><a class="my-1 d-inline-block" href="">Mobile: <b><?php echo e($trainee->mobile_no); ?></b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Email: <b><?php echo e($trainee->email); ?></b></a></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h3>Summary Report</h3>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget personal-info">
                            <h3 class="widget-header user">Extras Information</h3> 
                          
                             <div><a class="my-1 d-inline-block" href="">Gender: <b><?php echo e($trainee->gender); ?></b></a></div>
                             

                        <hr>  
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">         

                    <div class="widget change-password">
                        <h3 class="widget-header user">Designation</h3>                        
                   <div>Current designation: <b><?php echo e($trainee->designation); ?></b></div>
                    <div>Current location: <b><?php echo e($trainee->located); ?></b></div>
                    </div>  
                    </div>
                    <div class="row">
                       <?php if($search =='sflag'): ?>
                 <a href="/trainee" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            <?php endif; ?>

                    <?php if($search =='iflag'): ?>

          <form method="post" id="post_form" role="form" class="registration-form" action="<?php echo e(route('searcht',$trainee->class,$trainee->session)); ?>" enctype="multipart/form-data">

      <?php echo csrf_field(); ?>
             <input type="hidden" name="user_id" value="POST"> 
<button type="submit" role="button" class="btn btn-primary"> <i class="fa fa-angle-double-left"></i></button>
           </form> 
            <?php endif; ?>


<div class="float-right">
                  <?php if(Auth::user()->role =='Admin'): ?>
                <a href="/editTrainee/<?php echo e($trainee->id); ?>" class="btn btn-success float-right">
              <i class="fas fa-pencil-alt"></i> Edit
            </a>
<?php endif; ?>
            </div> 
        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/trainee/trainee-details.blade.php ENDPATH**/ ?>