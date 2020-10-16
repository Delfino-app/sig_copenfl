<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadidato\enderecos;
class EnderecoCtrl extends Controller
{
    public function __construct(){
        $this->middleware(["auth"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(enderecos::all()[0]))
            return response()->json([
                'status' => "Ok",
                "enderecos" => enderecos::all()
            ], 200);
        else
            return response()->json([
                    'status' => "Info",
                    "message" => "Nenhum registo encontrado"
            ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $candidato_id)
    {
        $this->validate($request,[
            "municipio" => 'required',
            "bairro" => 'required',
            "rua" => "required",
            "tipo_endereco" => "required",
        ]);
        if($candidato_id)
        {
            $endereco = new enderecos;
            $endereco->candidato_id = $candidato_id;
            $endereco->municipio = $request->municipio;
            $endereco->bairro = $request->bairro;
            $endereco->rua = $request->rua;
            $endereco->casa = $request->casa;
            $endereco->tipo = $request->tipo_endereco;
            if($endereco->save() and $endereco->wasChanged()){
                return response()->json([
                    'status' => "Ok",
                    "message" => "Endereço criado com sucesso"
                ], 200);
            }
            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível criar o endereço"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O Endereço não pode ser criado sem candidato associado"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(enderecos $endereco)
    {
        if(isset($endereco->id)){
            return response()->json([
                'status' => "Ok",
                "enderecos" => $endereco
            ], 200);
        }else{
            return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo encontrado"
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $candidato_id)
    {
        $this->validate($request,[
            "municipio" => 'required',
            "bairro" => 'required',
            "rua" => "required",
            "tipo_endereco" => "required",
        ]);
        if($candidato_id)
        {
            $endereco = enderecos::find($id);
            $endereco->candidato_id = $candidato_id;
            $endereco->municipio = $request->municipio;
            $endereco->bairro = $request->bairro;
            $endereco->rua = $request->rua;
            $endereco->casa = $request->casa;
            $endereco->tipo = $request->tipo_endereco;
            if($endereco->save() and $endereco->wasChanged()){
                return response()->json([
                    'status' => "Ok",
                    "message" => "Endereço actualizado com sucesso"
                ], 200);
            }
            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível actualizar o endereço"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O Endereço não pode ser actualizado sem candidato associado"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = enderecos::find($id);
        if($endereco->delete()){
            return response()->json([
                'status' => "Ok",
                "message" => "Dados de contacto eliminados com sucesso"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "Falha ao eliminar os dados de contacto"
        ], 200);
    }
}
