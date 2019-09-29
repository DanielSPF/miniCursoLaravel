@extends('layouts.site.master')
@section('title', 'Entrar')
@section('content')
<div class="page-header" style="background-image: url('{{ asset('site') }}/assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-register bg-dark">
            <div class="text-center">
                <a href="{{ route('site') }}" rel="tooltip" title="Voltar para o site" data-placement="bottom">
                    <img src="{{ asset('site') }}/assets/img/logotype.min.svg"  alt="Logo">
                </a>
            </div>
            <div class="social-line text-center">
              <a href="#" class="btn btn-neutral btn-facebook btn-just-icon">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#" class="btn btn-neutral btn-google btn-just-icon">
                <i class="fa fa-google-plus"></i>
              </a>
              <a href="#" class="btn btn-neutral btn-twitter btn-just-icon">
                <i class="fa fa-twitter"></i>
              </a>
            </div>
            <form class="register-form" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="row">
                    <div class="col-12">
                        <label>E-mail</label>
                        <div class="input-group form-group-no-border @error('email') has-danger @enderror ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="nc-icon nc-email-85"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control @error('email') form-control-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Seu E-mail" >
                        </div>
                        @error('email')
                        <span class="form-control-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label>Senha</label>
                        <div class="input-group form-group-no-border  @error('password') has-danger @enderror ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="nc-icon nc-key-25"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control @error('password') form-control-danger @enderror" name="password" required autocomplete="current-password" placeholder="Sua Senha">
                        </div>
                        @error('password')
                            <span class="form-control-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                        <span class="form-check-sign"></span>
                    </label>
                </div>
              <button type="submit" class="btn btn-danger btn-block btn-round">Entrar</button>
            </form>
            <div class="forgot">
              <a href="{{ route('password.request') }}" class="btn btn-link btn-danger">Esqueceu sua senha?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- 
    <form >
        

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control >

                
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control>

            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" >

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
--}}