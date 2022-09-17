@extends('templates.template')

@section('content')
    <h1 class="text-center">
        @if (isset($id)) Editar @else Cadastrar @endif</h1>
    <hr>

    <div class="col-8 m-auto">

        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert alert-danger">
                @foreach ($errors->all() as $erro)
                    {{ $erro }}<br>
                @endforeach
            </div>
        @endisset

        @if (isset($id))
            <form name="formEdit" id="formEdit" method="post" action="{{"/cliente/$clientes->id"}}"></form>
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{"/cliente"}}"></form>
        @endif



        <form method="POST" action="{{ url('/cliente/create') }}">
            <div class="form-group">
                @csrf

                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" value="{{$cliente->nome ?? ''}}" required><br>
                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{$cliente->telefone ?? ''}}" required><br>
                <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" value="{{$cliente->email ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value=" @if(isset($id)) Editar @else Cadastrar @endif ">
            </div>
        </form>
</div>
@endsection
