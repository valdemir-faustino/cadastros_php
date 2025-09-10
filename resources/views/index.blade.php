@extends('layouts.main')
@section('content')
    <div class="card-header">
        <div class="card-header hstack gap-2">
            <span class="ms-auto">
                <a href="{{ route('create')}}" class="btn btn-success btn-sm me-1">
                    Cadastrar
                </a>
            </span>
        </div>
        <span>
            <h2>Relação de funcionarios</h2>
        </span>
        <x-alert />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">E-mail</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->cpf }}</td>
                        <td>{{ $card->email }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('show', $card->id) }}" class="btn btn-primary btn-sm">Visualizar</a>

                                <a href="{{ route('edit', $card->id) }}" class="btn btn-warning btn-sm">Editar</a>

                                <form action="{{ route('destroy', $card->id) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja apagar este registro?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection