
  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">             
              <div class="container-fluid x_content">            
              <form  method="post" id="post_form" action="<?php echo e(route('page.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                  <div>
                    <label>Page Title</label>
                    <input class="form-control" type="text" name="page_title" placeholder="Page Title">
                  </div>
                   <div>
                    <label>Meta Descriptions</label>
                    <input class="form-control" type="text" name="meta_descriptions" placeholder="Descriptions">
                  </div>
                   <div>
                    <label>Meta Keywords</label>
                    <input class="form-control" type="text" name="meta_keywords" placeholder="Meta Keywords">
                  </div>
                  <div>
                    <label>Page Image Cover</label>
                    <input class="form-control" type="file" name="attachment">
                  </div>
                  
                    <div>
                    <label>Select Page Section Number</label>
            <select name="section_no"  id="section_no" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
                  </div>
               
      <hr>
       <div class="form-group row">
              <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
              <button type="submit" class="btn btn-primary float-right" name="page" value="save page">Save</button>         
              </div>
                  </div>
                </div>
                 </div>               
            </form>
      
            
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hmff\resources\views/admins/pages/addPage.blade.php ENDPATH**/ ?>