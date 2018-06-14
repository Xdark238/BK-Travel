@extends('layouts.admin')

@section('content')

  <div id="page-inner">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <h2>Thông tin nhân viên</h2>   
          </div>
      </div>               
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
        	<div class="pull-right">
        		<a class="btn btn-primary" href="{{url('/admin/users_management/')}}">Back</a>
        	</div>            
          </div>
      </div> 
      <hr>
      <table class="table table-bordered">
        <tr>
          <th>Mã nhân viên</th>
          <td>BK1996</td>
        </tr>
        <tr>
          <th>Họ tên</th>
          <td>Bùi Văn Tài</td>          
        </tr>      
          <th>Chức vụ</th>
          <td>Trưởng phòng kinh doanh</td>
        <tr>          
          <th>Ngày sinh</th>
          <td>08/03/1886</td>
        </tr>
        <tr>
          <th>Địa chỉ</th>
          <td>Hà Nội</td>          
        </tr>      
        <tr>
          <th>Email</th>
          <td>taiboi@gmail.com</td>          
        </tr>
        <tr>
          <th>Trình độ học vấn</th>
          <td>Tiểu học</td>          
        </tr>
        <tr>
          <th>Số năm kinh nghiệm</th>          
          <td>0.001</td>          
        </tr>
        <tr>
          <th>Ghi chú</th>
          <td>Không có ghi chú gì</td>
        </tr>
      </table>         
  </div> 

@endsection