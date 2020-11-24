<?php

namespace App\Http\Controllers\Inscricao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Helpers\PathModel;
use Storage;
class DocumentosAcademicosCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_documentos($inscricao_tipo=null, $inscricao_id=null)
    {
        return response()->json([
            'status' => "Ok",
            "message" => "Lista de documentos carregados e de documentos não carregados...",
            "documentos_entregues" => lista_documentos("entregues", $inscricao_tipo, $inscricao_id),
            "documento_nao_entregues" => lista_documentos("faltando", $inscricao_tipo, $inscricao_id),
        ], 200);
    }
    public function documentos_faltando($inscricao_tipo=null, $inscricao_id=null, $return = "json"){

        $documentos = lista_documentos("faltando", $inscricao_tipo, $inscricao_id);
        if($documentos != []){
            return response()->json([
                'status' => "Ok",
                "total" =>count($documentos),
                "message" => "Lista de documentos entregues.",
                "documentos" => $documentos
            ], 200);
        }else{
            return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo de documento encontrado"
            ], 200);
        }
    }
    public function documentos_entregues($inscricao_tipo=null, $inscricao_id=null, $return = "json"){

        $documentos = lista_documentos("entregues", $inscricao_tipo, $inscricao_id);
        if($documentos != []){
            return response()->json([
                'status' => "Ok",
                "total" =>count($documentos),
                "message" => "Lista de documentos entregues.",
                "documentos" => $documentos
            ], 200);
        }else{
            return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo de documento encontrado"
            ], 200);
        }
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
            "inscricao_tipo" => "required",           
            "inscricao_id" => "required",
            "tipo_documento_id" => "required",
            "file" => "required|max:3000",            
            "numero" => "nullable",
            "orgao_emissor" => "nullable",
            "data_emissao" => "nullable",
            "data_expiracao" => "nullable",
            "data_emissao" => "nullable",
        ]);

        if ($request->hasFile("file")){
                $verificado = verifica_nivel_academico($request->inscricao_tipo, $request->inscricao_id);
            $tipo = $verificado[2];
            $path = false;
            $model_type = false;
            $model_id = false;
            

            if($tipo == 'licenca'){
                $inscricao = PathModel::licenca;
                $inscricao = $inscricao::find($request->inscricao_id);
                if(isset($inscricao->id)){                    
                    $model_type = PathModel::licenca;
                    $model_id = $request->inscricao_id;
                    $path =  guarda_tipo_documento(
                        $request->tipo_documento_id,
                        "public/licenca_doc".$inscricao->id, 
                        $request->file("file"),
                        $model_id,
                        $model_type,
                        $verificado[0]??null
                    );
                }                
            }
            else 
                if ( $tipo == 'carteira'){
                    $inscricao = PathModel::carteira;
                    $inscricao = $inscricao::find($request->inscricao_id);
                    if(isset($inscricao->id)){
                        $model_type = PathModel::carteira;
                        $model_id = $request->inscricao_id;
                        $path =  guarda_tipo_documento(
                            $request->tipo_documento_id,
                            "public/carteira_doc".$inscricao->id, 
                            $request->file("file"),
                            $model_id,
                            $model_type,
                            $verificado[0]??null
                        );
                    }   
                } 
            if(isset($path[0]) && $path[0] === "Ok"){
                $documento = PathModel::documento;
                $documento = new $documento;
                $documento->tipo_documento_id = $request->tipo_documento_id;
                $documento->model_type  = $model_type;
                $documento->model_id  = $model_id;
                $documento->ficheiro = $path[1];
                $documento->numero = $request->numero;
                $documento->orgao_emissor = $request->orgao_emissor;
                $documento->data_emissao = $request->data_emissao;
                $documento->data_expiracao = $request->data_expiracao;
                $documento->descricao = $request->descricao;
                if($documento->save()){
                    return response()->json([
                        'status' => "Ok",
                        "message" => "Documento cadastrado com sucesso...",
                        "documento_url" => url("storage/".$path[1]),
                    ], 200);
                }
                return Storage::delete("public/".$path[1]);
            }else 
                if(isset($path[0]) && $path[0] === "Info")
                    return response()->json([
                        'status' => "Info",
                        "message" => $path[1]??null,
                    ], 200);

            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível Carregar o documento..."
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O campo file, nao parece ser um binário..."
        ], 200);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            "documento_id" => "required",
            "file" => "required|max:3000",            
            "numero" => "nullable",
            "orgao_emissor" => "nullable",
            "data_emissao" => "nullable",
            "data_expiracao" => "nullable",
            "data_emissao" => "nullable",
        ]);

        if ($request->hasFile("file")){
            $path = false;
            $documento = PathModel::documento;
            $documento = $documento::find($request->documento_id);
            if(isset($documento->id)){               
                $deleted = Storage::delete("public/".$documento->ficheiro); 
                if($deleted > 0)
                {                   
                    $path =  guarda_tipo_documento(
                        $documento->tipo_documento_id,
                        "public/licenca_doc".$documento->model_id, 
                        $request->file("file"),
                        $documento->model_id,
                        $documento->model_type,
                        verifica_nivel_academico($documento->model_type, $documento->model_id)[0]??null,
                        "update"
                    );                
                    if($path[0] === "Ok"){
                        $documento->ficheiro = $path[1];
                        $documento->numero = $request->numero;
                        $documento->orgao_emissor = $request->orgao_emissor;
                        $documento->data_emissao = $request->data_emissao;
                        $documento->data_expiracao = $request->data_expiracao;
                        $documento->descricao = $request->descricao;
                        if($documento->save()){
                            return response()->json([
                                'status' => "Ok",
                            "message" => "Documento cadastrado com sucesso...",
                            "documento_url" => url("storage/".$path[1]),
                        ], 200);
                            return Storage::delete("public/".$path[1]);                
                        } 
                    }
                }
                return response()->json([
                    'status' => "Info",
                    "message" => "Documento não existe no disco de armazenamento..."
                ], 200);
            }
            return response()->json([
                'status' => "Info",
                "message" => "Não foi possível Carregar o documento..."
            ], 200);
        }
        return response()->json([
            'status' => "Info",
            "message" => "O campo file, nao parece ser um binário..."
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
        //
    }
}
