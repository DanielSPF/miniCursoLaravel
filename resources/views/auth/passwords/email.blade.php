@extends('layouts.site.master')
@section('title', 'Recuperar senha')
@section('content')
<div class="page-header" style="background-image: url('{{ asset('site') }}/assets/img/login.jpg');">
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
            <h3 class="title mx-auto">@yield('title')</h3>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="register-form" method="POST" action="{{ route('password.email') }}">
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
              <button type="submit" class="btn btn-danger btn-block btn-round">Enviar link de recuperação <i class="fa fa-send"></i> </button>
            </form>
            <div class="forgot">
              <a href="{{ route('login') }}" class="btn btn-link btn-danger">Cancelar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                   

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
