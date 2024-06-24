  
  <?php $__env->startSection('contents'); ?>

   <script type="text/javascript" src="../js/jquery360.min.js"></script>
 <link rel="stylesheet" href="../../css/mformf.css">

<!------ Include the above in your HEAD tag ---------->

 
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11 form-box">
                <form method="POST" id="post_form" role="form" class="registration-form" action="<?php echo e(route('employee.update',$employee->id)); ?>" enctype="multipart/form-data">

                    <fieldset>
                           <?php echo csrf_field(); ?>  
                             <input type="hidden" name="_method" value="PUT">                      
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Employee registration form</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">

                                <div class="form-group col-md-6 col-sm-6">
                                    <label>Full name</label>
                                    <input type="text" class="form-control" name="full_name" value="<?php echo e($employee->full_name); ?>">
                                </div>
                             
                                <div class="form-group col-md-6 col-sm-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo e($employee->phone); ?>">
                                </div>                            
                                 
                             
                            </div>




  <div class="row">

    <div class="form-group col-md-4 col-sm-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e($employee->email); ?>" required>
                                </div>

                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Designation</label>
                                <select class="form-control" name="designation" id="designation">

                                 <option><?php echo e($employee->designation); ?></option>                                  
  
                                      <option value='0'>-- Select designation --</option>                                          

                                               <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option><?php echo e($designation->designation); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      

                                </select>
                            </div>

                               <div class="form-group col-md-4 col-sm-6">
                                    <label>Location</label>
                                <select class="form-control" name="location" id="location">
                                     <option><?php echo e($employee->location); ?></option>
                                     <option value='0'>-- Select lodge --</option>
                                     <?php $__currentLoopData = $lodges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lodge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option><?php echo e($lodge->lodge_name); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

                              </select>
                            </div>
                            </div>




            <div class="row">

   <div class="form-group col-md-8 col-sm-6">
                            </div>

  <div class="col-lg-4 col-md-12 col-sm-12">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['for' => 'password_confirmation','value' => __('Photo')]]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Photo'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;">
                                   
                                </div>
          
            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="<?php echo e(URL::asset('/storage/employees/'.$employee->photo)); ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>         


            </div>


                              <div class="row">                             
                               <div class="form-group col-md-6 col-sm-6">
                                    <label>Registered date</label>
                                    <input type="date" class="form-control" name="reg_date" value="<?php echo e($employee->reg_date); ?>">
                                </div>


                                     <div class="form-group col-md-6 col-sm-6">
                                         <label>Status</label>
                                        <select class="form-control" name="status" id="status">
                                              <option><?php echo e($employee->status); ?></option>
                                             <option></option>                                             
                                                <option>Active</option>
                                                 <option>Inactive</option>
                                                 <option>Suspended</option>                                                
                                                  <option>NA</option>
  
                                        </select>
                                    </div>

                             </div>
                 

                            <a  href="/employee" role="button" class="previous btn-previous"><i class="fas fa-angle-double-left"></i></a>
                            <button type="submit" class="submit float-right">Update</button>
                        </div>
                    </fieldset>
                  
                </form>
            </div>
        </div>
        <br>
    </div>









    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#category').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#subcategory').find('option').not(':first').remove();
//alert(id);
             // AJAX request 
             $.ajax({
                 url: 'getEmployees/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].category_id;
                               var name = response['data'][i].subcategory;

                               var option = "<option value='"+name+"'>"+name+"</option>";

                               $("#subcategory").append(option); 
                          }
                     }

                 }
             });
        });
    });
    </script>






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
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assetf\resources\views/admins/employee/edit-employee.blade.php ENDPATH**/ ?>