@extends('layouts.admin')

@section('content')

  <div id="page-inner">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <h2>Quản lý tours</h2>   
          </div>
      </div>               
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
        	<div class="pull-right">
        		<a class="btn btn-primary" href="/admin/tours_management/create">Tạo tour mới</a>
        	</div>            
          </div>
      </div>   
      <hr>
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Tên tour</th>
          <th>Thời gian</th>
          <th>Địa điểm</th>
          <th>Giá</th>
          <th>Số vé đã đặt</th>
          <th>Tổng số vé</th>
          <th width="280px">Action</th>
        </tr>      
        <tr>
          <td>1</td>
          <td>Phú Quốc 4 sao</td>
          <td>20/06/2018</td>
          <td>Phú Quốc</td>
          <td>5.200.000 đ</td>
          <td>28</td>
          <td>30</td>
          <td>
            <!-- <a class="btn btn-info" href="#">Show</a>             -->
            <a class="btn btn-primary" href="#">Edit</a>     
            <a class="btn btn-danger" href="#">Delete</a>                      
          </td>
        </tr>      
      </table>                   
  </div>   

@endsection