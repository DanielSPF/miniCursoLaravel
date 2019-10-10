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
                        @foreach ($users as $user)
                           <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->state }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection