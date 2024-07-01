
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
            
             <a href="/themes" class="btn btn-success" >
              <i class="fas fa-plus"></i>Themes(<b class="red">{{$sliders}}</b>)
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
                        <span>Themes(<b class="blue">{{$sliders}}</b>)</span>

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