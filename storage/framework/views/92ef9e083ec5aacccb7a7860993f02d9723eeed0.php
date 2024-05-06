  
  <?php $__env->startSection('contents'); ?>
   <style type="text/css">
    .red{
      color: red;
    }
  </style>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Social Media Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('socialMedia.index')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Social Media Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">           
       <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of Social Media</h3>

          <div class="card-tools">
            <a href="<?php echo e(route('socialMedia.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Add New
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                      <th>Action</th>                      
                     </tr>
                  </thead>
                  <tbody>
                     
                <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($datab->id); ?></td>
                    <td><?php echo e($datab->social_name); ?></td>
                    <td><a href="<?php echo e(route('socialMedia-show',$datab->id)); ?>"><i class="fa fa-edit"></i></a>                     
                      <a href="<?php echo e(route('socialMedia-Destroy',$datab->id)); ?>" onclick="return confirm('Are you sure? You want to delete: <?php echo e($datab->social_name); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                                   
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
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
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/socialMedia/socialmedia.blade.php ENDPATH**/ ?>