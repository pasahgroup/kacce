  
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
            <h1>Enquiry Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enquiry Page</li>
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
                    <th>#</th>
                    <th>First Name</th>
                     <th>Last Name</th>
                    <th>Nationality</th>

                    <th>Adults</th>
                    <th>Children</th>
                    <th>Teens</th>
                    <th>Tour Name</th>
                  <th>Accomodation</th>
                      <th>Days</th>
                    <th>Arrival Date</th>
                    <th>End Date</th>
                    <th>PIN Contorl</th>
                    <th>Status</th>                  
                     <th>Book</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="/editEnquiry/<?php echo e($data->id); ?>"><?php echo e($data->first_name); ?></a></td>
                     <td><?php echo e($data->last_name); ?></td>
                    <td><?php echo e($data->country); ?></td>


                   <td><?php echo e($data->adults); ?></td>
                    <td><?php echo e($data->children); ?></td>
                    <td><?php echo e($data->teens); ?></td>
                    <td><?php echo e($data->tour_name); ?></td>
                    <td><?php echo e($data->accomodation); ?></td>
                    <td><?php echo e($data->days); ?></td> 
                    <td><?php echo e($data->arrival_date); ?></td>
                    <td><?php echo e($data->end_date); ?></td>
                    <td><?php echo e($data->pin); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td><a href="<?php echo e(route('bookFor',$data->id)); ?>" class="btn btn-success">Book For</a></td>

                    <td><a href="/editEnquiry/<?php echo e($data->id); ?>"><i class="fa fa-edit"></i></a> 
                      <a href="<?php echo e(route('enquiryDestroy',$data->id)); ?> " onclick="return confirm('Are you sure? You want to delete <?php echo e($data->first_name); ?> <?php echo e($data->first_name); ?> Program','Tailor made')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                      <th>#</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                    <th>Nationality</th>
                    
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Teens</th>
                    <th>Tour Name</th>
                     <th>Accomodation</th>
                     <th>Days</th>
                    <th>Arrival Date</th>
                    <th>End Date</th>
                     <th>PIN Contorl</th>
                    <th>Status</th>
                    <th>Book</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="footer">
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/enquiries/enquiry.blade.php ENDPATH**/ ?>