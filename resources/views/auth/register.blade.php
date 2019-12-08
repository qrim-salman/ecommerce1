@include("frontend.layouts.header")
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xl-5 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-body">
          <h5 class="card-title text-center">{{ __('Daftar') }}</h5>
          <form class="form-signin" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-label-group">
              <input type="text" id="inputUserame" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              <label for="inputUserame">{{ __('Username') }}</label>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              <label for="inputEmail">{{ __('E-Mail') }}</label>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            
            <hr>
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              <label for="inputPassword">{{ __('Password') }}</label>

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            
            <div class="form-label-group">
              <input type="password" id="inputConfirmPassword" class="form-control" name="password_confirmation" required autocomplete="new-password">
              <label for="inputConfirmPassword">{{ __('Konfirmasi Password') }}</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Daftar') }}</button>
            <a class="d-block text-center mt-2" href="{{ route('login') }}">{{ __('Masuk') }}</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-lg-6 col-xl-6 mx-auto">
      <p class="text-center"><strong>@ Sukasukalo.com 2019</strong></p>
    </div>
  </div>
</div>
@include("frontend.layouts.footer")