  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Active group trip</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Active trip</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Adults</th>
                    <th>Teens</th>
                    <th>Children</th>
                    <th>Tour cost($)</th>
                    <th>Total addon cost</th>
                      <th>Total cost</th>
                        <th>Total amount paid</th>
                         <th>Total amount remain</th>
                    <th>tour_type</th>

                   </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $groupTrip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                    <td><?php echo e($trip->adults); ?></td>  
                    <td><?php echo e($trip->teens); ?></td> 
                    <td><?php echo e($trip->children); ?></td> 

                    <td><?php echo e($trip->tour_cost); ?></td>  
                    <td><?php echo e($trip->total_Addon_cost); ?></td> 
                    <td><?php echo e($trip->total_cost); ?></td> 

                     <td><?php echo e($trip->amount_paid); ?></td> 
                    <td><?php echo e($trip->amount_remain); ?></td> 
                     <td><?php echo e($trip->tour_type); ?></td>                
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Adults</th>
                    <th>Teens</th>
                    <th>Children</th>
                    <th>Tour cost($)</th>
                    <th>Total addon cost</th>
                    <th>Total cost</th>
                    <th>Total amount paid</th>
                    <th>Total amount remain</th>
                    <th>tour_type</th>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/activeGroupTrip/activeGroupTrip.blade.php ENDPATH**/ ?>