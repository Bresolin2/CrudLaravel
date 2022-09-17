@extends('templates.template')

@section('content')
    <h1 class="text-center">Crud em Laravel</h1>
    <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{url("cliente/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table table-bordered">
            <thead class="table-dark">

                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cliente as $clientes)
                    <tr>
                        <th scope="row">{{ $clientes->id }}</th>
                        <td>{{ $clientes->nome }}</td>
                        <td>{{ $clientes->telefone }}</td>
                        <td>{{ $clientes->email }}</td>

                        <td>
                            <a href="{{url("/cliente/$clientes->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>

                            <a href="{{url("/cliente/$clientes->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <a class="js-del" href="{{url("/cliente/$clientes->id")}}">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{$cliente->links()}}
    </div>
@endsection
