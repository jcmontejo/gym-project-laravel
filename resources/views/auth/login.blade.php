@extends('layouts.auth')

@section('content')
<div class="account-body">

  <h3 class="account-body-title">Bienvenido a FitnessWeb Admin v 1.0.</h3>

  <h5 class="account-body-subtitle">Introduce tus credenciales para acceder.</h5>

  <form class="form account-form" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group
    {{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="login-username" class="placeholder-hidden">Correo</label>
    <input type="email" class="form-control" id="login-username" placeholder="Correo Electrónico" tabindex="1" name="email" value="{{ old('email') }}" required autofocus>
    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div> <!-- /.form-group -->

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <label for="login-password" class="placeholder-hidden">Contraseña</label>
  <input type="password" class="form-control" id="login-password" placeholder="Contraseña" tabindex="2" " name="password" required>
  @if ($errors->has('password'))
  <span class="help-block">
    <strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div> <!-- /.form-group -->

<div class="form-group clearfix">
  <div class="pull-left">         
    <label class="checkbox-inline">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3">Recordar contraseña
    </label>
</div>

<div class="pull-right">
    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
</div>
</div> <!-- /.form-group -->

<div class="form-group">
  <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
    Entrar &nbsp; <i class="fa fa-play-circle"></i>
</button>
</div> <!-- /.form-group -->

</form>
</div> <!-- /.account-body -->
@endsection
