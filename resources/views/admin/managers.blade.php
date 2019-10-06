@extends('layouts.dashboard.master')
@section('title', 'Administradores')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title"> Lista dos Administradores</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="button" data-toggle="modal" data-target="#addAdmin" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class=" text-primary">
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th class="text-center">Ações</th>
                    </thead>
                    <tbody>
                {{-- @foreach ($collection as $item) --}}
                        <tr> {{-- Preciso desse id --}}
                            <td>Cont++</td>
                            <td>Daniel Souza Porto Filho</td>
                            <td>danielfilho.web@gmail.com</td>
                            <td>Rua ficticia de algum bairro</td>
                            <td>Montes Claros</td>
                            <td>MG</td>
                            <td class="text-center">
                                {{-- se o usuário não for igual ao auteticado deixa 
                                     exluir e se for desativa o botão --}}
                                     @php
                                         // Só pra teste
                                         $id = 3;
                                         $name = 'Daniel Souza Porto Filho';
                                     @endphp
                                {{-- Passar o id ($item->id) e o nome $item->first_name + $item->last_name da linha --}}
                                <button type="button" data-toggle="modal" onclick="actionDelUser({{ $id }}, '{{ $name }}')" class="btn btn-icon btn-sm btn-round btn-danger"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete Admin -->
<div class="modal fade" id="delAdmin" tabindex="-1" role="dialog" aria-labelledby="delAdminTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title" id="delAdminTitle"> <i class="fa fa-warning text-warning"></i> Excluir Administrador</h5>
        </div>
        <div class="modal-body text-center">
            <i class="fa fa-user-times text-danger fa-4x mb-1" aria-hidden="true"></i> <br>
            Você tem certeza que deseja <strong>excluir</strong> o administrador <br> <strong id="name_del"></strong>?
        </div>
        <div class="modal-footer text-center">
            <form action="#" method="post"> {{-- Form Delete Adm --}}
                @csrf
                @method('DELETE')
                <input type="hidden" value="" name="id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                <button type="submit" class="btn btn-success">Sim</button>
            </form> {{-- end Form --}}
        </div>
        </div>
    </div>
</div>

<!-- Modal Add Admin -->
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="addAdminTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title" id="addAdminTitle"> <i class="fa fa-user-plus text-success"></i> Cadastrar Administrador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="#" method="post"> {{-- Form Add Adm --}}
            @csrf
            <div class="modal-body">
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
                    <label>Confirme o E-mail <span class="text-danger">*</span></label>
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
                            <label>Confirme a Senha <span class="text-danger">*</span></label>
                            <input id="password-confirm" placeholder="Confirme sua senha" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
        </form> {{-- end Form --}}
        </div>
    </div>
</div>

@endsection

@push('js')

<script>

function actionDelUser(id, name){
    
    $('#delAdmin').modal({
        keyboard: false,
        backdrop: 'static',
        show: true
    });

    $('input[name="id"]').val(id);
    $('strong[id="name_del"]').html(name);
}

</script>

@endpush