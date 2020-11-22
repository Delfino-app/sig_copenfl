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
    public function index_documentos($tipo)
    {
        $doc = PathModel::tipo_documento;
        $doc = $doc::where("para",$tipo)->get();
        if(isset($doc[0]))
            return response()->json([
                'status' => "Ok",
                "documentos" => $doc,
            ], 200);

        return response()->json([
            'status' => "Info",
            "message" => "Nenhum registo de documento encontrado"
        ], 200);
    }
    public function documentos_faltando($inscricao_tipo=null, $inscricao_id=null){
        $nivel = false;
        $tipo = false;

        if($inscricao_tipo == "licenca")
        {
            $tipo = PathModel::licenca;
            $inscricao = $tipo::find($inscricao_id);
            if(@$inscricao->licenca_tipo == "Medio")
                $nivel = "Medio_Estudando";
            else
                if(@$inscricao->licenca_tipo == "Licenciatura")
                    $nivel = "Licenciatura_Estudando";
        }
        else
            if($inscricao_tipo == "carteira")
            {
                $tipo = PathModel::carteira;
                $inscricao = $tipo::find($inscricao_id);
                if(@$inscricao->carteira_tipo == "Medio")
                    $nivel = "Medio";
                else
                    if(@$inscricao->carteira_tipo == "Licenciatura")
                        $nivel = "Licenciatura";
                    else 
                        if(@$inscricao->carteira_tipo == "Fundamental")
                            $nivel = "Fundamental";
            }   
        if($tipo != false && $nivel != false)
        {
            $tipo_documento = PathModel::tipo_documento;
            $tipo_documento = $tipo_documento::where("para","=",$nivel)->whereDoesntHave("documentos", function($query) use ($inscricao_id, $tipo){
                $query->where("model_type","=", $tipo)->where("model_id","=", $inscricao_id);
            })->get();
            return response()->json([
                'status' => "Ok",
                "total" =>count($tipo_documento),
                "message" => "Lista de documentos não entregues.",
                "documentos" =>  $tipo_documento
            ], 200);
        }else{
            return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo de documento encontrado"
            ], 200);
        }
    }
    public function documentos_entregues($inscricao_tipo=null, $inscricao_id=null){
        $nivel = false;
        $tipo = false;

        if($inscricao_tipo == "licenca")
        {
            $tipo = PathModel::licenca;
            $inscricao = $tipo::find($inscricao_id);
            if(@$inscricao->licenca_tipo == "Medio")
                $nivel = "Medio_Estudando";
            else
                if(@$inscricao->licenca_tipo == "Licenciatura")
                    $nivel = "Licenciatura_Estudando";
        }
        else
            if($inscricao_tipo == "carteira")
            {
                $tipo = PathModel::carteira;
                $inscricao = $tipo::find($inscricao_id);
                if(@$inscricao->carteira_tipo == "Medio")
                    $nivel = "Medio";
                else
                    if(@$inscricao->carteira_tipo == "Licenciatura")
                        $nivel = "Licenciatura";
                    else 
                        if(@$inscricao->carteira_tipo == "Fundamental")
                            $nivel = "Fundamental";
            }   
        if($tipo != false && $nivel != false)
        {
            $tipo_documento = PathModel::tipo_documento;
            $tipo_documento = $tipo_documento::where("para","=",$nivel)->whereHas("documentos", function($query) use ($inscricao_id, $tipo){
                $query->where("model_type","=", $tipo)->where("model_id","=", $inscricao_id);
            })->get();
            $cont = 0;
            $documento = [];
            foreach ($tipo_documento as $tipo) {
                $documento[$cont]["id"] = $tipo->id;
                $documento[$cont]["nome"] = $tipo->nome;
                $documento[$cont]["url"] = url("storage/".$tipo->documentos[0]->ficheiro);
                $cont++;
            }
            return response()->json([
                'status' => "Ok",
                "total" =>count($documento),
                "message" => "Lista de documentos entregues.",
                "documentos" => $documento
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
            $tipo = strtolower($request->inscricao_tipo);
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
                        $model_type
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
                            $model_type
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
    public function destroy($id)
    {
        //
    }
}
