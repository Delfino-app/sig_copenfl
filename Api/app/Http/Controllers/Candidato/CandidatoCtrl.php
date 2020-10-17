<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadidato\candidatos;
use App\Http\Controllers\Candidato\ContactoCtrl;
use App\Http\Controllers\Candidato\EnderecoCtrl;
use Illuminate\Support\Str;

class CandidatoCtrl extends Controller
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
        if(isset(candidatos::all()[0]))
            return response()->json([
                'status' => "Ok",
                "candidatos" => candidatos::with('endereco')->with('contacto')->with("licenca")->with("carteira")->get()
            ], 200);
        return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo de candidato encontrado"
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nome" => "required",
            "pai" => "required",
            "mae" => "required",
            "nacionalidae" => "required",
            "data_nascimento" => "required",
            "estado_civil" => "required",
            "genero" => "required",
            "naturalidade" => "required",
        ]);

        $candidato = new candidatos;
        $candidato->nome = $request->nome;
        $candidato->pai = $request->pai;
        $candidato->mae = $request->mae;
        $candidato->nacionalidade = $request->nacionalidade;
        $candidato->data_nascimento = $request->data_nascimento;
        $candidato->estado_civil = $request->estado_civil;
        $candidato->naturalidade = $request->naturalidade;
        if($candidato->save() and $candidato->wasChanged()){
            // info about work  contact and address
            if($request->work_info and $request->work_info->contact){
                $candidato->contacto()->create([
                        "telefone" => $request->work_info->contact->telefone,
                        "email" => $request->work_info->contact->email,
                        'caixa_postal' => $request->work_info->contact->caixa_postal,
                        'fax' => $request->work_info->contact->fax,
                        'tipo' => "Trabalho", 
                ]);
            }
            if($request->work_info and $request->work_info->address){
                $candidato->contacto()->create([
                        "municipio" => $request->work_info->address->municipio,
                        "bairro" => $request->work_info->address->bairro,
                        'rua' => $request->work_info->address->rua,
                        'casa' => $request->work_info->address->casa,
                        'tipo' => "Trabalho", 
                ]);
            }
            // info about personal  contact and address
            if($request->personal_datail and $request->personal_datail->contact){
                $candidato->contacto()->create([
                        "telefone" => $request->personal_datail->contact->telefone,
                        "email" => $request->personal_datail->contact->email,
                        'caixa_postal' => $request->personal_datail->contact->caixa_postal,
                        'fax' => $request->personal_datail->contact->fax,
                        'tipo' => "Residencia", 
                ]);
            }
            if($request->personal_datail and $request->personal_datail->address){
                $candidato->contacto()->create([
                        "municipio" => $request->personal_datail->address->municipio,
                        "bairro" => $request->personal_datail->address->bairro,
                        'rua' => $request->personal_datail->address->rua,
                        'casa' => $request->personal_datail->address->casa,
                        'tipo' => "Residencia", 
                ]);
            } 
            // info about nurse licence and Wallet
            if($request->tipo_inscricao === "Carteira"){
                $candidato->carteira()->create([
                    "numero" => "C".Str::random(10),
                    "estado" => "Inscrito",
                ]);
            }else if($request->tipo_inscricao === "Licenca"){
                $candidato->licenca()->create([
                    "numero" => "L".Str::random(10),
                    "estado" => "Inscrito",
                ]);
            }
            return response()->json([
                'status' => "Ok",
                "message" => "Candidato cadastrado com sucesso"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "Falha ao cadastrar o candidato"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(candidatos $candidatos)
    {
        if(isset($candidatos->id)){
            return response()->json([
                'status' => "Ok",
                "candidatos" => $candidatos
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "nome" => "required",
            "pai" => "required",
            "mae" => "required",
            "nacionalidae" => "required",
            "data_nascimento" => "required",
            "estado_civil" => "required",
            "genero" => "required",
            "naturalidade" => "required",
        ]);
        $candidato = candidatos::find($id);
        $candidato->nome = $request->nome;
        $candidato->pai = $request->pai;
        $candidato->mae = $request->mae;
        $candidato->nacionalidade = $request->nacionalidade;
        $candidato->data_nascimento = $request->data_nascimento;
        $candidato->estado_civil = $request->estado_civil;
        $candidato->naturalidade = $request->naturalidade;
        if($candidato->save() and $candidato->wasChanged()){
            
                return response()->json([
                    'status' => "Ok",
                    "message" => "Dados do candidato actualizados com sucesso"
                ], 200);
            //candidatos::find($candidato->id)->delete();
        }
        return response()->json([
            'status' => "Info",
            "message" => "Falha ao actualizar os dados do candidato"
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
        $candidato = candidatos::find($id);
        if($candidato->delete()){
            return response()->json([
                'status' => "Ok",
                "message" => "Dados do candidato eliminar com sucesso"
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "Falha ao eliminar os dados do candidato"
        ], 200);
    }
}
