@extends('template.base')

@section('content')
<<<<<<< HEAD
	 <div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
=======
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
						@csrf
					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name='nama'></input>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Foto</label>
								<input type="file" name="foto" class="form-control" accept=".png, .jpg, .jpeg">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" name="harga" class="form-control">
							</div>
						</div>
<<<<<<< HEAD
						
								</div>
							<div class="col-md-3">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga">
								</div>
							<div class="col-md-3">
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat">
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Stok</label>
										<input type="text" class="form-control" name="stok">
									</div>
								</div>
=======
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Berat</label>
								<input type="text" name="berat" class="form-control">
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
<<<<<<< HEAD
								<label for="" class="control-label">Deskripsi</label>
								
=======
								<label for="" class="control-label">Stok</label>
								<input type="text" name="stok" class="form-control">
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for=""  class="control-label">Deskripsi</label>
						<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
					</div>

					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
	
	
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
	$(document).ready(function() {
  		$('#deskripsi').summernote();
	});
	</script>
=======
</div>
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
	  $('#deskripsi').summernote();
	});
</script>
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
@endpush