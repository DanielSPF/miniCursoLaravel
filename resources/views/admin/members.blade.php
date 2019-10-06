@extends('layouts.dashboard.master')
@section('title', 'Membros')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Lista dos Membros</h4>
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
                        </thead>
                        <tbody>
                    {{-- @foreach ($collection as $item) --}}
                           <tr>
                                <td>Cont++</td>
                                <td>Daniel Souza Porto Filho</td>
                                <td>danielfilho.web@gmail.com</td>
                                <td>Rua ficticia de algum bairro</td>
                                <td>Montes Claros</td>
                                <td>MG</td>
                            </tr>
                    {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection