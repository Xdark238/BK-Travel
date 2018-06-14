@extends('layouts.admin')

@section('content')

  <div id="page-inner">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <h2>Quản lý khách hàng</h2>   
          </div>
      </div> 
      <hr>
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên khách hàng</th>
          <th>Địa chỉ</th>
          <th>Điện thoại</th>
          <th>Email</th>
          <th>Đã đặt tour</th>
          <th>Tình trạng</th>
          <th width="280px">Action</th>
        </tr>      
        <tr>
          <td>1</td>
          <td>Nguyễn Quí</td>
          <td>Hà Nội</td>
          <td>0912345678</td>
          <td>qui@gmail.com</td>
          <td>Phú Quốc 4 sao</td>
          <td><a class="btn btn-primary" href="#">Đã xác nhận</a></td>
          <td>
            <a class="btn btn-info" href="#">Detail</a>            
            <a class="btn btn-primary" href="#">Edit</a>     
            <a class="btn btn-danger" href="#">Delete</a>                      
          </td>
        </tr>  
        <tr>
          <td>2</td>
          <td>Thịnh Vũ</td>
          <td>Hà Tiên</td>
          <td>0900000000</td>
          <td>thinh@gmail.com</td>
          <td>Phú Quốc 0 sao</td>
          <td><a class="btn btn-danger" href="#">Chưa xác nhận</a></td>
          <td>
            <a class="btn btn-info" href="#">Detail</a>            
            <a class="btn btn-primary" href="#">Edit</a>     
            <a class="btn btn-danger" href="#">Delete</a>                      
          </td>
        </tr>          
      </table>                                        
  </div>  
	
@endsection