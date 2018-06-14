<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BK Travel Adind Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="/ckeditor/ckeditor.js"></script>
</head>
<body>          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">                        
                        <img src="images/bktravel.png" height="200%" alt=""/>
                    </a>                    
                </div>
              
                <span class="logout-spn" >
                  <a href="{{url('logout')}}" style="color:#fff;"><i class="fa fa-sign-out"></i>Logout</a>  
                </span>
            </div>
        </div>
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">   
                    <li class="active-link">
                        <a href="{{url('/admin/home')}}" ><i class="fa fa-desktop "></i>Home</a>
                    </li>
                    <li>
                        <a href="{{url('/admin/clients_management')}}"><i class="fa fa-table "></i>Quản lý khách hàng<span class="fa arrow"></span></a>
                        <ul>
                          <li><a href="">Khách đã có vé</a></li>            
                          <li><a href="">Khách chưa có vé</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/admin/tours_management')}}"><i class="fa fa-edit "></i>Quản lý tour<span class="fa arrow"></span></a>
                        <ul>
                          <li><a href="">Tour còn chỗ</a></li>                       
                          <li><a href="">Tour đã đầy</a></li>  
                          <li><a href="">Tour hết hạn</a></li>  
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/admin/users_management')}}"><i class="fa fa-qrcode "></i>Quản lý nhân viên<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Option<span class="fa arrow"></span></a>
                    </li>                      
                </ul>
            </div>
        </nav>    
        
        <div id="page-wrapper" >
            <div>
                @yield('content')
            </div> 
        </div>        
    </div>
         
    <div class="footer">  
        <div class="row">
            <div class="col-lg-12" >
                &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
            </div>
        </div>
    </div>
          
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>
