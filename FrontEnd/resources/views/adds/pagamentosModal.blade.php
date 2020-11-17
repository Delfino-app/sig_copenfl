<div class="modal fade" id="modalAddPagamentos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> <i class="fa fa-plus-circle"></i> Novo Pagamento</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" style="padding:0px">
				<div class="row">
					<div class="col-lg-12">
						<form class="row p-20" action="{{route('pagamento.post')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="pagamento_candidato" value="{{$candidato->id}}" class="form-control" required/>
							<div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Serviço</label>
								<select class="form-control" name="pagamento_servico">
                                    <option value="0">Selecionar</option>
                                    <option value="Serviço 1">Serviço 1</option>
                                    <option value="Serviço 2">Serviço 2</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Tipo de Pagamento</label>
								<select class="form-control" name="pagamento_tipo">
                                    <option value="0">Selecionar</option>
                                    <option value="Cache">Cache</option>
                                    <option value="Transferência">Transferência</option>
                                    <option value="Deposito">Deposito</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Valor</label>
								<input type="number" name="pagamento_valor" placeholder="Valor" class="form-control" required/>
                            </div>
                            <div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Data de Depoisito</label>
								<input type="date" name="pagamento_data" class="form-control" required/>
                            </div>
                            <div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Banco</label>
								<select class="form-control" name="pagamento_banco">
                                    <option value="0">Selecionar</option>
                                    <option value="Banco 1">Banco 1</option>
                                    <option value="Banco 2">Banco 2</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-sm-6">
								<label class="col-form-label">Nº de Refêrencia</label>
								<input type="number" name="pagamento_referencia" placeholder="Nº de referência" class="form-control" required/>
							</div>
							<div class="form-group col-lg-12 col-sm-6">
								<button class="btn btn-primary btn-destaque" type="submit" style="width:100%;padding:10px;font-size:14px">
									Salvar <i class="fa fa-saved"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer" id="modalSuporteFooter">

			</div>
		</div>
	</div>
</div>