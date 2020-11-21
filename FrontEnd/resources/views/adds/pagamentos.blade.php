@extends('layout.template')

@section('titulo','Pagamentos')

@section('conteudo')
	<div id="content" class="content content-form">
        <!-- begin col-10 -->
        <h1 class="page-header" style="margin-top:-30px">Pagamentos</h1>

        <input type="hidden"  id="recividToken" value="{{$token}}">
        <div style="background-color:white;padding:15px">
            <div class="row">
                <div class="col-lg-12">
                    @if(isset($info) && !empty($info))
						<div class="alert alert-success" role="alert" style="padding:5px 10px;font-size: 16px;">
							{{$info}}
						</div>
                    @elseif(isset($notFound) && !empty($notFound))
						<div class="alert alert-danger" role="alert" style="padding:5px 10px;font-size: 16px;">
							{{$notFound}}
						</div>
                    @endif
                </div>  
                <div class="col-lg-12">
                    <div class="col-lg-5">
                        <form action="{{route('pagamento.find')}}" method="POST" name="search_form">
                            {{ csrf_field() }}
                            <div class="form-group" style="display:inline-flex;margin-left:-15px">
                                <input type="text" class="form-control" name="processo_num" placeholder="Nº de Processo..." required style="height:28px !important;"/>
                                <button type="submit" class="btn btn-search btn-sm" style="height:28px !important;margin-left:-30px">
                                    <i class="ion-ios-search" style="font-size:18;"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="doc-carregados-container">
                        <h3 class="semi-text-title">Dados do Candidato</h3>
                        @if(empty($candidato))
                            <div class="row justify-content-center">
                                <div class="col-lg-5 text-center">
                                    <p class="title-doc-em-falta">
                                        <i class="fa fa-file icon-doc-not-add"></i>
                                        <br>
                                        Os dados do candidato aparecerão aqui
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="p-10">
                                <div class="row card-dados-candidatos">
                                    <div class="col-lg-3 p-10 justify-content-center">
                                        <img width="90" src="{{asset('img/default.jpg')}}">
                                    </div>
                                    <div class="col-lg-9 p-10">
                                        <ul class="" style="list-style:none;margin-left:-30px">
                                            <li>
                                                Nome:
                                                <span class="dados_value">
                                                   {{$candidato->nome}}
                                                </span>
                                            </li>
                                            <li>
                                                Data de Nascimento:
                                                <span class="dados_value">
                                                    {{$candidato->data_nascimento}}
                                                </span>
                                            </li>
                                            <li>
                                                Residênçia:
                                                <span class="dados_value">
                                                    {{$candidato->residencia->municipio}}
                                                </span>
                                            </li>
                                            <li>
                                                Telefone:
                                                <span class="dados_value">
                                                    {{$candidato->residencia->telefone}}
                                                </span>
                                            </li>
                                            <li>
                                                Tipo Inscrição:
                                                <span class="dados_value">
                                                    {{isset($candidato->inscricao->licenca->type)?$candidato->inscricao->licenca->type:$candidato->inscricao->carteira->type}}
                                                </span>
                                            </li>
                                            <li>
                                                Estado Inscrição:
                                                <span class="dados_value">
                                                    {{isset($candidato->inscricao->licenca->estado)?$candidato->inscricao->licenca->estado:$candidato->inscricao->carteira->estado}}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doc-em-falta-container pagamentos-history-content">
                        <h3 class="semi-text-title">Histórico de pagamentos</h3>
                        @if(!empty($pagamentos))
                            <div class="row doc-container">
                            @foreach($pagamentos as $pagamento)
                                <div class="col-lg-12 content-doc-list-container">
                                    <div class="content-doc-list">
                                        <p class="doc-list-title">
                                            <a title="Ver recibo de pagamento" href="#" class="btn btn-sm w-100 btn-link-recibo-pagamento">
                                                <span class="float-left">
                                                    {{$pagamento["desc"]}}
                                                </span>
                                                <span class="float-right">
                                                    <i class="fa fa-calendar"></i>
                                                    {{$pagamento["data"]}}
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @else
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center">
                                <p class="title-doc-em-falta">
                                    <i class="fa fa-history icon-doc-not-add"></i>
                                    <br>
                                    O histórico de pagamentos aparecerá aqui
                                </p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 fotter_ver-container">
                    <div class="float-right">
                        @if(empty($candidato))
                            <a href="#" class="btn btn-destaque disabled">
                                Novo <i class="fa fa-plus-circle"></i>
                            </a>
                        @else
                            <a href="#" data-toggle="modal" data-target="#modalAddPagamentos" class="btn btn-destaque">
                                Novo <i class="fa fa-plus-circle"></i>
                            </a>
                            @include('adds.pagamentosModal')
                        @endif
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection
@section('add-js')

@endsection
