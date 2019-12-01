@extends('backend.layouts.content')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<a href="{{ route('item-management') }}" class="text-primary float-right">
					<u>Kembali ke Daftar Barang</u>
				</a>
				<h1 class="text-lighten">
					<u>{{ $model->name }}</u>
				</h1>
				<p>
					{{ $model->description }}
				</p> <hr>
				<h3>Detail Lainnya</h3>
				<div class="table-responsive mb-3">
					<table>
						<tr>
							<td>Kategori</td>
							<td>:</td>
							<td>{{ $model->itemCategory->name }}</td>
						</tr>
						<tr>
							<td>Lebar</td>
							<td>:</td>
							<td>{{ $model->width }} cm</td>
						</tr>
						<tr>
							<td>Panjang</td>
							<td>:</td>
							<td>{{ $model->length }} cm</td>
						</tr>
						<tr>
							<td>Tinggi</td>
							<td>:</td>
							<td>{{ $model->height }} cm</td>
						</tr>
						<tr>
							<td>Berat</td>
							<td>:</td>
							<td>{{ $model->weight }} kg</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td>{{ $model->status == true ? 'Tersedia' : 'Tidak Tersedia' }}</td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>:</td>
							<td>Rp. {{ number_format($model->price) }}</td>
						</tr>
						<tr>
							<td>Stok</td>
							<td>:</td>
							<td>
								{{ !empty($stock) ? $stock : 0 }} | 
								<a href="" class="text-primary" data-toggle="modal" data-target="#exampleModal">
									<u>input stok barang</u>
								</a>
							</td>
						</tr>
					</table>
				</div> <hr>
				<a href="{{ route('item-management.image', $model->id) }}" class="text-primary float-right"><u>Masukkan gambar barang</u></a>
				<h3>Gambar Barang</h3>
				<div class="table-responsive">
			    	<table class="table table-striped">
			    		<tr>
				    		<th>#</th>
				    		<th>Image</th>
				    		<th>Original Name</th>
				    		<th>Action</th>
				    	</tr>
				    	@forelse($images as $image)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>
								<img src='{{ url("/images/$image->resize_name") }}' alt="{{ $image->original_name }}">
							</td>
							<td>
								{{ $image->original_name }}
							</td>
							<td>
								<a href="{{ route('item-management.delete-image', $image->original_name) }}" class="btn btn-danger btn-sm mb-2">Remove {{ $image->original_name }}</a>
							</td>
						</tr>
			            @empty
						<tr>
							<td colspan="4">Belum ada gambar untuk produk ini.</td>
						</tr>
			            @endforelse
			    	</table>	
	    		</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Stok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<form action="{{ route('item-management.stock', $model->id) }}" method="POST">
       		@csrf
       		<input type="hidden" name="stock" value="{{ $stock }}">
       		<div class="form-group">
       			<label for="qty">Jumlah</label>
       			<input type="number" name="qty" id="qty" class="form-control" required>
       		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
	$(document).ready(function() {
		baguetteBox.run('.tz-gallery');
	});
</script>
@endsection