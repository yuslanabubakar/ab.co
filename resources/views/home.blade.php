@extends('layouts.mainwrapper')

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Produk</h3>
			<div class="row">
				<div class="col-md-6">
					<!-- BUTTONS -->

					<!-- END BUTTONS -->
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Input Produk</h3>
						</div>
						<div class="panel-body">
							<form action="/produk" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label class="control-label ">Kode Produk </label>
									<input type="text" class="form-control" placeholder="Kode Produk" name="kode_produk" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Nama Produk </label>
									<input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Merk </label>
									<input type="text" class="form-control" placeholder="Merk" name="merk" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Jenis Produk </label>
									<input type="text" class="form-control" placeholder="Jenis Produk" name="jenis_produk" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Stock </label>
									<input type="text" class="form-control" placeholder="Stock" name="stock" value="">
								</div>
								<div class="form-group">
									<label class="control-label ">Price </label>
									<input type="text" class="form-control" placeholder="Price" name="price" value="">
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
				<div class="col-md-6">
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
									@foreach($produk as $row)
									<tr>
										<td>{{$row->kode_produk}}</td>
										<td>{{$row->nama_produk}}</td>
										<td>{{$row->merk}}</td>
										<td>{{$row->stock}}</td>
										<td><a href="{{URL('/produk/edit')}}/{{$row->kode_produk}}"  class="btn btn-info">Edit</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
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