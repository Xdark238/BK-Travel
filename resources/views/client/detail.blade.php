@extends('layouts.client') 

@section('content')    
	
	<div class="container">
		<hr>
 		<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Title -->                
				
                <h1>
                	Phú Quốc - Resort 4 Sao Quốc Tế - Ngắm Hoàng Hôn Tại Sunset Sanato - Thiền Viện Trúc Lâm Hộ Quốc (Tour Tiết Kiệm)
                </h1>            
                <br>
               	 <div class="row">
				    <div class="col-sm-6">
				    	<img class="img-responsive" src="images/t1.jpg" alt="">
				    </div>
				    <div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
					    		Mã tour:
					    	</div>
					    	<div class="col-sm-6">
					    		PQ-20062018
					    	</div>
						</div><hr>
						<div class="row">
							<div class="col-sm-6">
					    		Khởi hành:
					    	</div>
					    	<div class="col-sm-6">
					    		20/06/2018
					    	</div>
						</div><hr>
						<div class="row">
							<div class="col-sm-6">
					    		Nơi khởi hành
					    	</div>
					    	<div class="col-sm-6">
					    		Hồ Chí Minh
					    	</div>
						</div><hr>
						<div class="row">
							<div class="col-sm-6">
					    		<div class="row">
					    			<div class="col-sm-12">
							    		<h3><font color="red">5.200.000 đ</font></h3>
							    	</div>							    	
					    		</div><br>
					    		<div class="row">
					    			<div class="col-sm-12">
							    		<p><font color="blue">Số chỗ còn nhận: 2</font></p>
							    	</div>							    	
					    		</div>
					    	</div>
					    	<div class="col-sm-6">
					    		<a href="{{url('booktour')}}">
					    			<button type="button" class="btn btn-danger btn-lg">ĐẶT NGAY</button>
					    		</a>					    		
					    	</div>
						</div>
				    </div>
				 </div>
                

                <hr>
                <p class="lead"><strong>Chương trình tour</strong></p>		
                <p>
                	Quý khách tập trung tại Sân bay Tân Sơn Nhất, cột số 05 ga đi Trong Nước. Hướng dẫn viên làm thủ tục cho Quý khách đáp chuyến bay đi Phú Quốc. Xe đón đoàn tại sân bay đưa Quý khách khởi hành viếng Chùa Sư Muôn (Hùng Long Tự) - để cầu nguyện sự an lành và hạnh phúc đến với gia đình. Tiếp tục, đoàn tham quan Làng Chài Hàm Ninh, Vườn Tiêu, Nhà Thùng làm nước mắm, Cơ Sở nuôi cấy Ngọc Trai. Quý khách ghé thăm Dinh Cậu - biểu tượng văn hoá và tín ngưỡng của đảo Phú Quốc, là nơi cầu may mắn, cầu an lành và là nơi ngư dân địa phương gởi gắm niềm tin cho một chuyến ra khơi đánh bắt đầy ắp cá khi trở về. Sau đó nhận phòng khách sạn nghỉ ngơi.
 					<br><br>
					Buổi chiều xe đưa quý khách tham quan Sunset Sanato Beach Club sở hữu vị thế đắc địa nhất, khu vui chơi nằm ngay trung tâm của Bãi Trường. Nơi đây, sóng biển dịu êm như một dòng sông, bạn sẽ thấy mình được hưởng trọn vẹn hương vị mặn mòi của biển và mát lành của những hoang sơ còn vương vấn, đến đây du khách sẽ được thưởng ngoạn phong cảnh biển tuyệt đẹp, những góc ảnh check-in cực chất, tự do tắm biển, hòa nhịp trong những bản nhạc sôi động . Nghỉ đêm tại Phú Quốc.
				</p>
				
				<hr>    
					<p class="lead"><strong>Lưu ý</strong></p>		
	
                	<h4>Giá tour bao gồm:</h4> 
                	<ul class="container">
						<li>Xe tham quan (15, 25, 35, 45 chỗ tùy theo số lượng khách) theo chương trình</li>
						<li>Vé máy bay khứ hồi </li>
						<li>Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng </li>
						<li>Vé tham quan theo chương trình  </li>
						<li>Hướng dẫn viên tiếng Việt nối tuyến</li>
						<li>Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ</li>
						<li>Nón Vietravel + Nước suối + Khăn lạnh</li>
						<li>Thuế VAT</li>									 					 
					</ul>
					<br>
					<h4>Giá tour không bao gồm:</h4> 
					<ul class="container">
						<li>Chi phí cá nhân: ăn uống ngoài chương trình, giặt ủi, chi phí hủy đổi hành trình và nâng hạng chuyến bay, hành lý quá cước, phụ thu phòng đơn,…</li>
						<li>Chi phí tham quan ngoài chương trình </li>
					</ul>				
					
                <hr>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tour liên quan</b></div>
                    <div class="panel-body">               
                        <!-- item -->				
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="{{url('detail')}}" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     		<img src="images/t5.jpg" class="img-responsive" alt=""/>
								 </a>
                            </div>
                            <div class="col-md-7">
                                <a href="{{url('detail')}}"><b>Phú Quốc 3 ngày 2 đêm</b></a>
                            </div>
                            <div class="break"></div>
                        </div>					
                        <!-- end item -->

                        <!-- item -->				
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="{{url('detail')}}" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     		<img src="images/t4.jpg" class="img-responsive" alt=""/>
								</a>
                            </div>
                            <div class="col-md-7">
                                <a href="{{url('detail')}}"><b>Phú Quốc 5 sao</b></a>
                            </div>
                            <div class="break"></div>
                        </div>					
                        <!-- end item -->
                    </div>
                </div>
                                
            </div>

        </div>
        <!-- /.row -->
    </div>

@endsection