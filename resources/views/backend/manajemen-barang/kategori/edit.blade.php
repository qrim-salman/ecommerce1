@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('category') }}" class="btn btn-primary btn-sm float-right">Kembali</a>
					<h4>Ubah Kategori Barang</h4>
				</div> <hr>
				<form action="{{ route('category.update', $category) }}" method="post">
					@csrf

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}" autofocus required>
					
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="description">Deskripsi</label>
						<textarea name="description" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $category->description }}" rows="5" required>{{ $category->description }}</textarea>
					
						@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<button type="submit" class="btn btn-primary btn-sm btn-block">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection