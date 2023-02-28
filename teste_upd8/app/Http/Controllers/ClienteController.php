<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;
use App\Models\EstadoModel;
use App\Models\CidadeModel;

class ClienteController extends Controller
{
    private $objCliente;
    private $objEstado;
    private $objCidade;

    public function __construct()
    {
        $this->objCliente=new ClienteModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=$this->objCliente->all();
        $table=$clientes;
        return view('cliente/index', compact('table'));
        //dd($cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->objCliente->create([
            'cpf'=>$request->cpf,
            'nome'=>$request->nome,
            'email'=>$request->email,
            'endereco'=>$request->endereco,
            'sexo'=>$request->sexo,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade,
            'data_nascimento'=>$request->data_nascimento,
        ]);
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $clientes=$this->objCliente->find($id);
        return view('cliente/create',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->objCliente->where(['id'=>$id])->update([
            'cpf'=>$request->cpf,
            'nome'=>$request->nome,
            'email'=>$request->email,
            'endereco'=>$request->endereco,
            'sexo'=>$request->sexo,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade,
            'data_nascimento'=>$request->data_nascimento,
        ]);
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
