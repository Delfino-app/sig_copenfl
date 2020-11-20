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
                            <div class="row" style="padding-left:10px;padding-right:10px;margin-top:10px">
                                <div class="col-lg-12 fotter_ver-container">
                                    <div class="float-right p-0" style="margin-right:-10px">
                                        <a href="#" class="btn btn-destaque">
                                            Anexar <i class="ion-md-attach" style="font-size:14px;padding-left:5px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="doc-em-falta-container">
                            <h3 class="semi-text-title">Pagamentos</h3>
                            <div class="row doc-container">
                               @include('adds.primeiroPagamento')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-10"></div>
            </form>  
        </div>
    </div>
</div>
@endsection
@section('add-js')
<script src="{{asset('js/addDocLicenca.js')}}" type="module"></script>
@endsection
