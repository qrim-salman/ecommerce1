@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('user-management') }}" class="btn btn-primary btn-sm float-right">Kembali</a>
					<h4>Ubah Data Admin</h4>
				</div> <hr>
				<form action="{{ route('admin.update', $admin) }}" method="post">
					@csrf
					
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $admin->name }}" autofocus required>
					
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $admin->email }}" readonly>
					
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group">
						<label for="is_super">Super Admin</label>
						<select name="is_super" id="is_super" class="form-control @error('is_super') is-invalid @enderror" required>
							<option disabled selected>--choose--</option>
							<option value="1" {{ $admin->is_super == 1 ? "selected" : "" }}>Yes</option>
							<option value="0" {{ $admin->is_super == 0 ? "selected" : "" }}>No</option>
						</select>
					</div>

					<div class="form-group">
						<label for="password">New Password</label>
						<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
					
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<button type="submit" class="btn btn-primary btn-sm btn-block">Ubah</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection