@extends('layouts.mainwrapper')

@section('title')
<title>Ab.co | Home Page</title>
@endsection

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">All Products</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Product Title</h3>
						</div>
						<div class="panel-body">
								<div class="form-group" align="center">
									<img src="{{ URL ('pict/nopict.png') }}" class="img-thumbnail"/>
								</div>
								<div class="form-group">
									<label class="control-label ">Product Name </label>
								</div>
								<div class="form-group">
									<label class="control-label ">Price </label>
								</div>
						</div>
						<div class="panel-footer" align="center">
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<button type="submit" class="btn btn-primary btn-md" id="save" name="sbmt"><i class="fa fa-search"></i>&nbsp;&nbsp;View</button>
						</div>
					</div>
                </div>
                <div class="col-md-4">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Product Title</h3>
						</div>
						<div class="panel-body">
								<div class="form-group" align="center">
									<img src="{{ URL ('pict/nopict.png') }}" class="img-thumbnail"/>
								</div>
								<div class="form-group">
									<label class="control-label ">Product Name </label>
								</div>
								<div class="form-group">
									<label class="control-label ">Price </label>
								</div>
						</div>
						<div class="panel-footer" align="center">
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<button type="submit" class="btn btn-primary btn-md" id="save" name="sbmt"><i class="fa fa-search"></i>&nbsp;&nbsp;View</button>
						</div>
					</div>
                </div>
                <div class="col-md-4">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Product Title</h3>
						</div>
						<div class="panel-body">
								<div class="form-group" align="center">
									<img src="{{ URL ('pict/nopict.png') }}" class="img-thumbnail"/>
								</div>
								<div class="form-group">
									<label class="control-label ">Product Name </label>
								</div>
								<div class="form-group">
									<label class="control-label ">Price </label>
								</div>
						</div>
						<div class="panel-footer" align="center">
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<button type="submit" class="btn btn-primary btn-md" id="save" name="sbmt"><i class="fa fa-search"></i>&nbsp;&nbsp;View</button>
						</div>
					</div>
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