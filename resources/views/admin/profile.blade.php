@extends('layouts.dashboard.master')
@section('title', 'Meu perfil')
@section('content')
<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> <i class="nc-icon nc-key-25"></i> Alterar senha</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post"> {{-- Form Update Password --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Senha atual<span class="text-danger">*</span></label>
                            <input type="password" class="form-control @error('password_current') is-invalid @enderror" name="password_current" required  placeholder="Sua Senha atual">
                            @error('password_current')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Nova Senha <span class="text-danger">*</span></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Sua nova Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Confirme<span class="text-danger">*</span></label>
                            <input id="password-confirm" placeholder="Confirme sua nova senha" type="password" class="form-control" name="password_confirmation" required >
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-round">Alterar</button>
                </form> {{-- end Form --}}
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title"><i class="nc-icon nc-circle-10"></i> Editar Perfil</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="POST"> {{-- Form Update Profile --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group row ">
                        <div class="col-12 col-sm-12 col-md-4">
                            <label>Primeiro nome <span class="text-danger">*</span></label>
                            <input id="first_name" placeholder="Seu primeiro nome" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <label>Sobrenome <span class="text-danger">*</span></label>
                            <input id="last_name" placeholder="Seu sobrenome" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group row ">
                        <div class="col-md-4">
                        <label>E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Seu E-mail" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col-md-8">
                            <label>Endereço <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" placeholder="Seu Endereço" >
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-4">
                            <label>Cidade <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $user->city }}" required placeholder="Sua cidade">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label>Estado <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-uppercase @error('state') is-invalid @enderror" name="state" value="{{ $user->state }}" required maxlength="2" placeholder="Ex: MG">
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
                            <textarea placeholder="Fale um pouco sobre você" class="form-control textarea @error('about_me') is-invalid @enderror" maxlength="200"  name="about_me">{{ $user->about_me }}</textarea>
                            @error('about_me')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Atualizar perfil</button>
                        </div>
                    </div>
                </form> {{-- end Form --}}
            </div>
        </div>
    </div>

</div>
@endsection