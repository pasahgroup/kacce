
@extends('website.layouts.app_hm')
@section('content')
<!DOCTYPE html>

<html lang="en">
<head>

<!--   <link href="../../assetf/pages/css/components.css" rel="stylesheet">
  <link href="../../assetf/corporate/css/style.css" rel="stylesheet">
  <link href="../../assetf/pages/css/portfolio.css" rel="stylesheet">
  <link href="../../assetf/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../assetf/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assetf/corporate/css/custom.css" rel="stylesheet"> -->
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
  
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="content-page">
                <div class="filter-v1">
                  <ul class="mix-filter">
                    <li data-filter="all" class="filter active">All</li>
                    <li data-filter="tree" class="filter">Tree Planting</li>
                    <li data-filter="bee_2" class="filter">Bee Keeping</li>
                    <li data-filter="category_3" class="filter">Entrepreneurship</li>
                    <li data-filter="category_3 category_1" class="filter">Vulnarable Children</li>
                  </ul>
                              <div class="row mix-grid thumbnails">


                                <!-- Tree Planting -->
                                
                                  <div class="col-md-3 col-sm-4 mix bee_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                       <img alt="" src="img/photos/tree1.jpg" class="img-responsive">
                                       <div class="mix-details">
                                          <h4>Cascusamus et iusto odio</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                       </div>           
                                    </div>                       
                                  </div>


                                  <div class="col-md-3 col-sm-4 mix category_2 mix_all" style="display: block; opacity: 1; ">
                                       <div class="mix-inner">
                                          <img alt="" src="img/photos/tree1.jpg" class="img-responsive">
                                          <div class="mix-details">
                                             <h4>Cascusamus et iusto accusamus</h4>
                                             <a class="mix-link"><i class="fa fa-link"></i></a>
                                             <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img2.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                          </div>               
                                       </div>                    
                                  </div>

                                   <!-- Bee Keeping -->

                                  <div class="col-md-3 col-sm-4 mix category_3 mix_all" style="display: block; opacity: 1; ">
                                       <div class="mix-inner">
                                          <img alt="" src="assets/pages/img/works/img3.jpg" class="img-responsive">
                                          <div class="mix-details">
                                             <h4>Cascusamus et iusto accusamus</h4>
                                             <a class="mix-link"><i class="fa fa-link"></i></a>
                                             <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img3.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                          </div>              
                                      </div>      
                                  </div>
                                  <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                       <div class="mix-inner">
                                         <img alt="" src="assets/pages/img/works/img4.jpg" class="img-responsive">
                                         <div class="mix-details">
                                             <h4>Cascusamus et iusto accusamus</h4>
                                             <a class="mix-link"><i class="fa fa-link"></i></a>
                                             <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img4.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                         </div>                  
                                      </div>                      
                                  </div>

                                   <!-- Tree Planting -->
                                  <div class="col-md-3 col-sm-4 mix category_2 category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img5.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img5.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                      </div>     
                                      </div>                                   
                                  </div>
                                  <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img6.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img6.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                      </div>     
                                      </div>                                   
                                  </div>
                                  <div class="col-md-3 col-sm-4 mix category_2 category_3 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img1.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img1.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                      </div>    
                                      </div>                                    
                                  </div>

                                   <!-- Entrepreneurship -->
                                  <div class="col-md-3 col-sm-4 mix category_1 category_2 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img2.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus  cat 1 cat 2</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img2.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                      </div>   
                                      </div>                                     
                                  </div>
                                  <div class="col-md-3 col-sm-4 mix category_3 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img4.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img4.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>                            
                                      </div>    
                                      </div>                                    
                                  </div>

                                  <!-- Vulnarable Children -->
                                  <div class="col-md-3 col-sm-4 mix category_1 mix_all" style="display: block; opacity: 1; ">
                                    <div class="mix-inner">
                                      <img alt="" src="assets/pages/img/works/img3.jpg" class="img-responsive">
                                      <div class="mix-details">
                                          <h4>Cascusamus et iusto accusamus</h4>
                                          <a class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="Project Name" href="assets/pages/img/works/img3.jpg" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                      </div> 
                                      </div>                                       
                                  </div>
                              </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>

</body>
<!-- END BODY -->
</html>
@endsection