  
  <?php $__env->startSection('contents'); ?>
   <style type="text/css">
    .red{
      color: red;
    }
    .green{
      color: green;
    }
     .blue{
      color: blue;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome:<b> <?php echo e(auth()->user()->name); ?></b></h3>

          <div class="card-tools">          
            
             <a href="/themes" class="btn btn-success" >
              <i class="fas fa-plus"></i>Themes(<b class="red"><?php echo e($sliders); ?></b>)
            </a>
          </div>
        </div>

        
        <div class="card">
            <div class="card-body">
               <div class="span12">
              <div class="action-nav-normal">
              <div class="row-fluid">
               <div class="span2 action-nav-button">
 <?php if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant'): ?>
                        <a href="/students">
                        <i class="fa fa-users"></i>
                        <span>Themes(<b class="blue"><?php echo e($sliders); ?></b>)</span>

                        </a>

                    </div>                  
                    <?php endif; ?>
                  
                  </div>
                </div>
              </div>
              </div>

        </div> 

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kacceff\resources\views/admins/Dashboard/index.blade.php ENDPATH**/ ?>