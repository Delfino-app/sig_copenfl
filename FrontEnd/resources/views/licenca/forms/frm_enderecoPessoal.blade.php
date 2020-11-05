<div class="row">
	<div class="col-lg-6" style="padding-rigth:15px">
		<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
			Endereço
		</legend>
		<div class="content_address row">
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Município</label>
				<select data-parsley-group="step-3" data-parsley-required="true" class="form-control" id="endereco_municipio" name="endereco_municipio">
					<option class="selectDefault" value="0" required>Selecionar</option>
				</select>
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Bairro</label>
				<input type="text" name="endereco_bairro" placeholder="Bairro" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="col-form-label">Rua</label>
				<input type="text" name="endereco_rua" placeholder="Rua" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Casa nº</label>
				<input type="number" name="endereco_casa" placeholder="Casa nº" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
		</div>
	</div>
	<div class="col-lg-6" style="padding-left:15px">
		<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
			Contactos
		</legend>
		<div class="content_address row">
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Telefone</label>
				<input type="number" name="endereco_telefone" placeholder="Telefone" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Email</label>
				<input type="email" name="endereco_email" placeholder="Email" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Caixa Postal</label>
				<input type="text" name="endereco_caixa_postal" placeholder="Caixa Postal" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>
			<div class="form-group col-lg-6 col-sm-12">
				<label class="text-lg-right col-form-label">Fax</label>
				<input type="text" name="endereco_fax" placeholder="Fax" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
			</div>		
		</div>
	</div>
</div>
