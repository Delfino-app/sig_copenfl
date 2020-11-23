<?php 
use  App\Helpers\PathModel;

function limpar_texto($conteudo) { 
    $conteudo = preg_replace('/[áàãâä]/ui', 'a', $conteudo);
    $conteudo = preg_replace('/[éèêë]/ui', 'e', $conteudo);
    $conteudo = preg_replace('/[íìîï]/ui', 'i', $conteudo);
    $conteudo = preg_replace('/[óòõôö]/ui', 'o', $conteudo);
    $conteudo = preg_replace('/[úùûü]/ui', 'u', $conteudo);
    $conteudo = preg_replace('/[ç]/ui', 'c', $conteudo);
    $conteudo = preg_replace('/[^a-z0-9]/i', '_', $conteudo);  
    $conteudo = strtolower($conteudo);
    return $conteudo;
}
/**
* guarda/actualiza documento pelo tipo
*@param App\Models\Inscricao\tipo_documentos $tipo_documento_id 
*@param string $directory : new | update
*@param file $file : new | update
*@param int $model_id : App\Models\Inscricao\inscricao_licencas | App\Models\Inscricao\inscricao_carteiras
*@param string $model_type : App\Models\Inscricao\inscricao_licencas | App\Models\Inscricao\inscricao_carteiras
*@param string $action : new | update
*@return array $path
 */
function guarda_tipo_documento($tipo_documento_id, $directory, $file, $model_id, $model_type, $nivel=null, $action = "new"){
    $tipo = PathModel::tipo_documento;
    $tipo = $tipo::find($tipo_documento_id);
    if(isset($tipo->id) && $tipo->para === $nivel){
        $docs = PathModel::documentos;
        $docs = $docs::where("model_type","=", $model_type)
                    ->where("model_id","=", $model_id)
                    ->where("tipo_documento_id","=",$tipo->id)->first();                    
       if(!isset($docs->id) || $action === 'update'){
            $filename = limpar_texto($tipo->nome);
            $extension = strtolower($file->getclientOriginalExtension());
            $path = $file->storeAs(
                $directory, 
                $filename.'_'.time().'.'.$extension          
            );
            return ["Ok", str_replace("public/","",$path)];
       }else 
        if(isset($docs->id)){
            $ficheiro = str_replace(" ", "", $docs->ficheiro);
            if($ficheiro === null || $ficheiro === ""){
                $docs->delete();
                $filename = limpar_texto($tipo->nome);
                $extension = strtolower($file->getclientOriginalExtension());
                $path = $file->storeAs(
                    $directory, 
                    $filename.'_'.time().'.'.$extension          
                );
                return ["Ok", str_replace("public/","",$path)];
            }
        }
       return ["Info", "Documento já existe..."];
    }
    return ["Error"];
}
function guarda_qualquer_ficheiro($directory, $file){   
    $filename = limpar_texto($tipo->nome);
    $extension = strtolower($file->getclientOriginalExtension());
    $path = $file->storeAs(
        $directory, 
        $filename.'_'.time().'.'.$extension          
    );
    return str_replace("public/","",$path);
}
function verifica_nivel_academico($inscricao_tipo, $inscricao_id){  
    $nivel = false;
    $tipo = false;
    $tipo1 = false;
    if($inscricao_tipo == "licenca" || $inscricao_tipo == PathModel::licenca)
        {
            $tipo = PathModel::licenca;
            $tipo1 = "licenca";
            $inscricao = $tipo::find($inscricao_id);
            if(@$inscricao->licenca_tipo == "Medio")
                $nivel = "Medio_Estudando";
            else
                if(@$inscricao->licenca_tipo == "Licenciatura")
                    $nivel = "Licenciatura_Estudando";
        }
        else
            if($inscricao_tipo == "carteira" || $inscricao_tipo == PathModel::carteira)
            {
                $tipo = PathModel::carteira;
                $tipo1 = "carteira";
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
    return [$nivel, $tipo, $tipo1]; 
}

/**
* Documentos do candidato
*@param string $doc_state : entregues | faltando  
*@param string $inscricao_tipo : App\Models\Inscricao\inscricao_licencas | App\Models\Inscricao\inscricao_carteiras
*@param int $inscricao_id : App\Models\Inscricao\inscricao_licencas | App\Models\Inscricao\inscricao_carteiras
*@param string $return : json | list
*@return array $docs
 */
function lista_documentos($doc_state = "entregues", $inscricao_tipo=null, $inscricao_id=null){
    $verificado = verifica_nivel_academico($inscricao_tipo, $inscricao_id);
    $nivel = $verificado[0]??false;
    $tipo = $verificado[1]??false;
    $documento_entregues = [];
    $documento_faltando = [];
    if($tipo != false && $nivel != false)
    {
        if($doc_state === "entregues" ){
            $tipo_documento = PathModel::tipo_documento;
            $tipo_documento = $tipo_documento::where("para","=",$nivel)->whereHas("documentos", function($query) use ($inscricao_id, $tipo){
                $query->where("model_type","=", $tipo)->where("model_id","=", $inscricao_id);
            })->get();
            $cont = 0;
            foreach ($tipo_documento as $tipo) {
                $documento_entregues[$cont]["tipo_documento_id"] = $tipo->id;
                $documento_entregues[$cont]["documento_id"] = $tipo->documentos[0]->id;
                $documento_entregues[$cont]["nome"] = $tipo->nome;
                $documento_entregues[$cont]["numero"] = $tipo->documentos[0]->numero;
                $documento_entregues[$cont]["orgao_emissor"] = $tipo->documentos[0]->orgao_emissor;
                $documento_entregues[$cont]["data_emissao"] = $tipo->documentos[0]->data_emissao;
                $documento_entregues[$cont]["data_expiracao"] = $tipo->documentos[0]->data_expiracao;
                $documento_entregues[$cont]["url"] = url("storage/".$tipo->documentos[0]->ficheiro);
                $cont++;
            }
        }
        if($doc_state === "faltando"){
            $tipo_documento = PathModel::tipo_documento;
            $tipo_documento = $tipo_documento::where("para","=",$nivel)->whereDoesntHave("documentos", function($query) use ($inscricao_id, $tipo){
                $query->where("model_type","=", $tipo)->where("model_id","=", $inscricao_id);
            })->get();
            $cont = 0;
            foreach ($tipo_documento as $tipo) {
                $documento_faltando[$cont]["tipo_documento_id"] = $tipo->id;
                $documento_faltando[$cont]["nome"] = $tipo->nome;
                $cont++;
            }
        }
        if($doc_state === "entregues")
            return $documento_entregues;
        if($doc_state === "faltando")
            return $documento_faltando;            
    }else{
        return [];
    }
}
