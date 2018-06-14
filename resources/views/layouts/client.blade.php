
<!DOCTYPE html>
<html>
<head>
<title>BK Travel</title>
<link href="{{asset('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic')}}" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('css/style1.css')}}" rel="stylesheet" type="text/css" media="all"/>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
     <div class="header-top">
        <!--container-->
        <div class="container">
          <div class="example">
            <input type="text" placeholder="Search.." name="search">
            <a href="{{url('tours')}}"><button type="submit"><i class="fa fa-search"></i></button></a>
          </div>
            <div class="top-nav">
                        <div class="logo">
                        <a href="#"><img src="images/bktravel.png" height="35%" width="35%" id="section-1" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="menu">
                            <ul>
                                 <li><a href="{{url('tours')}}">Home</a></li>                  
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Top tours</a></li>
                                 <li><a href="#">Guides</a></li>
                                 <li><a href="#">Contact</a></li>
                                 <div class="clearfix"></div>
                            </ul>
                        </div>
            </div>
            <div class="clearfix"> </div>            

         </div>
         <!--/container-->
     </div>
<!--/sticky-->


<!--banner-->
<!--start-slider-script-->
            <script src="js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
            <!--//End-slider-script-->
            <!-- Slideshow 4 -->
            <div id="section-1" class="section">
                <div id="top" class="callbacks_container">
                  <ul class="rslides" id="slider4">
                    <li>
                      <img src="images/banner.png" alt="">
                      <div class="caption">
                            <div class="header-info">
                            <h2><a href="#">Get Away On This Weekend</a></h2>
                            <lable></lable>
                            <h1><a href="#">HEAVEN BEACH RESORT</a></h1>
                            </div>
                      </div>
                    </li>
                    <li>
                      <img src="images/beach2.jpg" alt="">
                    <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Get Away On This Weekend</a></h2>
                            <lable></lable>
                            <h1><a href="#">HEAVEN BEACH RESORT</a></h1>
                            </div>
                      </div>
                    </li>
                    <li>
                      <img src="images/beach3.jpg" alt="">
                      <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Get Away On This Weekend</a></h2>
                            <lable></lable>
                            <h1><a href="#">HEAVEN BEACH RESORT</a></h1>
                            </div>
                      </div>
                    </li>
                    <li>
                      <img src="images/beach4.jpg" alt="">
                      <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Get Away On This Weekend</a></h2>
                            <lable></lable>
                            <h1><a href="#">HEAVEN BEACH RESORT</a></h1>
                            </div>
                      </div>
                    </li>
                  </ul>
                </div>           
                <div class="clearfix"> </div>
                </div>
        <!-- /End-slider-->
<!--/banner--> 

<div>
    @yield('content')
</div>

<!--Contact-->
<div id="section-5" class="contact section">
      <div class="contact-head text-center">
          <h3>CONTACT US</h3>
          <span></span><img src="images/mail.png" alt=""><span></span>
          <div class="contact-grids">
              <div class="container">
                  <div class="col-md-4 address">
                        <h4>Lorem ipsum dolor sit amet,consec</h4>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip 
                        ex ea commodo consequat.</p>
                        <h5><span class="img1"></span>+84 24 3869 3796</h5>
                        <h5><span class="img2"></span><a href="#">qhqt@mail.hust.edu.vn</a></h5>
                        <h5><span class="img3"></span>1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</h5>
                  </div>
                  <div class="col-md-8 contact">    
                      <form>
                      <input type="text" class="text" value=" Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
                      <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your mail';}">
                      <textarea onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Enter Message Here';" >Message</textarea>
                      <input type="submit" value="Send message">
                      <div class="clearfix"></div>
                       </form>
                   </div>
                  <div class="clearfix"></div>
              </div>
          </div>
            
      </div>
</div>
<!--/Contact-->

<div class="fotter">    
     <div class="container">
         <div class="fotter-grids">
             <div class="col-md-4 fotter-left">
             <img src="images/bktravel.png" height="40%" width="40%" alt="">
             <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                sed quia consequuntur magni dolores eos qui ratione.</p>
             </div>
             <div class="col-md-4 fotter-middle">
                 <h3>Latest News</h3>
                 <div class="footer-list">
                        <ul>
                        <li><a href="#"><span></span>Sed ut perspiciatis unde omnis iste natus.</a></li> 
                        <li><a href="#"><span></span>Voluptatem accusantium.</a></li> 
                        <li><a href="#"><span></span>Totam rem aperiam,eaque ipsa quae.</a></li> 
                        <li><a href="#"><span></span>Inventore veritatis et quae.</a></li> 
                        <li><a href="#"><span></span>Nemo enim ipsum voluptatem quia voluptas.</a></li>
                        </ul>
                 </div>
             </div>
             <div class="col-md-4 fotter-right">
             <h3>Newsletter</h3>
             <form>
             <input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your mail';}">
             <input type="submit" value="Send">
             <div class="clearfix"></div>
             </form>
             <div class="social-icons">
             <a href="#"><span class="facebook"> </span></a>
             <a href="#"><span class="twitter"> </span></a>
             <a href="#"><span class="googleplus"> </span></a>
             <a href="#"><span class="pinterest"> </span></a>
             <a href="#"><span class="instagram"> </span></a>
             </div>
             <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
     </div>
</div>
</div>  
<div class="copyright text-center">
<p>Template by <a href="http://www.w3layouts.com">W3layouts</a></p>
</div>
  <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#nav').onePageNav({
            begin: function() {
            console.log('start')
            },
            end: function() {
            console.log('stop')
            }
        });
    });
    </script>
  
</body>
</html>