  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Category Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Add New Post Category
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="<?php echo e(route('PostCategory.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                    <div class="row">
                   
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>Common titles: |<b>Contact</b>|<b>About us|</b><b>Welcome message|What We Offer|Quick Link|Other</b></p>
                        <div class="form-group row">
                          <label for="blog" class="col-sm-4 col-md-4col-form-label">Post Category</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="post_category"  placeholder="write post">
                          </div>
                            </div>
                      </div>                    

                  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group row">

                 <div>
                  <p>.</p>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
             </div>
            </div>
            </div>

            </form>
          <!-- /.col-->
        </div>
    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Post Category</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Post Category</th>                 
                                  
                     </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $Postcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="#"> <?php echo e($data->category); ?></a></td>
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
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<script type="text/javascript">
  
  function getComboA(selectObject) {
  var value = selectObject.value;  
  console.log(value);
}
</script>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/Posts/PostCategory.blade.php ENDPATH**/ ?>