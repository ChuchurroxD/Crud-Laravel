<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegistrar()
    {
        $clientes = Client::all();
        return view('cliente.clientes',['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegistrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'ruc' => 'required|numeric|digits:11',
            'telefono'=>'min:10|numeric',
            'email'=>'email'
        ]);
        if ($validator->fails()) {
            return redirect('clientes')
                ->withInput()
                ->withErrors($validator);
        }
        
        $client = new Client;
        $client -> nombres = $request->nombres;
        $client -> apellidos = $request->apellidos;
        $client -> ruc = $request->ruc;
        $client -> direccion = $request->direccion;
        $client -> telefono = $request->telefono;
        $client -> email = $request->email;
        $client -> save();

        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCliente($id)
    {
        Client::findOrFail($id)->delete();
        return redirect('clientes');
    }
}
