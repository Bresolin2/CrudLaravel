@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto bg-light">
        Id: {{$cliente->id}} <br>
        Nome: {{$cliente->nome}} <br>
        Telefone: {{$cliente->telefone}} <br>
        Email: {{$cliente->email}} <br>
    </div>
@endsection
