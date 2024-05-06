  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="row content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="mb-2">
          <div class="col-sm-6">
            <h1>Edit Tailor Made Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Route attachment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="container-fluid content">
        <div class="">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
              </div>
              <div class="container-fluid x_content">
                    
                    <form  method="POST"  action="<?php echo e(route('tailorMade.update',$id)); ?>" enctype="multipart/form-data">
                         <?php echo method_field('PATCH'); ?>
                             <?php echo csrf_field(); ?>
                             
                            <div class="row card-body">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">First name:</label>
                                    <div class="form-group">     <input type="hidden" class="form-control" name="price" value="">
                                   <input type="hidden" class="form-control" name="currency" value="">       
                                   <input type="hidden" class="form-control" name="id" value="<?php echo e($tailorMades->id); ?>">

                                        <input type="text" name="first_name" value="<?php echo e($tailorMades->first_name); ?>" min="2">
                                    </div>
                                </div>

                                 <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Last name:</label>
                                    <div class="form-group">   
                                                                 
                                    <input type="text" name="last_name" value="<?php echo e($tailorMades->last_name); ?>" min="2">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Nationality:</label>
                                    <div class="form-group">
                                        <input type="text" name="nationality" value="<?php echo e($tailorMades->nationality); ?>" min="2">
                                    </div>
                                </div>
                                  <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Email:</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php echo e($tailorMades->email); ?>">
                                    </div>
                                </div>

                                  <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Phone:</label>
                                    <div class="form-group">
                                        <input type="phone" class="form-control" name="phone" value="<?php echo e($tailorMades->phone); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                   <label for="">Arrival Date:</label>
                                    <div class="form-group  input-datepicker">
                                        <input type="text" class="form-control " id="datepicker-3" name="arrival_date"
                                            data-date-format="dd-m-yyyy" placeholder="Arrival Date" value="<?php echo e($tailorMades->arrival_date); ?>">
                                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                         
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                   <label for="">Adults(>16yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->adults); ?>" name="adults" min="0">
                                    </div>
                                  </div>
                                
                                <div class="col-lg-2  col-md-6 col-sm-12 pl-0">
                                  <label for="">Teens(13-14yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->teens); ?>" name="teens" min="0">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->children); ?>" name="children" min="0">
                                    </div>
                                </div>

                                <div class="col-lg-2  col-md-6 col-sm-12 pl-0">
                                   <label for="">Days:</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->days); ?>" name="days" min="0">
                                    </div>
                                </div>


        <div class="col-lg-6 col-md-12 col-sm-12">
          <label for="">Tour Type:</label>
                                    <div class="form-group icon_down">
                                        <select class="selectpicker search-fields form-control" name="tour_type" required="">
                                              <option value="<?php echo e($tailorMades->tour_type); ?>"><?php echo e($tailorMades->tour_name); ?></option>
                                              <?php $__currentLoopData = $tourTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($tourType->tour_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                         
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Accomodation:</label>
                                    <div class="form-group icon_down">                                     
                                        <select class="selectpicker search-fields form-control" name="accomodation">
                                           <option value="<?php echo e($tailorMades->accomodation); ?>"><?php echo e($tailorMades->accommodation); ?></option>
              <option value="Basic">Basic</option>
              <option value="Comfort">Comfort</option>
                <option value="Deluxe">Deluxe</option>
              <option value="Mix">Mix</option>
              <option value="Not sure">Not sure</option>
                                        </select>
                                    </div>
                                </div>
                              <!--   <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn-tour"> Search</button>
                                </div> -->
<!-- New form Starts Here -->
<div class="col-lg-3 col-md-12 col-sm-12">
                                    <label for="">Destination:</label>
                                    <div class="form-group">
                                        <input type="text" name="destination" value="<?php echo e($tailorMades->destination); ?>" min="0">
                                    </div>
                                </div>
                                   <div class="col-lg-4 col-md-6 col-sm-12 pl-0">
                                  <label for="">Min Budget(Budget Range):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->min_budget); ?>" name="min_budget" min="0">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                   <label for="">Max Budget:</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" value="<?php echo e($tailorMades->max_budget); ?>" name="max_budget" min="0">
                                    </div>
                                </div>
     

             <div class="col-md-12 col-sm-12 col-xs-12">
                   <label class="control-label" for="photo">Tour Photo</label>
                    <input name="attachment[]" type="file" id="main_img" multiple>
            </div> 

            <div class="col-md-12">
               <label for="">  Additional Information we should know?</label>
                <div class="form-group"> 
         <textarea rows="3" name="additional_information" style="width:  100%"> <?php echo e($tailorMades->other_information); ?></textarea>
        </div>
        </div>

                                 
                                   <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn btn-success float-right">Update</button>
                                </div>        
                              
                              </form>

    </section>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/tailorMade/addEdit.blade.php ENDPATH**/ ?>