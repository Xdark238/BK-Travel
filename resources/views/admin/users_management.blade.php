@extends('layouts.admin')

@section('content')

  <div id="page-inner">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <h2>Quản lý nhân sự</h2>   
          </div>
      </div>               
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
        	<div class="pull-right">
        		<a class="btn btn-primary" href="{{url('/admin/users_management/create')}}">Thêm nhân viên mới</a>
        	</div>            
          </div>
      </div> 
      <hr>
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Họ tên</th>
          <th>Chức vụ</th>
          <th width="280px">Action</th>
        </tr>      
        <tr>
          <td>1</td>
          <td>Bùi Văn Tài</td>
          <td>Trưởng phòng kinh doanh</td>
          <td>
            <a class="btn btn-info" href="{{url('/admin/users_management/detail/1')}}">Show</a>            
            <a class="btn btn-primary" href="#">Edit</a>     
            <a class="btn btn-danger" href="#">Delete</a>                      
          </td>
        </tr>      
      </table>         
  </div> 

@endsection