<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadidato\contactos;
class ContactoCtrl extends Controller
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
        //
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
            "Telefone" => 'required',
            "email" => 'required',
            "tipo_contacto" => "required"
        ]);
        if($candidato_id)
        {
            $contacto = new contactos;
            $contacto->candidato_id = $candidato_id;
            $contacto->telefone = $request->telefone;
            $contacto->email = $request->email;
            $contacto->tipo = $request->tipo_contacto;
            if($contacto->save() and $contacto->wasChanged()){
                return response()->json([
                    'status' => "Info",
                    "message" => "Contacto criado com sucesso"
                ], 200);
            }
            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível criar O contacto"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O contacto não pode ser criado sem candidato associado"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(contactos $contacto)
    {
        if(isset($contacto->id)){
            return response()->json([
                'status' => "Ok",
                "contactos" => $contacto
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
            "Telefone" => 'required',
            "email" => 'required',
            "tipo_contacto" => "required"
        ]);
        if($candidato_id)
        {
            $contacto = contactos::find($id);
            $contacto->candidato_id = $candidato_id;
            $contacto->telefone = $request->telefone;
            $contacto->email = $request->email;
            $contacto->tipo = $request->tipo_contacto;
            if($contacto->save() and $contacto->wasChanged()){
                return response()->json([
                    'status' => "Info",
                    "message" => "Contacto actualizado com sucesso"
                ], 200);
            }
            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível actualizar o contacto"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O contacto não pode ser actualizado sem candidato associado"
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
        $contacto = contactos::find($id);
        if($contacto->delete()){
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
