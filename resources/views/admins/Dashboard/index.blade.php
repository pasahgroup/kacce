
  @extends('admins.layouts.Apps.app')
  @section('contents')
   <style type="text/css">
    .red{
      color: red;
    }
    .green{
      color: green;
    }
     .blue{
      color: blue;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome:<b> {{auth()->user()->name}}</b></h3>

          <div class="card-tools">
           
             <a href="/students" class="btn btn-default" >
              <i class="fas fa-plus"></i> Students(<b class="red">{{$students->count()}}</b>)
            </a>
             <a href="/trainee" class="btn btn-success" >
              <i class="fas fa-plus"></i>Trainees(<b class="red">{{$trainees}}</b>)
            </a>
          </div>
        </div>


         <div class="card-header">
         
          <div class="card-tools">
             <a href="/lodge" class="btn btn-success" >
              <i class="fas fa-plus"></i> Lodges(<b class="red">{{$lodges}}</b>)
            </a>
            
            
          </div>
        </div>

        
        <div class="card">
            <div class="card-body">
               <div class="span12">
              <div class="action-nav-normal">
              <div class="row-fluid">
               <div class="span2 action-nav-button">
 @if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant')
                        <a href="/students">
                        <i class="fa fa-users"></i>
                        <span>Students(<b class="blue">{{$students->count()}}</b>)</span>

                        </a>

                    </div>

                  
                    @endif
                    @if(Auth::user()->role == 'Admin' || Auth::user()->role =='accountant' || Auth::user()->role =='Cultural')
                     <div class="span2 action-nav-button">
                        <a href="/trainee">

                        <i class="fa fa-users"></i>
                        <span>Trainee(<b class="blue">{{$trainees}}</b>)</span>
                        
                        </a>

                    </div>
                    @endif
                  </div>
                </div>
              </div>
              </div>

        </div> 

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
 
@endsection