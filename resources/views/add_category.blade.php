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
					<a href="#">Add Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Catagory</h2>
                     </div>
						<p class="alert-success">
							<?php
                             $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                             }
							?>
							
						</p>
					
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save-category')}}" method="post">
							{{csrf_field() }}
						  <fieldset>

							<div class="control-group">
							
							<div class="control-group">
							  <label class="control-label" for="date01">Category Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="category_name" required="">
							  </div>
							</div>
				         

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Category</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
