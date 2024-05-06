  
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
            <h1>Accommodations Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Accommodations page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Accommodations</h3>

          <div class="card-tools">
            <a href="<?php echo e(route('accommodations.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Accommodations
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
                    <th>Description</th>
                    <th>Price</th>
                    <th>Acc.Type</th>
                      <th>National Standard</th>
                    <th>Our Category</th>
                    <th>Phone</th>
                    <th>Email</th>
                     <th>Url</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <?php echo e($data->url); ?>                
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="/editAccommodation/<?php echo e($data->id); ?>"> <?php echo e($data->accommodation_name); ?></a></td>
                    <td><?php echo e($data->accommodation_descriptions); ?></td>
                    <td><?php echo e($data->price); ?></td>
                    <td><?php echo e($data->category); ?></td>
                    <td><?php echo e($data->national_standard); ?></td>
                    <td><?php echo e($data->type); ?></td>
                     <td><?php echo e($data->phone); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->url); ?></td>
                    <td><?php echo e($data->location_name); ?></td>             
                       <td><a href="<?php echo e(route('editAccommodation',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                    <a href="<?php echo e(route('accommodation-Destroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete Accommodation: <?php echo e($data->destination_name); ?> <?php echo e($data->category); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Acc.Type</th>
                    <th>National Standard</th>
                    <th>Our Category</th>
                    <th>Phone</th>
                    <th>Email</th>
                     <th>Url</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/Accommodations/index.blade.php ENDPATH**/ ?>