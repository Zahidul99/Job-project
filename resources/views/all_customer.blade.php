@extends('welcome')

@section('admin_content')
       
       <ul class="breadcrumb">

		        <li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
			<p class="alert-success">
              <?php
                          $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                          }
                ?>
            </p>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Customer name</th>
								  <th>Customer Id</th>
								  <th>Customer Image</th>
								  <th>Customer Email</th>
								  <th>Customer Mobile</th>
								  
							  </tr>
						  </thead> 
						  @foreach($all_customer_info as $v_customer)  
						  <tbody>
							<tr>
								<td class="center">{{$v_customer->customer_name}}</td>
								<td class="center">{{$v_customer->customer_id}}</td>
								
								<td class="center"><img src="{{URL::to($v_customer->customer_image)}}" style="height: 80px; width: 80px"></td>
								<td class="center">{{$v_customer->customer_email}} Tk</td>
								<td class="center">{{$v_customer->customer_mobile}} kg</td>

								
									<a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_customer->customer_id)}}" id="delete">


										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						
						</tbody>
			            	@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection