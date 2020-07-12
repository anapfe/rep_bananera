@extends('layouts.frontLayout')

@section('content')
  <div class="main">
    <div class="caja">
      <div class="section-title">
        Login
      </div>

      <div class="form-div">
        <form class="login_form" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}

        <div class="input email {{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="form-label" for="email">email</label>
          <input class="input-login" type="email" name="email" id="email" value="{{ old('email') }}" autofocus>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="input password {{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="form-label" for="password">contraseña</label>
          <input class="input-login" type="password" name="password" id="password" value="{{ old('password') }}" autofocus>
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
        <div class="input rememberme">
          <label class="form-label">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> recordarme
          </label>
        </div>
        <div class="input login-foot">
          <button class="btn" type="submit" name="button">ingresar</button>
          <a class="input reset" href="{{ route('password.request') }}">
              ¿Olvidaste tu contraseña?
          </a>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
