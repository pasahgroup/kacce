
  
  <?php $__env->startSection('contents'); ?>
  <style type="text/css">    
    .red {
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
            <h1>Condition List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Condition List</li>
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
          <h3 class="card-title">List of condition</h3>

          <div class="card-tools">
            <a href="/addCondition" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Condition
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Condition Name</th>              
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $conditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($condition->id); ?></td>
                     <td><a href="/editCondition/<?php echo e($condition->id); ?>"><?php echo e($condition->condition); ?></a></td>                   
                    <td><a href="/editCondition/<?php echo e($condition->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroyCondition/<?php echo e($condition->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($condition->condition); ?>','condition')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Condition Name</th>              
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assetf\resources\views/admins/condition/condition-list.blade.php ENDPATH**/ ?>