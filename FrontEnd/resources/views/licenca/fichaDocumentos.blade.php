<div class="row">
    <div class="col-lg-6">
        <div class="doc-carregados-container">
            <h3 class="semi-text-title">Documentos carregados</h3>
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <p class="title-doc-em-falta">
                        <i class="fa fa-file-pdf-o icon-doc-not-add"></i>
                        <br>
                        Nenhum documento foi carregado
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="doc-em-falta-container">
            <h3 class="semi-text-title">Documentos em falta</h3>
            <div class="row doc-container">
                @if(!empty($docs))
                    @foreach($docs as $doc)
                        <div class="col-lg-12 content-doc-list-container">
                            <div class="content-doc-list">
                                <p class="doc-list-title">
                                    <span class="doc-list-number doc-not-add">1</span>
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
        <div class="float-right">
            <a href="{{route('add.documentos',$candidato->id)}}" class="btn btn-destaque">
                Carregar Documentos <i class="fa fa-upload"></i>
            </a>
        </div>
    </div>
</div>