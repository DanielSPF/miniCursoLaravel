@extends('layouts.site.master')
@section('title',  'Criar uma conta')
@push('css')
    <link rel="stylesheet" href="{{ asset('site') }}/assets/css/custom.css">
@endpush
@section('content')
<div class="page-header" style="background-image: url('{{ asset('site') }}/assets/img/federico-beccari.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ml-auto mr-auto">
          <div class="card card-register bg-dark">
            <div class="text-center">
                <a href="{{ route('site') }}" rel="tooltip" title="Voltar para o site" data-placement="bottom">
                    <img src="{{ asset('site') }}/assets/img/logotype.min.svg"  alt="Logo">
                </a>
            </div>
            <h3 class="title mx-auto">@yield('title')</h3>
            <form class="register-form" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group row ">
                <div class="col-12 col-sm-12 col-md-4">
                    <label>Primeiro nome <span class="text-danger">*</span></label>
                    <input id="first_name" placeholder="Seu primeiro nome" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <label>Sobrenome <span class="text-danger">*</span></label>
                    <input id="last_name" placeholder="Seu sobrenome" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="form-group row ">
               <div class="col-md-6">
                <label>E-mail <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Seu E-mail" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </div>
               <div class="col-md-6">
                <label>Confirme seu E-mail <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email_confirmation') is-invalid @enderror" name="email_confirmation" required  placeholder="Confirme seu E-mail" >
                @error('email_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                    <label>Endereço <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Seu Endereço" >
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label>Cidade <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" required placeholder="Sua cidade">
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label>Estado <span class="text-danger">*</span></label>
                    <input type="text" class="form-control text-uppercase @error('state') is-invalid @enderror" name="state" required maxlength="2" placeholder="Ex: MG">
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                    <label>Sobre você (Opcional)</label>
                    <textarea placeholder="Fale um pouco sobre você" class="form-control textarea @error('about_me') is-invalid @enderror" maxlength="200"  name="about_me"></textarea>
                    @error('about_me')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                    <label>Senha <span class="text-danger">*</span></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Sua Senha">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>Confirme sua Senha <span class="text-danger">*</span></label>
                    <input id="password-confirm" placeholder="Confirme sua senha" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <button type="submit" class="btn btn-danger btn-block btn-round">Entrar</button>
            </form>
            <div class="forgot">
              <a href="{{ route('login') }}" class="btn btn-link btn-danger">Já tem uma conta?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
