
  @extends('admins.layouts.Apps.app')
  @section('contents')
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
            <a href="{{ route('students.create') }}" class="btn btn-primary" >
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
                      @foreach ($datas as $data)
                  <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->pin }}</td>
                    <td>{{ $data->addmission_no }}</td>
                    <td><a href="{{ route('inclusive.show',$data->id) }}">{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}<inclusive.show></a></td>
                                      <td><span class="badge"> {{ $data->mobile_no}}</span></td>
                    <td>{{ $data->gender }}<span class="badge"> {{ $data->gender }}</span></td>
                    <td>{{ $data->birth_date }}</td>
                    <td>{{ $data->education_level }}</td>
                   
                  <!--    <td>{{ $data->main }}</td>
                     <td>{{ $data->tour_code }}</td> -->
                      <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/photos/'.$data->photo) }}"  style="width:120px; height:100px;"></div></td>
                       <td>{{ $data->parental_status }}</td>
                   <td>{{ $data->session }}</td>

                    <td>
<a role="button" href="{{ route('students.show',$data->id) }}"><i class="fa fa-bars"></i></a> 
                      <a role="button" href="{{ route('editProgram',$data->id) }}"><i class="fa fa-edit"></i></a> 
                     
                     <!--  <a role="button" href="/destroyf/{{$data->id}} " onclick="return confirm('Are you sure? You want to delete {{ $data->tour_name}}','Inclusive')"><i class="fa fa-trash red"></i></a> -->

                    </td>
                  </tr>
                  @endforeach

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
@endsection
