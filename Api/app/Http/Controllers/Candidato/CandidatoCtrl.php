<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato\candidatos;
use App\Http\Controllers\Candidato\ContactoCtrl;
use App\Http\Controllers\Candidato\EnderecoCtrl;

use App\Models\Inscricao\inscricao_licencas as licenca;
use App\Models\Inscricao\inscricao_carteiras as carteira;
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
        if(isset(candidatos::all()[0])){
            foreach(candidatos::all() as $candidato){
                if(isset($candidato->id)){
                    $home_address_data = $candidato->endereco->where("tipo","=","Residencia")->first();
                    $home_contact_data = $candidato->contacto->where("tipo","=","Residencia")->first();
                    if(isset($home_address_data->tipo) || isset($home_contact_data->tipo))
                        $residencia = [
                            "municipio" => $home_address_data->municipio->nome??null,
                            "bairro" => $home_address_data->bairro??null,
                            "rua" => $home_address_data->rua??null,
                            "casa" => $home_address_data->casa??null,
                            "telefone" => $home_contact_data->telefone??null,
                            "email" => $home_contact_data->email??null,
                            "caixa_postal" => $home_contact_data->caixa_postal??null,
                            "fax" => $home_contact_data->fax??null,
                        ];
                    else $residencia =  null;
        
                    $work_address_data = $candidato->endereco->where("tipo","=","Trabalho")->first();
                    $work_contact_data = $candidato->contacto->where("tipo","=","Trabalho")->first();
                    if(isset($work_address_data->tipo) || isset($work_contact_data->tipo) )
                        $trabalho = [
                            "municipio" => $work_address_data->municipio->nome??null,
                            "bairro" => $work_address_data->bairro??null,
                            "rua" => $work_address_data->rua??null,
                            "casa" => $work_address_data->casa??null,
                            "telefone" => $work_contact_data->telefone??null,
                            "email" => $work_contact_data->email??null,
                            "caixa_postal" => $work_contact_data->caixa_postal??null,
                            "fax" => $work_contact_data->fax??null,
                        ];
                    else $trabalho =  null;
                    if(isset($candidato->naturalidade->nome))
                        $naturalidade = [
                            "municipio" => $candidato->naturalidade->nome??null,
                            "provincia" => $candidato->naturalidade->provincia->nome??null,
                            "pais" => $candidato->naturalidade->provincia->pais->nome??null,
                        ];
                    else $naturalidade = null;
                    $data[] = [
                        "id" => $candidato->id,
                        "nome" => $candidato->nome,
                        "pai" => $candidato->pai,
                        "mae" => $candidato->mae,
                        "genero" => $candidato->genero,
                        "estado_civil" => $candidato->estado_civil,
                        "data_nascimento" => $candidato->data_nascimento,
                        "naturalidade" => $naturalidade,
                        "nacionalidade" => $candidato->nacionalidade->nome??null,
                        "residencia" => $residencia,
                        "trabalho" => $trabalho,
                        "documentos" => [],
                        "dados_academicos" => [],
                        "licenca" => [],
                        "carteira" => [],
                    ];
                }
            }
            return response()->json([
                'status' => "Ok",
                "candidatos" => $data
            ], 200);
        }
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
            "personal_datail.nome" => "required",
            "personal_datail.pai" => "required",
            "personal_datail.mae" => "required",
            "personal_datail.nacionalidade_id" => "required",
            "personal_datail.data_nascimento" => "required",
            "personal_datail.estado_civil" => "required",
            "personal_datail.genero" => "required",
            "personal_datail.naturalidade_id" => "required",
        ]);

        $candidato = new candidatos;
        $personal_datail = (object) $request->personal_datail;
        $candidato->nome = $personal_datail->nome;
        $candidato->pai = $personal_datail->pai;
        $candidato->mae = $personal_datail->mae;
        $candidato->nacionalidade_id = $personal_datail->nacionalidade_id;
        $candidato->data_nascimento = $personal_datail->data_nascimento;
        $candidato->estado_civil = $personal_datail->estado_civil;
        $candidato->naturalidade_id = $personal_datail->naturalidade_id;
        if($candidato->save()){
            // info about work  contact and address
            $work_info = (object) $request->work_info;
            if( isset($work_info) and isset($work_info->contact)){
                $work_info_contact = (object) $work_info->contact;
                $candidato->contacto()->create([
                        "telefone" => $work_info_contact->telefone,
                        "email" => $work_info_contact->email,
                        'caixa_postal' => $work_info_contact->caixa_postal,
                        'fax' => $work_info_contact->fax,
                        'tipo' => "Trabalho", 
                ]);
            }
            if(isset($work_info) and isset($work_info->address)){
                $work_info_adderess =  (object) $work_info->address;
                $candidato->endereco()->create([
                        "municipio_id" => $work_info_adderess->municipio_id,
                        "bairro" => $work_info_adderess->bairro,
                        'rua' => $work_info_adderess->rua,
                        'casa' => $work_info_adderess->casa,
                        'tipo' => "Trabalho", 
                ]);
            }
            // info about personal  contact and address
            if(isset($personal_datail->contact)){
                $personal_datail_contact = (object) $personal_datail->contact;
                $candidato->contacto()->create([
                        "telefone" => $personal_datail_contact->telefone,
                        "email" => $personal_datail_contact->email,
                        'caixa_postal' => $personal_datail_contact->caixa_postal,
                        'fax' => $personal_datail_contact->fax,
                        'tipo' => "Residencia", 
                ]);
            }
            if( isset($personal_datail->address)){
                $personal_datail_address = (object) $personal_datail->address;
                $candidato->endereco()->create([
                        "municipio_id" => $personal_datail_address->municipio_id,
                        "bairro" => $personal_datail_address->bairro,
                        'rua' => $personal_datail_address->rua,
                        'casa' => $personal_datail_address->casa,
                        'tipo' => "Residencia", 
                ]);
            } 
            // info about nurse licence and Wallet
            $sequencia = 0;
            if($request->apply_about === "Carteira"){
                $table_sequence = carteira::get()->last();
                if(isset($table_sequence->sequencia))
                    $sequencia = 1 + $table_sequence->sequencia;
                $candidato->carteira()->create([
                    "numero" => "C".Str::random(5),
                    "estado" => "Inscrito",
                    "sequencia" => $sequencia,
                ]);
            }else if($request->apply_about === "Licenca"){
                $table_sequence = licenca::get()->last();
                if(isset($table_sequence->sequencia))
                    $sequencia = 1 + $table_sequence->sequencia;
                $candidato->licenca()->create([
                    "numero" => "L".Str::random(4),
                    "estado" => "Inscrito",
                    "sequencia" => $sequencia,
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
    public function show( $candidato_id)
    {
        $candidato = candidatos::where("id","=", $candidato_id)->first();
        if(isset($candidato->id)){
            $home_address_data = $candidato->endereco->where("tipo","=","Residencia")->first();
            $home_contact_data = $candidato->contacto->where("tipo","=","Residencia")->first();
            if(isset($home_address_data->tipo) || isset($home_contact_data->tipo))
                $residencia = [
                    "municipio" => $home_address_data->municipio->nome??null,
                    "bairro" => $home_address_data->bairro??null,
                    "rua" => $home_address_data->rua??null,
                    "casa" => $home_address_data->casa??null,
                    "telefone" => $home_contact_data->telefone??null,
                    "email" => $home_contact_data->email??null,
                    "caixa_postal" => $home_contact_data->caixa_postal??null,
                    "fax" => $home_contact_data->fax??null,
                ];
            else $residencia =  null;

            $work_address_data = $candidato->endereco->where("tipo","=","Trabalho")->first();
            $work_contact_data = $candidato->contacto->where("tipo","=","Trabalho")->first();
            if(isset($work_address_data->tipo) || isset($work_contact_data->tipo) )
                $trabalho = [
                    "municipio" => $work_address_data->municipio->nome??null,
                    "bairro" => $work_address_data->bairro??null,
                    "rua" => $work_address_data->rua??null,
                    "casa" => $work_address_data->casa??null,
                    "telefone" => $work_contact_data->telefone??null,
                    "email" => $work_contact_data->email??null,
                    "caixa_postal" => $work_contact_data->caixa_postal??null,
                    "fax" => $work_contact_data->fax??null,
                ];
            else $trabalho =  null;
            if(isset($candidato->naturalidade->nome))
                $naturalidade = [
                    "municipio" => $candidato->naturalidade->nome??null,
                    "provincia" => $candidato->naturalidade->provincia->nome??null,
                    "pais" => $candidato->naturalidade->provincia->pais->nome??null,
                ];
            else $naturalidade = null;
            $data = [
                "id" => $candidato->id,
                "nome" => $candidato->nome,
                "pai" => $candidato->pai,
                "mae" => $candidato->mae,
                "genero" => $candidato->genero,
                "estado_civil" => $candidato->estado_civil,
                "data_nascimento" => $candidato->data_nascimento,
                "naturalidade" => $naturalidade,
                "nacionalidade" => $candidato->nacionalidade->nome??null,
                "residencia" => $residencia,
                "trabalho" => $trabalho,
                "documentos" => [],
                "dados_academicos" => [],
                "licenca" => [],
                "carteira" => [],
            ];
            return response()->json([
                'status' => "Ok",
                "candidato" => $data
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
            "personal_datail.nome" => "required",
            "personal_datail.pai" => "required",
            "personal_datail.mae" => "required",
            "personal_datail.nacionalidade_id" => "required",
            "personal_datail.data_nascimento" => "required",
            "personal_datail.estado_civil" => "required",
            "personal_datail.genero" => "required",
            "personal_datail.naturalidade_id" => "required",
        ]);

        $candidato = candidatos::find($id);
        $personal_datail = (object) $request->personal_datail;
        $candidato->nome = $personal_datail->nome;
        $candidato->pai = $personal_datail->pai;
        $candidato->mae = $personal_datail->mae;
        $candidato->nacionalidade_id = $personal_datail->nacionalidade_id;
        $candidato->data_nascimento = $personal_datail->data_nascimento;
        $candidato->estado_civil = $personal_datail->estado_civil;
        $candidato->naturalidade_id = $personal_datail->naturalidade_id;      
        if($candidato->save()){
            
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
