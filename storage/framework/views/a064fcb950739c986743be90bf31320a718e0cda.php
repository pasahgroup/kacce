  
  <?php $__env->startSection('contents'); ?>


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 -->
 <link rel="stylesheet" href="../../css/mformf.css">

<!------ Include the above in your HEAD tag ---------->
 
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-11 form-box">
                <form method="POST" id="post_form" role="form" class="registration-form" action="<?php echo e(route('assignee.update',$datas->id)); ?>" enctype="multipart/form-data">

                    <fieldset>
                           <?php echo csrf_field(); ?>
                              <input type="hidden" name="_method" value="PUT">

                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Personal Information</h3>
                                
                            </div>
                        </div>

                        <div class="form-bottom">                      

  
  <div class="row">
       
      <div class="form-group col-md-4 col-sm-4">
                                         <label>Student</label>
                                        <select class="form-control" name="student_id" id="student_id" required="">
                                          <option value="<?php echo e($datas->student_id); ?>"><?php echo e($datas->first_name); ?> <?php echo e($datas->middle_name); ?> <?php echo e($datas->last_name); ?></option>
                                         <option value=""></option>
  <?php $__currentLoopData = $studentss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option value="<?php echo e($student->id); ?>"><?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
                                        </select>
                                    </div> 
                          
                       <div class="form-group col-md-4 col-sm-4">
                                         <label>Assignee lodge</label>
                                        <select class="form-control" name="lodge" id="lodge" required="">
                                             <option><?php echo e($datas->lodge); ?></option>
                                            <option>None</option>
  <?php $__currentLoopData = $lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($lodge->lodge_name); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
                                        </select>
                                    </div> 

                              <div class="form-group col-md-4 col-sm-4">
                                         <label>Designation</label>
                                        <select class="form-control" name="designation" id="designation" required="">
                                            <option><?php echo e($datas->designation); ?></option>
                                            <option></option>
                                            <option>None</option>
  <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($designation->designation); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
                                        </select>
                                    </div>

                                 <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Assignee date</label>
                                <input type="date" class="form-control" name="date" value="<?php echo e($datas->date); ?>" required="">
                            </div>
                        </div>

    <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Status</label>
                                  <select class="form-control" name="status" id="status" required="">
                                            <option><?php echo e($datas->status); ?></option>
                                            <option></option>
                                            <option>Active</option>
                                                   <option>Inactive</option>
                                          </select>
                            </div>
                        </div>
                        
                            </div>

                          <!-- <button type="button" class="btn btn-next">Next</button> -->
                                <!-- <a type="button" class="previous btn-previous"><<</button> -->
                                  <a type="submit" role="button" class="btn btn-primary" href="/assignee"> <i class="fa fa-angle-double-left"></i></a>

                            <button type="submit" class="submit float-right">Update</button>
                          <br>
                        </div>
                    </fieldset>
                                  </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        $(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
   
});
    </script>

    <script src="../../img_library/scripts.js" type="text/javascript"></script>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/assignee/edit-assignee.blade.php ENDPATH**/ ?>