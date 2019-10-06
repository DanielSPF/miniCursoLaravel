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
            <form action="{{ route('teste') }}" method="post"> {{-- Form Delete Adm --}}
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title" id="addAdminTitle"> <i class="fa fa-user-plus text-success"></i> Cadastrar Administrador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <form action="#" method="post"> {{-- Form Delete Adm --}}
                @csrf
                <input type="hidden" value="" name="id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form> {{-- end Form --}}
        </div>
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