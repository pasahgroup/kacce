
  @extends('admins.layouts.Apps.app')
  @section('contents')

  <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>


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
            <h1>Asset Page</h1>
          </div>
          <div class="col-sm-6">
             @if(Auth::user()->role =='Admin')
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('asset.create') }}" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Asset
            </a></li>
            </ol>
            @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        
      <div class="card">
        <div class="card-header">
         
  
      @csrf
             <input type="hidden" name="user_id" value="POST">
           <div class="row">
              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Class two</b>

        </div>
               <div class="form-group col-md-3 col-sm-3">
            <div class="form-bottom">                         
                                <select class="form-control" name="classg" id="classg" required>
                            
                                      @foreach ($categories as $category) 
  <option value="{{$category->id}}">{{$category->category}}</option>
   @endforeach 
                                </select>

                            </div>
                            </div>
                              <div class="form-group col-md-1 col-sm-1">
          <b class="card-title">Session</b>
        </div>
                              <div class="form-group col-md-3 col-sm-3">
            <div class="form-bottom">                         
                                <select class="form-control" name="sessionc" id="sessionc" required>
                            
                                      @foreach ($sessions as $session) 
  <option>{{$session->session}}</option>
   @endforeach 
                                </select>
                            </div>
                            </div>
                        
                        
       
          <div class="card-tools">         
          <button type="submit" class="btn btn-success float-right">Ok</button>
           </div>
        </div>
     
      </div>

        <div class="card-body">
            <div class="card-body">
              
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
          $('#sessionc').find('option').not(':first').remove();
             //document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


//alert(v);
         // AJAX request
         $.ajax({
           url: 'getC/'+v,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
                //alet(len);

             if(response['dataN'] != null){
               len = response['dataN'].length;
             }
           //  alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataN'][i].subcategory;
                 var name = response['dataN'][i].subcategory;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#sessionc").append(option);
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

 <script type="text/javascript" src="../jsx/activitydata.js"></script>
@endsection
