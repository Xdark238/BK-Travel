@extends('layouts.admin')

@section('content')

  <div id="page-inner">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <h2>Tạo tour mới</h2>   
          </div>
      </div>     
      <div class="row">
      	<div class="col-lg-12">
      		<div class="pull-right">
      			<a class="btn btn-primary" href="{{url('/admin/tours_management')}}">Back</a>
      		</div>
      	</div>      	
      </div>
		
	{!! Form::open(array('route' => 'tour.store','method'=>'POST')) !!}
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Tên tour:</strong>
				{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Địa điểm:</strong>
				{!! Form::text('local', null, array('placeholder' => 'Local','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Thời gian:</strong>
				{!! Form::text('time', null, array('placeholder' => 'Time','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Mô tả:</strong>
				{!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Khuyến mại:</strong>
				{!! Form::text('discount', null, array('placeholder' => 'Discount','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Nội dung:</strong>
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