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
function guarda_tipo_documento($tipo_documento_id, $directory, $file, $model_id, $model_type){
    $tipo = PathModel::tipo_documento;
    $tipo = $tipo::find($tipo_documento_id);
    if(isset($tipo->id)){
        $docs = PathModel::documentos;
        $docs = $docs::where("model_type","=", $model_type)
                    ->where("model_id","=", $model_id)
                    ->where("tipo_documento_id","=",$tipo->id)->first();                    
       if(!isset($docs->id)){
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
