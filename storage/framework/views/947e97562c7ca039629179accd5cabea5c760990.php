  
  <?php $__env->startSection('contents'); ?>

  <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>


  <style type="text/css">
    .red{
      color: red;
    }
    .green{
      color: green;
    }

     .btnn{
      color: green;
      padding: 1px 10px;
  border-radius: 10px;
    }

  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Asset list</h4>
          </div>
          <div class="col-sm-6">
             <?php if(Auth::user()->role =='Admin'): ?>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?php echo e(route('addAsset.index')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i>Asset
            </a></li>
            </ol>
            <?php endif; ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        
      <div class="card">
        <div class="card-header">
         
   <form method="post" id="post_form" role="form" class="registration-form" action="<?php echo e(route('research')); ?>" enctype="multipart/form-data">

      <?php echo csrf_field(); ?>
             <input type="hidden" name="user_id" value="POST">
           <div class="row">
              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Class</b>

        </div>
               <div class="form-group col-md-3 col-sm-3">
            <div class="form-bottom">                         
                                <select class="form-control" name="classg" id="classg" required>
                                    <option></option>
                                    <option selected style="background-color:yellow"><?php echo e($selected_class ?? ''); ?></option>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>

                            </div>
                            </div>
                              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Session</b>
        </div>
                              <div class="form-group col-md-3 col-sm-3">
            <div class="form-bottom">                         
                                <select class="form-control" name="session" id="session" required>
                                  <option></option>
                                      <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
  <option><?php echo e($session->session); ?></option>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            </div>
                        
                        
       
          <div class="card-tools">         
          <button type="submit" class="btn btn-success float-right">Ok</button>
           </div>
        </div>
      </form>
      </div>

        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                      <th>Asset</th>
                  
                    <th>Category</th>
                      <th>Subcategory</th>
                      <th>Serial No</th>
                     <th>Tagged_no</th>
                      <th>Barcode</th>
                          <th>Location</th>
                         <th>photo</th>
                                 
                      <th>Assigned_to</th>
                        <th>Assigned_date</th>
                    <th>Owner</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td><?php echo e($data->id); ?></td>
                    <td><?php echo e($data->asset_name); ?></td>
                           <td><span class="badge"> <?php echo e($data->category); ?></span></td>              
                                  
                    <td><span class="badge"> <?php echo e($data->subcategory); ?></span></td>
                      <td><span class="badge"> <?php echo e($data->serial_no); ?></span></td>
                    <td><?php echo e($data->tag_no); ?></td>
                   <td><?php echo e($data->barcode); ?></td>
                   <td><?php echo e($data->location); ?></td>

                  <!--    <td><?php echo e($data->main); ?></td>
                     <td><?php echo e($data->tour_code); ?></td> -->
                      <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/photos/'.$data->photo)); ?>"  style="width:100px; height:60px;"></div></td>
                     
    <td><?php echo e($data->assigned_to); ?></td>
    <td><?php echo e($data->assigned_date); ?></td>
    <td><?php echo e($data->owned_by); ?></td>
   <td><?php echo e($data->status); ?></td>
                    <td>

     <form method="GET" id="post_form" role="form" class="registration-form" action="<?php echo e(route('trainee.show',$data->id)); ?>" enctype="multipart/form-data">

      <?php echo csrf_field(); ?>
             <input type="hidden" name="user_id" value="PUT">
             <input type="hidden" name="classgf" id="classgf" value="<?php echo e($data->class); ?>">
<input type="hidden" name="sessionf" id="sessionf" value="<?php echo e($data->session); ?>">

<input type="hidden" name="searchf" id="searchf" value="<?php echo e($search); ?>">


<button type="submit" role="button"><i class="fa fa-bars"></i></button>
</form>

  <?php if(Auth::user()->role =='Admin'): ?>
                      <a role="button" href="<?php echo e(route('editTrainee',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                      <?php endif; ?>
                     
                      <a role="button" class="btnn btn-success" href="/destroyf/<?php echo e($data->id); ?> " onclick="return confirm('Are you sure? You want to delete <?php echo e($data->tour_name); ?>','Inclusive')">History</i></a>

                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                   <tr>
                   <th>#</th>
                      <th>Asset</th>
                  
                    <th>Category</th>
                      <th>Subcategory</th>
                      <th>Serial No</th>
                     <th>Tagged_no</th>
                      <th>Barcode</th>
                          <th>Location</th>
                         <th>photo</th>
                                 
                      <th>Assigned_to</th>
                        <th>Assigned_date</th>
                    <th>Owner</th>
                    <th>Status</th>
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

  <script type="text/javascript">
       $(document).ready(function(){
      // Department Change
      $('#classg').change(function(){
         // ward

  
         var v = $(this).val();
              //  alert(v);
           // Empty the dropdown
          $('#session').find('option').not(':first').remove();
             // document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


//alert(v);
         // AJAX request
         $.ajax({
           url: 'getB/'+v,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
                //alet(len);

             if(response['dataC'] != null){
               len = response['dataC'].length;
             }
           //  alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataC'][i].subcategory;
                 var name = response['dataC'][i].subcategory;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#session").append(option);
               }
             }
             //DAta are here

           }
        });
      });
    });
     </script>


 






     <script type="text/javascript">
  function setMetanameFunction(id) {
   // alert('passed');
    var elementM = document.getElementById("metaname_model").value;
     //alert(elementM);
 $('#metaname_id').val(elementM);
         document.getElementById("data_display").style.display = "none";
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assetf\resources\views/admins/assets/asset.blade.php ENDPATH**/ ?>