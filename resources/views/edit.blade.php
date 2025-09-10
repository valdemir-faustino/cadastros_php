{{-- resources/views/edit.blade.php --}}

@extends('layouts.main')

@section('content')
    <div class="card-header">
        <div class="card-header hstack gap-2">
            <span class="ms-auto">
                <a href="{{ route('index') }}" class="btn btn-info btn-sm me-1">
                    Listar
                </a>
            </span>
        </div>

        <x-alert />

        <h2>Editar Funcionário</h2>

        <form action="{{ route('update', $card->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nome:</label>
                <input type="text" name="name" class="form-control" value="{{ $card->name }}" required>
            </div>

            <div class="mb-3">
                <label>CPF:</label>
                <input type="text" name="cpf" class="form-control" value="{{ $card->cpf }}" required>
            </div>

            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $card->email }}" required>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
