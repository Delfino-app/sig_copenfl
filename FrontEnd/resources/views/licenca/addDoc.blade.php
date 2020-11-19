@extends('layout.template')

@section('titulo','Anexar Documentos')
@section('conteudo')
<div id="content" class="content" style="margin-top:40px;">
    <div class="row">
        <div class="col-lg-12" style="background-color:white;padding-to:20px">
            <form method="Post" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="doc-em-falta-container">
                            <h3 class="semi-text-title">Documentos</h3>
                            <div class="row doc-container">
                                @if(!empty($docs))
                                    @foreach($docs as $doc)
                                        <div class="col-lg-12 content-doc-list-container">
                                            <div class="content-doc-list houver-destaque">
                                                <p class="doc-list-title">
                                                    <label title="Clique para adicionar" class="lbl_addDoc" for="Declaracao_Frequencia">
                                                        {{$doc->nome}}
                                                        <input class="file_docs" type="file" id="Declaracao_Frequencia" name="Declaracao_Frequencia" hidden required>
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
                            <h3 class="semi-text-title">Pagamentos</h3>
                            <div class="row doc-container">
                                <div class="col-lg-12 content-doc-list-container">
                                    <div class="content-doc-list">
                                        <p class="doc-list-title">
                                            <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_inscricao">
                                                Inscrição <b>2.000,00</b> kz
                                                <input type="file" id="pagamento_inscricao" name="pagamento_inscricao" hidden required>
                                                <span class="float-right icon-hover">
                                                    <i class="fa fa-plus-circle"></i>
                                                </span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 content-doc-list-container">
                                    <div class="content-doc-list">
                                        <p class="doc-list-title">
                                            <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_cota">
                                                Cota <b>4.500,00</b> Kz (Anual)
                                                <input type="file" id="pagamento_cota" name="pagamento_cota" hidden required>
                                                <span class="float-right icon-hover">
                                                    <i class="fa fa-plus-circle"></i>
                                                </span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 content-doc-list-container">
                                    <div class="content-doc-list">
                                        <p class="doc-list-title">
                                            <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_licenca">
                                                Licença de Aprendizagem <b>2.500,00</b> Kz 
                                                <input type="file" id="pagamento_licenca" name="pagamento_licenca" hidden required>
                                                <span class="float-right icon-hover">
                                                    <i class="fa fa-plus-circle"></i>
                                                </span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 fotter_ver-container">
                        <div class="float-right">
                            <button type="submit" class="btn btn-destaque">
                                Anexar <i class="ion-md-attach" style="font-size:14px;padding-left:5px"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>  
        </div>
    </div>
</div>
@endsection
@section('add-js')
<script src="{{asset('js/addDocLicenca.js')}}" type="module"></script>
@endsection
