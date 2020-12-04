<div class="row">
    <div class="col-lg-12">
        <table class="table table-invoice">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th class="text-right" width="20%">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="text-inverse">Inscrção Licença</span><br>
                    </td>
                    <td class="text-right">2.000,00 kz</td>
                </tr>
                <tr>
                    <td>
                        <span class="text-inverse">Licença de Aprendizagem</span><br>
                    </td>
                    <td class="text-right">2.500,00 kz</td>
                </tr>
                <tr>
                    <td>
                        <span class="text-inverse">Cota Anual</span><br>
                    </td>
                    <td class="text-right">4.500,00 kz</td>
                </tr>
            </tbody>
        </table>
        <div class="bg-gray" style="margin-top:50px">
            <h3 class="p-10 text-white" style="height:50px">
                <span class="float-left">Total</span>  
                <span class="float-right text-white">9.000,00 <small class="text-white">kz</small></span>
            </h3>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-lg-12">
            <div class="w-100">
                <div class="content-doc-list houver-destaque">
                    <p class="doc-list-title">
                        <label title="Clique para adicionar" class="lbl_addDoc text-dark" for="pagamento_talao">
                            Comprovativo de Pagamento
                            <input class="file_docs" type="file" id="pagamento_talao" name="pagamento_talao" hidden required>
                            <span class="float-right icon-hover">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                        </label>
                    </p>
                </div>
            </div>
            <hr>
            <div class="w-100">
                <div class="float-right">
                    <a href="#" class="btn btn-primary text-white" data-toggle="modal" data-target="#modalAddPrimeiroPagamento">
                        Adicionar
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    @include('adds.primeiroPagamentoModal')
                </div>
            </div>
        </div>
    </div>