@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Produk
				</div>
				<div class="card-body">
<<<<<<< HEAD
					<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						{{$produk->harga}} |
						Stok : {{$produk->stok}} |
						Berat : {{$produk->berat}} gr |
						Seller : {{$produk->username}} |
						Tanggal Produk : {{$produk->created_at}} 
					</p>\
					<p>
						{!! nl2br($produk->diskripsi) !!}
					</p>
=======
					<table class="table">
						<tbody>
							@include('produk.show.detail')
							<p>
								{!! nl2br($produk->deskripsi) !!}
							</p>
							<p>
								<img src="{{ url("public/$produk->foto") }}" alt="">
							</p>
						</tbody>
					</table>
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
				</div>
			</div>
		</div>
	</div>
</div>

<<<<<<< HEAD
				


=======
>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
@endsection