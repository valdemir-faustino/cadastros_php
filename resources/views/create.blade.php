@extends('layouts.main')
@section('content')
    <div class="card-header">
        <div class="card-header hstack gap-2">
            <span class="ms-auto">
                <a href="{{ route('index')}}" class="btn btn-info btn-sm me-1">
                    Listar
                </a>
            </span>
        </div>
        <x-alert />
        <span>
            <h2>Cadastro de funcionarios</h2>
        </span>
        <div>
            <form action="{{ route('store')}}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="name" class="col-sm-2 col-form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="col-sm-2 col-form-label">Cpf</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>
                <div class="col-md-6">
                    <label for="email" class="col-sm-2 col-form-label">E_mail</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-sm me-1">Salvar</button>
                </div>
            </form>
        </div>
@endsection