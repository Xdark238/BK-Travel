@extends('layouts.client') 

@section('content')    

<!--top tours-->
<div class="container">
	<div class="top-tours-head text-center">
	<h3>TOP TOURS</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		  <div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  </div>
	</div>
	<table width="500" border="1" cellpadding="5">

	<tr>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t1.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t2.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t3.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

	</tr>

	<tr>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t4.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t5.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t6.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

	</tr>

	<tr>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t7.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t8.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

		<td align="center" valign="center">
		<a href="{{url('detail')}}">
			<img src="images/t1.jpg">
		</a>
		<br />
		<h5>
			Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
		</h5>
		</td>

	</tr>

</table>
</div>
<!--/top tours-->

<!--Tour guides-->
<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>TOUR GUIDES</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/g1.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Elena Smith</a></p>
					 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g2.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">John Wilson</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g3.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Kelly Gomez</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g4.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Alex Franky</a></p>
				 </div>   
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/g5.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">John</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g6.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Joe Winifred</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g7.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Kevin</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g8.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Fedora Willam</a></p>
				 </div>   
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/g9.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Charles John</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g10.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Sunny Martin</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g11.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Alize Smith</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g12.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Tom Crusis</a></p>
				 </div>   
			  </div>   
			 <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="images/g4.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Elena Smith</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g3.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">John Wilson</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g2.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Kelly Gomez</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g1.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Alex Franky</a></p>
				 </div>   
			  </div>
			  <div class="item text-center guide-slide">
			  <div class="col-md-3 image-grid">
					 <img src="images/g8.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">John</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g7.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Joe Winifred</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g6.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Kevin</a></p>
				 </div>
				 <div class="col-md-3 image-grid">
					 <img src="images/g5.jpg">
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Fedora Willam</a></p>
				 </div> 
			  </div>
		  </div>
		</div>
</div>
<!--/Tour guides-->

<!--client-say-->
<div class="client-say">
	 <div class="client-say-layer">
	     <div class="client-say-head text-center">
			  <h3>CLIENT SAY</h3>
			  <span></span><img src="images/face.png" alt=""><span></span>
			  <!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			 <!-- //requried-jsfiles-for owl -->
		     <div id="owl-demo1" class="owl-carousel">
				  <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.<img src="images/dots2.png" alt="#"></p>
							<h4>Anna Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.<img src="images/dots2.png" alt="#"></p>
							<h4>Anna Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					   <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.<img src="images/dots2.png" alt="#"></p>
							<h4>Smith</h4>
						    <h6><span></span></h6>
					   </div> 
				  </div>
				  <div class="item">
					  <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.<img src="images/dots2.png" alt="#"></p>
						    <h4>Amith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				  <div class="item">
					   <div class="client-say-info">
							<p><img src="images/dots1.png" alt="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.<img src="images/dots2.png" alt="#"></p>
							<h4>John Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
			  </div>
          </div>
      </div>
</div>
<!--/client-say-->

@endsection