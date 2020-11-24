<div class="row">
	<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Tipo Escola<span class="text-danger">*</span></label>
		<select data-parsley-group="step-5" data-parsley-required="true" class="form-control" name="escola_tipo">
			<option value="0">Selecionar</option>
			<option value="Publica">Pública</option>
			<option value="Privada">Privada</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Escola</label>
		<input type="text" name="escola_nome" placeholder="Nome da Escola" data-parsley-group="step-5" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Nível<span class="text-danger">*</span></label>
		<select data-parsley-group="step-5" data-parsley-required="true" class="form-control" name="escola_nivel">
			<option value="0">Selecionar</option>
			<option value="Medio">Médio</option>
			<option value="Licenciatura">Superior</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Ano de Frequência</label>
		<input type="number" name="escola_ano_frequencia" placeholder="Ano de Frequência" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Ano de Início</label>
		<input type="number" name="escola_ano_inicio" placeholder="Ano de Início" data-parsley-group="step-5" data-parsley-required="true" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Ano de Término</label>
		<input type="number" name="escola_ano_termino" placeholder="Ano de Término" data-parsley-group="step-5" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Município</label>
		<select class="form-control" name="escola_municipio" id="escola_municipio">
			<option value="0">Selecionar</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Bairro</label>
		<input type="text" name="escola_bairro" placeholder="Bairro" data-parsley-group="step-5" data-parsley-required="false" class="form-control"/>
	</div>
</div>