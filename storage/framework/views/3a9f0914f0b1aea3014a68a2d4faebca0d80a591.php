<?php $__env->startSection('content'); ?>

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Students</span></h2>
        <div class="row px-xl-5 pb-3">
  
           <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Lodge Name</th>
                           
                  </tr>
                  </thead>
                  <tbody>
                   
                <?php $__currentLoopData = $trained_lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
                    <td><?php echo e($lodge->id); ?></td>
                     <td><a href="/editLodge/<?php echo e($lodge->id); ?>"><?php echo e($lodge->lodge); ?></a></td>  
                                 <td><?php echo e($lodge->status); ?></td>
                              
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                     <th>Lodge Name</th>             
                    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
 


  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">
  
</div> 
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="/login" target="_blank" class="btn btn-primary float-right">Explore More</a>
</div>
</div>       
                       
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app_hm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/website/vulnarable/lodge-list.blade.php ENDPATH**/ ?>