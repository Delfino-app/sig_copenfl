<div class="row" style="padding-bottom:40px">
    <div class="col-lg-6">
        <div class="doc-carregados-container">
            <h3 class="semi-text-title">Documentos carregados</h3>
            @if(empty($candidato->inscricao->documentos->documentos_entregues))
                <div class="row doc-container justify-content-center">
                    <div class="col-lg-5 text-center">
                        <p class="title-doc-em-falta">
                            <i class="fa fa-file-pdf-o icon-doc-not-add"></i>
                            <br>
                            Nenhum documento foi carregado
                        </p>
                    </div>
                </div>
            @else
            <div class="row doc-container">
                @foreach($candidato->inscricao->documentos->documentos_entregues as $doc)
                    <div class="col-lg-12 content-doc-list-container">
                        <div class="content-doc-list">
                            <p class="doc-list-title">
                                {{$doc->nome}}
                                <span class="float-right icon-hover">
                                    <a target="_blank" href="{{$doc->url}}" style="color:#2fab8e;">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div class="col-lg-6">
        <div class="doc-em-falta-container">
            <h3 class="semi-text-title">Documentos em falta</h3>
            <div class="row doc-container">
                @if(!empty($candidato->inscricao->documentos->documento_nao_entregues))
                    @foreach($candidato->inscricao->documentos->documento_nao_entregues as $doc)
                        <div class="col-lg-12 content-doc-list-container">
                            <div class="content-doc-list content-doc-list-not-add">
                                <p class="doc-list-title">
                                    {{$doc->nome}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 fotter_ver-container">
        @if(!empty($candidato->inscricao->documentos->documento_nao_entregues))
        <div class="float-right">
            <a href="{{route('add.documentos',$candidato->id)}}" class="btn btn-destaque">
                Carregar Documentos <i class="fa fa-upload"></i>
            </a>
        </div>
        @endif
    </div>
</div>
