@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('item-management') }}" class="btn btn-primary btn-sm float-right">Kembali</a>
					<h4>Tambah Barang</h4>
				</div> <hr>
				<form action="{{ route('item-management.store') }}" method="post">
					@csrf

					<div class="form-group">
						<label for="name">Kategori</label>
						<select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
							<option disabled selected>--pilih kategori barang--</option>
							@foreach($categories as $row)
							<option value="{{ $row->id }}">{{ $row->name }}</option>
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
						<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
					
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="width">Lebar (cm)</label>
						<input type="number" id="width" name="width" class="form-control @error('width') is-invalid @enderror" value="{{ old('width') }}" required>
					
						@error('width')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="length">Panjang (cm)</label>
						<input type="number" id="length" name="length" class="form-control @error('length') is-invalid @enderror" value="{{ old('length') }}" required>
					
						@error('length')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="height">Tinggi (cm)</label>
						<input type="number" id="height" name="height" class="form-control @error('height') is-invalid @enderror" value="{{ old('height') }}" required>
					
						@error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="weight">Berat (kg)</label>
						<input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}" required>
					
						@error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="price">Harga</label>
						<input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" required>
					
						@error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="description">Deskripsi</label>
						<textarea name="description" id="description" rows="20" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
					
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<button type="submit" class="btn btn-primary btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection