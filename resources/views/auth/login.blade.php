@include("frontend.layouts.header")
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xl-5 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-body">
          <h5 class="card-title text-center">{{ __('Masuk') }}</h5>
          @isset($url)
          <form class="form-signin" method="POST" action='{{ url("login/$url") }}'>
          @else
          <form class="form-signin" method="POST" action="{{ route('login') }}">
          @endisset
            @csrf
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              <label for="inputEmail">{{ __('E-Mail') }}</label>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              <label for="inputPassword">{{ __('Password') }}</label>
              
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Masuk') }}</button>
            @isset($url)
            @else
            <div class="form-group mt-3">
              <a class="" href="{{ route('register') }}">{{ __('Belum punya akun ? daftar disini') }}</a>
              <!-- <a class="float-right" href="#">{{ __('Lupa Password ?') }}</a> -->
            </div>
            <hr>
            <p class="d-block text-center text-muted mt-2">Atau masuk dengan</p>
            <div class="row">
              <div class="col-6">
                <a href="{{ url('/auth/google') }}" class="btn btn-google btn-block text-uppercase"><i class="fab fa-google"></i> {{ __('Google') }}</a>
              </div>
              <div class="col-6">
                <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook btn-block text-uppercase"><i class="fab fa-facebook-f"></i> {{ __('Facebook') }}</a>
              </div>
            </div>
            @endisset
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