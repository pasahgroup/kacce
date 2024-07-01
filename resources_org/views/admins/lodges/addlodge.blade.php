
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Lodge</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Lodge</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('lodge.store') }}">
                @csrf
  <div class="row">
 <div class="col-md-3">
                <div class="card-body">                       
                    <label>Lodge Name</label>
                    <input class="form-control" type="text" name="lodge_name" placeholder="lodge name" required>
                    
             </div> 
           </div>
              <div class="col-md-3">
             <div class="card-body">                       
                    <label>Owner</label>
                    <input class="form-control" type="text" name="owner_name" placeholder="owner name">
                    
             </div> 
             </div>
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Contact</label>
                    <input class="form-control" type="text" name="contact" placeholder="contact">
                    
             </div> 
             </div>
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="email">
                    
             </div> 
             </div>
              </div>


                <div class="row">         
             <div class="col-md-3">
             <div class="card-body">                       
                    <label>GM contact</label>
                    <input class="form-control" type="text" name="gm_contact" placeholder="gm contact">
                    
             </div> 
             </div>

             <div class="col-md-3">
             <div class="card-body">                       
                    <label>GM email</label>
                    <input class="form-control" type="email" name="gm_email" placeholder="gm email">
                    
             </div> 
             </div>


             <div class="col-md-3">
             <div class="card-body">                       
                    <label>Location</label>
                    <input class="form-control" type="text" name="location" placeholder="location">
                    
             </div> 
             </div>
               <div class="col-md-3">
             <div class="card-body">                       
                    <label>Status</label>
                    
                    <select class="form-control" name="status">
                      <option>None</option>
                        <option>Active</option>
                          <option>Inactive</option>
                    </select>
                                        
             </div> 
             </div>
              </div>
             

      <br> 
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                       
                <a href="/lodge"  role="button" class="btn btn-success float-left">View Lodge List</a>
                <button type="submit" class="btn btn-primary float-right" name="lodge" value="lodge">Save</button>
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

@endsection
