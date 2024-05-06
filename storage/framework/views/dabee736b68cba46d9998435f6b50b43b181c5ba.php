  
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
            <h1>Student Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Main Page</li>
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
          <h3 class="card-title">Programs</h3>

     

         
       
          <div class="card-tools">
            <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Student
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>ID</th>
                      <th>Admmission No</th>
                    <th>Name</th>
                      <th>Phone</th>
                    <th>Gender</th>

                    <th>Birth date</th>
                    <th>Education</th>
                      <th>Photo</th>
                    <th>Parental status</th>
                    <th>Class session</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><?php echo e($data->pin); ?></td>
                    <td><?php echo e($data->addmission_no); ?></td>
                    <td><a href="<?php echo e(route('inclusive.show',$data->id)); ?>"><?php echo e($data->first_name); ?> <?php echo e($data->middle_name); ?> <?php echo e($data->last_name); ?><inclusive.show></a></td>
                                      <td><span class="badge"> <?php echo e($data->mobile_no); ?></span></td>
                    <td><?php echo e($data->gender); ?><span class="badge"> <?php echo e($data->gender); ?></span></td>
                    <td><?php echo e($data->birth_date); ?></td>
                    <td><?php echo e($data->education_level); ?></td>
                   
                  <!--    <td><?php echo e($data->main); ?></td>
                     <td><?php echo e($data->tour_code); ?></td> -->
                      <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/photos/'.$data->photo)); ?>"  style="width:120px; height:100px;"></div></td>
                       <td><?php echo e($data->parental_status); ?></td>
                   <td><?php echo e($data->session); ?></td>

                    <td>
<a role="button" href="<?php echo e(route('editProgram',$data->id)); ?>"><i class="fa fa-bars"></i></a> 
                      <a role="button" href="<?php echo e(route('editProgram',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                     
                     <!--  <a role="button" href="/destroyf/<?php echo e($data->id); ?> " onclick="return confirm('Are you sure? You want to delete <?php echo e($data->tour_name); ?>','Inclusive')"><i class="fa fa-trash red"></i></a> -->

                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                   <tr>
                    <th>#</th>
                     <th>ID</th>
                      <th>Admmission No</th>
                     <th>Name</th>
                     <th>Phone</th>

                       <th>Gender</th>
                    <th>Birth date</th>
                    <th>Education</th>
                      <th>Photo</th>
                       <th>Parental status</th>               
                       <th>Class session</th>
                    
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/students/index.blade.php ENDPATH**/ ?>