
  @extends('admins.layouts.Apps.app')
  @section('contents')
   <style type="text/css">    
    .red {
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
            <h1>Slider Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('themes.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="inputEmail3">Title</label>
                                 <div class="row">                        
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                  <div class="form-group">
                                    <input type="text" name="title" id="" class="form-control" placeholder="Slider title">
                                        </div>
                                </div>
                                  </div>
                          </div>


                           <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">

                            <label for="inputEmail3">Status</label>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">

                              <select name="status" id="status" class="form-control">
                              <option value="">--Select Status--</option>
                         
                                <option value="0">0</option>
                                <option value="1">1</option>                  
                            </select>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">

                            <label for="inputEmail3">Section</label>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">

                              <select name="section" id="section" class="form-control">
                              <option value="">--Select section name--</option>
                           <option>Main slider</option>
                           <option>Slider1</option>
                           <option>Slider2</option>
                              <option>Footer1</option>  
                               <option>Footer2</option>  
                                <option>Footer3</option>                          
                            </select>

                                </div>
                              </div>
                        </div>
  </div>


      <div class="row">                    
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                      <label for="inputEmail3">Description </label>
                             <textarea name="description" id="" cols="100%" rows="2" placeholder="descriptions"></textarea>
                      
                        </div>
                  </div>
                        
                           <div class="row">
 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <x-label for="password_confirmation" :value="__('Photo')" />
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;" required="">
                                   
                                </div>
                              </div>
          
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
             <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="images/no.png" onClick="triggerClick()" id="profileDisplay">
            </span>
</div>
</div>

                           



                  <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 col-md-offset-3">
                      <div class="form-group row">
                     <button type="submit" class="btn btn-primary">Save</button>
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
          <h3 class="card-title">Slider</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Section</th>
                    <th>Attachment</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($sliders as $slide)
                  <tr>
                        <td>{{$slide->id  }}</td>
                        <td>{{$slide->title  }}</td>
                        <td>{{$slide->description  }}</td>
                        <td>{{$slide->section  }}</td>
                           <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/uploads/'.$slide->attachment) }}"  style="width:100px; height:90px;"></div></td>

                        <td>{{$slide->status  }}</td>
                        <td><a href="{{ route('themes.edit',$slide->id) }}"><i class="fa fa-edit"></i></a>  <a href="/themes-destroy/{{$slide->id}}" onclick="return confirm('Are you sure? You want to delete {{ $slide->tour_name}}','Inclusive')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  @endforeach
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

@endsection
