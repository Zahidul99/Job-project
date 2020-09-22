@extends('welcome')

@section('admin_content')

               <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Customer</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Customer</h2>
						<p class="alert-success">
							<?php
                             $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                             }
							?>
							
						</p>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-customer')}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						  <fieldset>

							<div class="control-group">
							
							<div class="control-group">
							  <label class="control-label" for="date01">Customer Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="customer_name" required="">
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="date01">Customer Id</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="customer_id" required="">
							  </div>
							</div>
							


							  <div class="control-group">
							  <label class="control-label" for="date01">Customer Email</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="customer_email" required="">
							  </div>
							</div>

							 <div class="control-group">
							  <label class="control-label" for="date01">Customer_mobile</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="customer_mobile" required="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="customer_image" id="fileInput" type="file">
							  </div>
							</div> 
							 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Customer</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection