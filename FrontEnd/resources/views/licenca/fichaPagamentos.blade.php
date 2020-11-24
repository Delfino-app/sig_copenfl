<div class="row">
    <div class="col-lg-6">
        <div class="doc-carregados-container">
            <h3 class="semi-text-title">Histórico de Pagamentos</h3>
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
    <div class="col-lg-6">
        <div class="doc-em-falta-container">
            <h3 class="semi-text-title">Pagamentos em falta</h3>
            <div class="row p-10">
                <div class="col-lg-12 content-doc-list-container">
                    <div class="content-doc-list content-doc-list-not-add">
                        <p class="doc-list-title">
                            Inscrição 2.000,00 kz
                       </p>
                    </div>
                </div>
                <div class="col-lg-12 content-doc-list-container">
                    <div class="content-doc-list content-doc-list-not-add">
                        <p class="doc-list-title">
                            Cota 4.500,00 Kz (Anual)
                       </p>
                    </div>
                </div>
                <div class="col-lg-12 content-doc-list-container">
                    <div class="content-doc-list content-doc-list-not-add">
                        <p class="doc-list-title">
                            Licença de Aprendizagem 2.500,00 Kz
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
            <a href="#" data-toggle="modal" data-target="#modalAddPagamentos" class="btn btn-destaque">
                Novo <i class="fa fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>
@include('adds.pagamentosModal')