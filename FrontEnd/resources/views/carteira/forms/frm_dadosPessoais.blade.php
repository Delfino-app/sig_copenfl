<div class="row">
	<!--<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Tipo Estudante</label>
		<select class="form-control" name="tipo_estudante">
			<option class="selectDefault" value="0">Selecionar</option>
			<option value="Ensino Médio">Ensino Médio</option>
			<option value="Universidade">Universidade</option>
		</select>
	</div>-->
	<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Nome Completo</label>
		<input type="text" name="nome" placeholder="Nome Completo" class="form-control" data-parsley-group="step-1" data-parsley-required="true" required/>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Nome Completo(Pai)</label>
		<input type="text" name="pai" placeholder="Nome completo do pai" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Nome Completo(Mãe)</label>
		<input type="text" name="mae" placeholder="Nome completo da mãe" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required/>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Data de Nascimento<span class="text-danger">&nbsp;</span></label>
		<input type="date" name="data_nascimento" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="false" class="form-control" required/>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Nacionalidade</label>
		<select class="form-control" id="dados_pais" data-parsley-group="step-1" data-parsley-required="true" name="nacionalidade_id" required>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Naturalidade</label>
		<select data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="dados_municipio" name="naturalidade_id" required>
			<option class="selectDefault" value="0">Selecionar</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Gênero</label>
		<select class="form-control" data-parsley-group="step-1" data-parsley-required="true" name="genero" required>
			<option class="selectDefault" value="0">Selecionar</option>
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Estado Civil</label>
		<select data-parsley-group="step-1" data-parsley-required="true" class="form-control" name="estado_civil" required>
			<option class="selectDefault" value="0">Selecionar</option>
			<option value="Solteiro(a)">Solteiro(a)</option>
			<option value="Casado(a)">Casado(a)</option>
		</select>
	</div>
	<!--<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">B.I Nº</label>
		<input type="text" name="dados_bi" placeholder="Nº do Bilhete de Identidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
	</div>
	<div class="form-group col-lg-2 col-sm-6" style="padding-right:2px">
		<label class="text-lg-right col-form-label">B.I Data Emissão</label>
		<input type="date" name="bi_emisao" placeholder="Nº do Bilhete de Identidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
	</div>
	<div class="form-group col-lg-2 col-sm-6" style="padding-left:2px">
		<label class="text-lg-right col-form-label">B.I Data Validade</label>
		<input type="date" name="bi_validade" placeholder="Nº do Bilhete de Identidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
	</div>-->
</div>

