@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('item-management') }}" class="btn btn-primary btn-sm float-right">Kembali</a>
					<h4>Ubah Data Barang</h4>
				</div> <hr>
				<form action="{{ route('item-management.update', $model) }}" method="post">
					@csrf

					<div class="form-group">
						<label for="name">Kategori</label>
						<select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
							<option disabled selected>--pilih kategori barang--</option>
							@foreach($categories as $row)
							<option value="{{ $row->id }}" {{ $row->id == $model->category_id ? "selected" : "" }}>{{ $row->name }}</option>
							@endforeach
						</select>
					
						@error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $model->name }}" required>
					
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="width">Lebar</label>
						<input type="number" id="width" name="width" class="form-control @error('width') is-invalid @enderror" value="{{ $model->width }}" required>
					
						@error('width')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="length">Panjang</label>
						<input type="number" id="length" name="length" class="form-control @error('length') is-invalid @enderror" value="{{ $model->length }}" required>
					
						@error('length')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="height">Tinggi</label>
						<input type="number" id="height" name="height" class="form-control @error('height') is-invalid @enderror" value="{{ $model->height }}" required>
					
						@error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="weight">Berat</label>
						<input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ $model->weight }}" required>
					
						@error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="price">Harga</label>
						<input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $model->price }}" required>
					
						@error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="description">Deskripsi</label>
						<textarea name="description" id="description" rows="20" class="form-control @error('description') is-invalid @enderror" value="{{ $model->description }}">{{ $model->description }}</textarea>
					
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<button type="submit" class="btn btn-primary btn-block">Ubah</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection