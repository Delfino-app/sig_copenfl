<?php

namespace App\Http\Controllers\Candidato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato\candidatos;
use App\Http\Controllers\Candidato\ContactoCtrl;
use App\Http\Controllers\Candidato\EnderecoCtrl;

use App\Models\Inscricao\inscricao_licencas as licenca;
use App\Models\Inscricao\inscricao_carteiras as carteira;
use App\Models\Inscricao\dados_academicos;
use Illuminate\Support\Str;

class CandidatoCtrl extends Controller
{
    public function __construct(){
        $this->middleware(["auth"]);
    }
     /**
     * Display a listing of the resource.
     * @param String $tipo  can be: Licenca | Carteira 
     * @param String $estado  can be: Pendente | Inscrito | Anulado | Analisado | Aprovado
     * @return \Illuminate\Http\Response
     * 
     */
    public function listado_pelo_tipo($tipo = null, $estado ='Pendente', $data_inicio = null, $data_fim = null)
    {   
        $tipo = strtolower($tipo);
        if($tipo !== "licenca" && $tipo !== "carteira")
            return response()->json([
                'status' => "Error",
                "message" => "Intem não encontrado"
            ], 404);

        $candidatos = [];        
        if($data_inicio != null && $data_fim != null){
            $candidatos = candidatos::whereHas($tipo, function($query) use ($estado){
                $query->where("estado", $estado);
            })->whereBetween("data_criada",[$data_inicio, $data_fim])->get();
        }else {
            $candidatos = candidatos::whereHas($tipo, function($query) use ($estado){
                $query->where("estado", $estado);
            })->where("data_criada",date("Y-m-d"))->get();            
        }
        if(isset($candidatos[0])){
            foreach($candidatos as $candidato){
                if(isset($candidato->id)){
                    $home_address_data = $candidato->endereco->where("tipo","=","Residencia")->first();
                    $home_contact_data = $candidato->contacto->where("tipo","=","Residencia")->first();
                    $inscricao_data = $candidato->$tipo->first();
                    $inscricao = [];
                    $academic = [];
                    if(isset($inscricao_data)){

                        $academic_data = $inscricao_data->dados_academicos;       
                        if(isset($academic_data[0]))
                        $academic = [
                            "id" => $academic_data[0]->id??null,
                            "tipo_escola" => $academic_data[0]->tipo_escola??null,
                            "escola" => $academic_data[0]->escola??null,
                            "nivel" => $academic_data[0]->nivel??null,
                            "estado" => $academic_data[0]->estado??null,
                            "ano_inicio" => $academic_data[0]->ano_inicio??null,
                            "ano_termino" => $academic_data[0]->ano_termino??null,
                            "ano_frequencia" => $academic_data[0]->ano_frequencia??null,
                        ];
                        else $academic =  null;
                    
                    if(isset($inscricao_data->estado) && $inscricao_data->estado == $estado)
                        $inscricao = [
                            "id" => $inscricao_data->id??null,
                            "type" => $tipo,
                            "estado" => $inscricao_data->estado??null,
                            "numero" => $inscricao_data->numero??null,
                        ];
                        else $inscricao =  null;
                    }
                    
                    if(isset($home_address_data->tipo) || isset($home_contact_data->tipo))
                        $residencia = [
                            "id" => $home_address_data->id??null,
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
                            "id" => $work_address_data->id??null,
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
                        "inscricao" => $inscricao,
                        "residencia" => $residencia,
                        "trabalho" => $trabalho,
                        "documentos" => [                            
                            "documentos_entregues" => lista_documentos("entregues", $tipo, $inscricao_data->id),
                            "documento_nao_entregues" => lista_documentos("faltando", $tipo, $inscricao_data->id),
                        ],
                        "dados_academicos" => $academic,
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

    public function store_carteira(Request $request)
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
            "identificacao" => "required",
            "carteira_tipo" => "required",
            "local_inscricao" => "required",
        ]);

        $candidato = new candidatos;
        $personal_datail = (object) $request->personal_datail;
        $candidato->data_criada = Date("Y-m-d");
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
            $inscricao_id = null;
            $inscricao_type = null;
                $table_sequence = Carteira::get()->last();
                if(isset($table_sequence->sequencia))
                    $sequencia = 1 + $table_sequence->sequencia;
                $inscricao_id = $candidato->carteira()->create([
                    "numero" => "C/".Str::random(4)."/".date("Y"),
                    "data_inscricao" => Date("Y-m-d"),
                    "carteira_tipo" => $request->carteira_tipo,
                    "local_inscricao" => $request->local_inscricao,
                    "estado" => "Pendente",
                    "sequencia" => $sequencia,
                ])->id;
                $inscricao_type = Carteira::class;

            $academic_detail = (object) $request->academic_detail;
            if( isset($academic_detail) and isset($academic_detail->tipo_escola) and $inscricao_id != null){
                $dados_academicos = new dados_academicos;
                $dados_academicos->escola = $academic_detail->escola;
                $dados_academicos->tipo_escola = $academic_detail->tipo_escola;
                $dados_academicos->nivel = $academic_detail->nivel;
                $dados_academicos->ano_frequencia = $academic_detail->ano_frequencia;
                $dados_academicos->estado = "Concluido";
                $dados_academicos->model_type = $inscricao_type;
                $dados_academicos->model_id = $inscricao_id;
                if($dados_academicos->save()){
                    return response()->json([
                        'status' => "Ok",
                        "candidato_id" => $candidato->id,
                        "message" => "Candidato cadastrado com sucesso"
                    ], 200);
                }
            }
        }
        return response()->json([
            'status' => "Info",
            "message" => "Falha ao cadastrar o candidato"
        ], 200);
    }
    public function store_licenca(Request $request)
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
            // "identificacao.file" => "required",
            "identificacao.tipo_documento" => "required",
            "licenca_tipo" => "required",
            "local_inscricao" => "required",
        ]);
        $candidato = new candidatos;
        $personal_datail = (object) $request->personal_datail;
        $candidato->data_criada = Date("Y-m-d");
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
                        "telefone" => $work_info_contact->telefone?? null,
                        "email" => $work_info_contact->email?? null,
                        'caixa_postal' => $work_info_contact->caixa_postal?? null,
                        'fax' => $work_info_contact->fax?? null,
                        'tipo' => "Trabalho", 
                ]);
            }
            if(isset($work_info) and isset($work_info->address)){
                $work_info_adderess =  (object) $work_info->address;
                $candidato->endereco()->create([
                        "municipio_id" => $work_info_adderess->municipio_id?? null,
                        "bairro" => $work_info_adderess->bairro?? null,
                        'rua' => $work_info_adderess->rua?? null,
                        'casa' => $work_info_adderess->casa?? null,
                        'tipo' => "Trabalho", 
                ]);
            }
            // info about personal  contact and address
            if(isset($personal_datail->contact)){
                $personal_datail_contact = (object) $personal_datail->contact;
                $candidato->contacto()->create([
                        "telefone" => $personal_datail_contact->telefone?? null,
                        "email" => $personal_datail_contact->email?? null,
                        'caixa_postal' => $personal_datail_contact->caixa_postal?? null,
                        'fax' => $personal_datail_contact->fax?? null,
                        'tipo' => "Residencia", 
                ]);
            }
            if( isset($personal_datail->address)){
                $personal_datail_address = (object) $personal_datail->address;
                $candidato->endereco()->create([
                        "municipio_id" => $personal_datail_address->municipio_id?? null,
                        "bairro" => $personal_datail_address->bairro?? null,
                        'rua' => $personal_datail_address->rua?? null,
                        'casa' => $personal_datail_address->casa?? null,
                        'tipo' => "Residencia", 
                ]);
            } 
            // info about nurse licence and Wallet
            $sequencia = 0;
            $inscricao_id = null;
            $inscricao_type = null;
                $table_sequence = licenca::get()->last();
                if(isset($table_sequence->sequencia))
                    $sequencia = 1 + $table_sequence->sequencia;
                $inscricao_id = $candidato->licenca()->create([
                    "numero" => "L/".Str::random(4)."/".date("Y"),
                    "data_inscricao" => Date("Y-m-d"),
                    "licenca_tipo" => $request->licenca_tipo?? null,
                    "local_inscricao" => $request->local_inscricao?? null,
                    "estado" => "Pendente",
                    "sequencia" => $sequencia,
                ])->id;
                $inscricao_type = licenca::class;

                $identificacao_data = (object) $request->identificacao;
                // if($identificacao_data)

            $academic_detail = (object) $request->academic_detail;
            if( isset($academic_detail) and isset($academic_detail->tipo_escola) and $inscricao_id != null){
                $dados_academicos = new dados_academicos;
                $dados_academicos->escola = $academic_detail->escola?? null;
                $dados_academicos->tipo_escola = $academic_detail->tipo_escola?? null;
                $dados_academicos->nivel = $academic_detail->nivel?? null;
                $dados_academicos->ano_frequencia = $academic_detail->ano_frequencia?? null;
                $dados_academicos->estado = "Estudando";
                $dados_academicos->model_type = $inscricao_type?? null;
                $dados_academicos->model_id = $inscricao_id?? null;
                if($dados_academicos->save()){
                    return response()->json([
                        'status' => "Ok",
                        "candidato_id" => $candidato->id,
                        "message" => "Candidato cadastrado com sucesso"
                    ], 200);
                }
            }
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
        $candidatos = candidatos::where("id","=", $candidato_id)->get();
        if(isset($candidatos[0])){
            $licenca_data = [];
            $carteira_data = [];

            foreach($candidatos as $candidato){
                if(isset($candidato->id)){
                    $home_address_data = $candidato->endereco->where("tipo","=","Residencia")->first();
                    $home_contact_data = $candidato->contacto->where("tipo","=","Residencia")->first();
                    if($candidato->whereHas("licenca"))
                    {
                        //return $inscricao_data = $candidato->licenca->first();
                        $inscricao_data = $candidato->licenca->first();
                       // $inscricao_data = $candidato->licenca->first();
                        $academic_data = $inscricao_data->dados_academicos;      
                        $document_data =  $inscricao_data->documentos;  
                        $documentation = [];
                        foreach($document_data as $doc){
                            $documentation[] = [
                                "id" => $doc->id,
                                "tipo" => $doc->tipo->nome??null,
                                "numero" => $doc->numero,
                                "orgao_emissor" => $doc->orgao_emissor,
                                "data_emissao" => $doc->data_emissao,
                                "data_expiracao" => $doc->data_expiracao??null,
                                "ficheiro" => $doc->ficheiro??null,
                            ];
                        }      
                        if(isset($academic_data[0]))
                        $academic = [
                            "id" => $academic_data[0]->id??null,
                            "tipo_escola" => $academic_data[0]->tipo_escola??null,
                            "escola" => $academic_data[0]->escola??null,
                            "nivel" => $academic_data[0]->nivel??null,
                            "estado" => $academic_data[0]->estado??null,
                            "ano_inicio" => $academic_data[0]->ano_inicio??null,
                            "ano_termino" => $academic_data[0]->ano_termino??null,
                            "ano_frequencia" => $academic_data[0]->ano_frequencia??null,
                        ];
                        else $academic =  null;
                        $licenca_data = [
                            "id" => $inscricao_data->id??null,
                            "type" => "licenca",
                            "estado" => $inscricao_data->estado??null,
                            "numero" => $inscricao_data->numero??null,
                            "documentation" => $documentation,
                            "academic_data" => $academic,
                        ];
                    }

                    if($candidato->whereHas("carteira"))
                    {
                        $inscricao_data = $candidato->carteira->first();
                        if(isset($inscricao_data)){

                            $academic_data = $inscricao_data->dados_academicos;      
                            $document_data =  $inscricao_data->documentos;  
                            $documentation = [];
                            foreach($document_data as $doc){
                                $documentation[] = [
                                    "id" => $doc->id,
                                "tipo" => $doc->tipo->nome??null,
                                "numero" => $doc->numero,
                                "orgao_emissor" => $doc->orgao_emissor,
                                "data_emissao" => $doc->data_emissao,
                                "data_expiracao" => $doc->data_expiracao??null,
                                "ficheiro" => $doc->ficheiro??null,
                            ];
                        }       
                        if(isset($academic_data[0]))
                        $academic = [
                            "id" => $academic_data[0]->id??null,
                            "tipo_escola" => $academic_data[0]->tipo_escola??null,
                            "escola" => $academic_data[0]->escola??null,
                            "nivel" => $academic_data[0]->nivel??null,
                            "estado" => $academic_data[0]->estado??null,
                            "ano_inicio" => $academic_data[0]->ano_inicio??null,
                            "ano_termino" => $academic_data[0]->ano_termino??null,
                            "ano_frequencia" => $academic_data[0]->ano_frequencia??null,
                        ];
                        else $academic =  null;
                        $carteira_data = [
                            "id" => $inscricao_data->id??null,
                            "type" => "carteira",
                            "estado" => $inscricao_data->estado??null,
                            "numero" => $inscricao_data->numero??null,
                            "documentation" => $documentation,
                            "academic_data" => $academic,
                        ];
                    }
                }

                    if(isset($home_address_data->tipo) || isset($home_contact_data->tipo))
                        $residencia = [
                            "id" => $home_address_data->id??null,
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
                            "id" => $work_address_data->id??null,
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
                        "inscricao" => [
                            "licenca"=> $licenca_data,
                            "carteira"=> $carteira_data,
                        ],
                        "residencia" => $residencia,
                        "trabalho" => $trabalho,
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
