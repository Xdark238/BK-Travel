@extends('layouts.admin')

@section('content')

  	<div id="page-inner">
      	<div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-12">
              	<h2>Thêm nhân viên mới</h2>   
          	</div>
     	 </div> 
       	<div class="row">
	      	<div class="col-lg-12">
	      		<div class="pull-right">
	      			<a class="btn btn-primary" href="{{url('/admin/users_management')}}">Back</a>
	      		</div>
	      	</div>      	
      	</div>
		
		{!! Form::open(array('route' => 'user.store','method'=>'POST')) !!}
	    <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Tên:</strong>
					{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Ngày sinh:</strong>
					{!! Form::text('birthday', null, array('placeholder' => 'Birthday','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Địa chỉ:</strong>
					{!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Email:</strong>
					{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Trình độ học vấn:</strong>
					{!! Form::text('degree', null, array('placeholder' => 'Degree','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Chức vụ:</strong>
					{!! Form::text('position', null, array('placeholder' => 'Position','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Số năm kinh nghiệm:</strong>
					{!! Form::text('exprience', null, array('placeholder' => 'Exprience','class' => 'form-control')) !!}
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Ghi chú:</strong>
					<textarea name="content" id="content"></textarea>
					<script type="text/javascript">			CKEDITOR.replace('content', {
						filebrowserImageBrowseUrl : '/laravel-filemanager?type=Images',
						filebrowserBrowseUrl : '/laravel-filemanager?type=Files'
					});
					</script>
				</div>
			</div>		
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Ảnh:</strong>
					{!! Form::file('images', null) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>   
		{!! Form::close() !!}                  
  </div>

@endsection