<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Models\ModelCliente;

class ClientController extends Controller
{

    private $cliente;

    public function __construct()
    {
        $this->cliente=new ModelCliente();
    }


    public function index()
    {
        $cliente=$this->cliente->all();
        return view('index', compact('cliente'));
    }

    
    public function create()
    {
        $cliente=$this->cliente->all();
        return view('create', compact('cliente'));
    }

    
    public function store(ClientRequest $request)
    {
        $cad=$this->cliente->create([
            'id'=>$request->id,
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email
        ]);
        
        if ($cad) {
            return redirect('cliente');
        }
    }

    
    public function show($id)
    {
        $cliente=$this->cliente->all()->find($id);
        return view('show', compact('cliente'));
    }

    
    public function edit($id)
    {
        $cliente=$this->cliente->find($id);
        return view('create', compact('cliente'));
    }

    
    public function update(ClientRequest $request, $id)
    {
        $this->cliente->where(['id'=>$id])->update([
            'id'=>$request->id,
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email
        ]);
        return redirect('index');
    }

    public function destroy($id)
    {
        $del=$this->objBook->destroy($id);
        return($del)?"sim":"não";
    }
}
