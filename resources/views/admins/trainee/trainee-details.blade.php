
 @extends('admins.layouts.Apps.app')
  @section('contents')


<section class="user-profile section">
    <div class="container">
        <div class="row widget">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="{{ URL::asset('/storage/trainee/'.$student->photo) }}" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-center">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</h5>
                        <p class="text-center">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget dashboard-links">

                        <input type="text" class="form-control" name="classg" value="{{$student->last_name}}">
                          <input type="text" class="form-control" name="session" value="{{$student->last_name}}">

                       <div><a class="my-1 d-inline-block" href="">Addmission: <b>{{$student->addmission_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Session: <b>{{$student->session}}</b></a></div>
                       
                        <div><a class="my-1 d-inline-block" href="">Mobile: <b>{{$student->mobile_no}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Email: <b>{{$student->email}}</b></a></div>
                          <div><a class="my-1 d-inline-block" href="">Marital status: <b>{{$student->marital_status}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">No of Children: <b>{{$student->no_children}}</b></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h3>Summary Report</h3>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget personal-info">
                            <h3 class="widget-header user">Extras Information</h3> 
                             <div><a class="my-1 d-inline-block" href="">Birth Date: <b>{{$student->birth_date}}</b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Gender: <b>{{$student->gender}}</b></a></div>
                             <div><a class="my-1 d-inline-block" href="">Religion: <b>{{$student->religion}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Tribe: <b>{{$student->tribe}}</b></a></div>
                         <div><a class="my-1 d-inline-block" href="">Parental status: <b>{{$student->parental_status}}</b></a></div>

                        <hr>  
                            <div><a class="my-1 d-inline-block" href="">Education Level: <b>{{$student->education_level}}</b></a></div> 
                             <div><a class="my-1 d-inline-block" href="">Year of Complete: <b>{{$student->graduate}}</b></a></div>                         
                        <hr>
                              <div><a class="my-1 d-inline-block" href="">Current residence: <b>{{$student->current_residence}}</b></a></div>
                        <div><a class="my-1 d-inline-block" href="">Place of Origin: <b>{{$student->place_origin}}</b></a></div> 
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Change Password -->
                    <div class="widget change-password">
                        <h3 class="widget-header user">Guardian detail</h3> 
                <div>Guardian relationship: <b>{{$student->relationship}}</b></div>                       
                   <div>Guardian name: <b>{{$student->gurdian_name}}</b></div> 
                   <div>Guardian mobile: <b>{{$student->guardian_mobile}}</b></div>
                    </div> 


                                       <div class="widget change-password">
                        <h3 class="widget-header user">Designation</h3>                        
                   <div>Current designation: <b>{{$student->designation}}</b></div>
                    <div>Current location: <b>{{$student->located}}</b></div>
                    </div>  
                    </div>
                    <div class="row">
                       @if($search =='sflag')
                 <a href="/students" class="btn btn-primary">
              <i class="fa fa-angle-double-left"></i>
            </a>
            @endif

                    @if($search =='iflag')


          <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('search',$student->class,$student->session) }}" enctype="multipart/form-data">

      @csrf
             <input type="hidden" name="user_id" value="POST">

 
<button type="submit" role="button" class="btn btn-primary"> <i class="fa fa-angle-double-left"></i></button>
           </form> 
            @endif


<div class="float-right">
                  @if(Auth::user()->role =='Admin')
                <a href="/editStudent/{{$student->id}}" class="btn btn-success float-right">
              <i class="fas fa-pencil-alt"></i> Edit
            </a>
@endif
            </div> 
        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection