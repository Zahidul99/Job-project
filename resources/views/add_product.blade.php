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
					<a href="#">Add Product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add product</h2>
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
						<form class="form-horizontal" action="{{url('/save-product')}}" method="post">
							{{csrf_field() }}
						  <fieldset>

							<div class="control-group">

									<div class="control-group">
							  <label class="control-label" for="date01">Product Id</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_id" required="">
							  </div>
							</div>	
							
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name" required="">
							  </div>
							</div>

									<div class="control-group">
							  <label class="control-label" for="date01">Product Quantity</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_qty" required="">
							  </div>
							</div>

									<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price" required="">
							  </div>
							</div>

				          <div class="control-group">
								<label class="control-label" for="selectError3">Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  	<option>select category</option>
								  	<?php

							$all_published_category=DB::table('Category')
							->where('status',1)
							->get();
						    foreach($all_published_category as $v_category){?>

									<option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
									<?php } ?>
								  </select>
								</div>
							  </div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
