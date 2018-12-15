@extends('layouts.mainwrapper')

@section('title')
<title>Ab.co | Input Products</title>
@endsection

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Products</h3>
			<div class="row">
				<div class="col-md-6">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Add Product</h3>
						</div>
						<div class="panel-body">
							<form action="/produk" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label class="control-label ">ID Product </label>
									<input type="text" class="form-control" placeholder="ID Product" name="id" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Product Name </label>
									<input type="text" class="form-control" placeholder="Product Name" name="name" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Price </label>
									<input type="text" class="form-control" placeholder="Price" name="price" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Stock </label>
									<input type="text" class="form-control" placeholder="Stock" name="stock" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Description </label>
									<textarea class="form-control" name="description">Description</textarea>
								</div>
								<div class="form-group">
									<label class="control-label ">Product Image </label>
									<input type="file" class="form-control" placeholder="Image" name="price" value="" disabled>
								</div>
						</div>
						<div class="panel-footer" align="right">
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<button type="submit" class="btn btn-primary btn-md" id="save" name="sbmt"><i class="fa fa-save"></i>&nbsp;&nbsp;SAVE</button>
						</div>
						</form>
					</div>
					<!-- END INPUTS -->
					<!-- INPUT SIZING -->

					<!-- END INPUT SIZING -->
				</div>
				<!-- Column 2 -->
				<!--<div class="col-md-6">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Produk</h3>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>-->


					<!-- LABELS -->

					<!-- END LABELS -->
					<!-- PROGRESS BARS -->

					<!-- END PROGRESS BARS -->
					<!-- INPUT GROUPS -->

					<!-- END INPUT GROUPS -->
					<!-- ALERT MESSAGES -->

					<!-- END ALERT MESSAGES -->
				</div>
			</div>
		</div>
	</div>
	@endsection