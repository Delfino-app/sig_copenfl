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
