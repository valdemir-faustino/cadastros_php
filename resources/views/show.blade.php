@extends('layouts.main')
@section('content')

  <x-alert />
  <div class="card text-center">
  <div class="card-header">
    <h5 class="card-title">Contato</h5>
    <p> Nome: {{$card->name}}</p>
    <p> Cpf: {{$card->cpf}}</p>
    <p> E-mail: {{$card->email}}</p>
    <a href="{{ route('create')}}" class="btn btn-primary btn-sm me-1">Cadastrar</a>
    <a href="{{ route('index')}}" class="btn btn-info btn-sm me-1">Listar</a>
    <a href="{{ route('edit',$card->id)}}" class="btn btn-warning btn-sm me-1">Editar</a>
    </div>
  </div>
@endsection