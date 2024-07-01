
  @extends('admins.layouts.Apps.app')
  @section('contents')


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
                <form method="POST" id="post_form" role="form" class="registration-form" action="{{ route('students.update',$datas->id) }}" enctype="multipart/form-data">

                    <fieldset>
                           @csrf
                              <input type="hidden" name="_method" value="PUT">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Personal Information</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Addmission number</label>
                                    <input type="text" class="form-control" placeholder="Addmission no" name="addmission_no" value="{{$datas->addmission_no}}">
                                </div>
                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Class</label>
                                <select class="form-control" name="class">
    <option>{{$datas->class}}</option>
                                    <option></option>
                                    <option>Vulnerable youth</option>
                               
                                </select>
                            </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Session</label>
                                <select class="form-control" name="session">
                                   <option>{{$datas->session}}</option>
                                   <option></option>
                                    <option>March 2023</option>
                                    <option>June 2023</option>
                                </select>
                            </div>
                            </div>

                               <div class="row">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>First name</label>
                                    <input type="text" class="form-control" value="{{$datas->first_name}}" name="fname" >
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control" value="{{$datas->middle_name}}" name="mname">
                                </div>
                                 <div class="form-group col-md-4 col-sm-6">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" value="{{$datas->last_name}}" name="lname">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">

         
                               <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                          <label>Birth date</label>
                                <input type="date" class="form-control" name="birth_date" value="{{$datas->birth_date}}">
                            </div>
                        </div>
                                    <div class="form-group col-md-4 col-sm-4">
                                         <label>Gender</label>
                                        <select class="form-control" name="gender">
 <option>{{$datas->gender}}</option>
                                             <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>


                                      <div class="form-group col-md-4 col-sm-4">
                                         <label>Mobile number</label>
                                        <input type="text" class="form-control" value="{{$datas->mobile_no}}" name="mobile_no" required>
                                    </div>
                                </div>
                            </div>

    <div class="" style="margin-bottom:3px;">
                                <div class="row">

         
                               <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                       <label>Email</label>
                                <input type="email" name="email" value="{{$datas->email}}" class="form-email form-control">
                            </div>
                          </div>
                                    <div class="form-group col-md-4 col-sm-4">
                                         <label>Education level</label>
                                        <select class="form-control" name="education">
                                          <option>{{$datas->education_level}}</option>
                                              <option value=""></option>
                                    <option>Standard seven</option>
                                    <option>Form IV</option>
                                    <option>Form VI</option>
                                      <option>Certificate</option>

                                      <option>Diploma</option>
                                      <option>Degree</option>
                                      <option>Master</option>
                                      <option>Postponed</option>

                                      <option>Other</option>
                                      <option>None</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2 col-sm-4">

                                      <div class="form-group">
                                       <label>Year</label>
                                <input type="number" name="graduate" value="{{$datas->graduate}}" class="form-email form-control" name="graduate">
                            </div>
                          </div>


                                      <div class="form-group col-md-2 col-sm-4">
                                         <label>Religion</label>
                                        <select class="form-control" name="religion">
                                          <option>{{$datas->religion}}</option>
                                            <option></option>
                                            <option>Christianity</option>
                                            <option>Islamic</option>
                                            <option>Other</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

<div class="row">

                               <div class="form-group col-md-4 col-sm-4">
                                <label>Marital status</label>
                                        <select class="form-control" name="marital_status">
                                          <option>{{$datas->marital_status}}</option>
                                            <option></option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Other</option>
                                        </select>
                                </div>
                                  <div class="form-group col-md-4 col-sm-4">
                                    <label>Number of children</label>
                                    <input type="number" class="form-control" value="{{$datas->no_children}}" name="no_children">
                                </div>                               
                                  
             



   <div class="form-group col-md-4 col-sm-4">
                                    <x-label for="password_confirmation" :value="__('Photo')" />
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;">
                                   
                                </div>
          
            <span class="img-div float-right">
              <div class="text-center img-placeholder"  onClick="triggerClick()">               
              </div>
              <img src="{{ URL::asset('/storage/photos/'.$datas->photo) }}" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>

                        </div>
                            
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                  


                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Other Information</h3>
                             
                            </div>
                        </div>

  <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Tribe</label>
                                        <select class="form-control" name="tribe">
                                           <option>{{$datas->tribe}}</option>
                                            <option></option>                                           
                                   
  @foreach ($tribes as $tribe) 
  <option>{{$tribe->tribe}}</option>
 @endforeach 
                                        </select>
                                    </div>

                                     <div class="form-group col-md-4 col-sm-4">
                                    <label>Place of origin</label>
                                    <input type="text" class="form-control" value="{{$datas->place_origin}}" name="place_origin">
                                </div>

                                <div class="form-group col-md-4 col-sm-4">
                                    <label>Current residence</label>
                                    <input type="text" class="form-control" value="{{$datas->current_residence}}" name="current_residence">
                                </div>

                                 <div class="form-group col-md-6 col-sm-6">
                                         <label>Designation</label>
                                        <select class="form-control" name="designation" id="designation">
                                           <option>{{$datas->designation}}</option>
                                            <option></option>
                                           
                                             @foreach ($designations as $designation) 
  <option>{{$designation->designation}}</option>
 @endforeach 
                                        </select>
                                    </div>
                                

<div class="form-group col-md-6 col-sm-6">
                                         <label>Assignee lodge</label>
                                        <select class="form-control" name="located" id="located">
                                           <option>{{$datas->located}}</option>
                                            <option></option>
                                           
                                             @foreach ($lodges as $lodge) 
  <option>{{$lodge->lodge_name}}</option>
 @endforeach 
                                        </select>
                                    </div>

                            </div>

                             
                             <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Gurdian</h3>
                             
                            </div>
                        </div>

                        <div class="form-bottom">


                       <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                       <label>Parental status</label>
                                <select class="form-control" name="parental_status">
                                   <option>{{$datas->parental_status}}</option>
                                    <option></option>
                                    <option>Both alive</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>None of Them</option>
                                </select>
                                    </div>

                      <div class="form-group col-md-4 col-sm-4">

                                      <div class="form-group">
                                     <label>Guardian name</label>
                                <input type="text" value="{{$datas->gurdian_name}}" class="form-email form-control" name="gurdian_name">
                            </div>
                          </div>

                                 
                                
                            </div>

                              <div class="row">
                                 <div class="form-group col-md-4 col-sm-4">
                                         <label>Relationship</label>
                                        <select class="form-control" name="relationship" id="relationship">
                                           <option>{{$datas->relationship}}</option>
                                            <option></option>
                                           
                                             @foreach ($relations as $relation) 
  <option>{{$relation->relation}}</option>
 @endforeach 
                                        </select>
                                    </div>

                      <div class="form-group col-md-4 col-sm-4">
                        <label>Mobile Number</label>
                                      <div class="form-group">
                                     
                                <input type="text" value="{{$datas->guardian_mobile}}" class="" name="guardian_mobile">
                            </div>
                          </div>

                               
                                
                            </div>

                            <button type="button" class="previous btn-previous">Previous</button>
                            <button type="submit" class="submit float-right">Update</button>
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
      @endsection