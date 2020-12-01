<div class="row">
    <div class="col-lg-6">
        <div class="doc-em-falta-container">
            <h3 class="semi-text-title">Documentos a adicionar</h3>
            <div class="row doc-container">
                @if(!empty($candidato->inscricao->documentos->documento_nao_entregues))
                    @foreach($candidato->inscricao->documentos->documento_nao_entregues as $doc)
                    <div class="col-lg-12 content-doc-list-container">
                        <div class="content-doc-list content-doc-list-not-add houver-destaque">
                            <p class="doc-list-title">
                                <label title="Clique para adicionar" class="lbl_addDoc" for="{{str_replace(' ','-',$doc->nome)}}">
                                    {{$doc->nome}}
                                    <input class="file_docs" type="file" id="{{str_replace(' ','-',$doc->nome)}}" defaultName="{{$doc->nome}}" tipo_documento_id="{{$doc->tipo_documento_id}}" inscricao_id="{{$candidato->inscricao->id}}" inscricao_tipo="{{$candidato->inscricao->tipo}}" name="file" hidden data-parsley-group="step-1" data-parsley-required="true" required>
                                    <span class="float-right icon-hover">
                                        <i class="fa fa-plus-circle"></i>
                                    </span>
                                </label>
                            </p>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="doc-em-falta-container">
            <h3 class="semi-text-title">Documentos adicionados</h3>
            <div class="row justify-content-center doc-container" id="docsNotAdd">
                <div class="col-lg-5 text-center">
                    <p class="title-doc-em-falta">
                        <i class="fa fa-file-pdf-o icon-doc-not-add"></i>
                        <br>
                        Os documentos adicionados aparecerão aqui
                    </p>
                </div>
            </div>
            <div class="row doc-container" id="displayDocs">

            </div>
        </div>
    </div>
</div>