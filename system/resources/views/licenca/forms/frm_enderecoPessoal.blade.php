<div class="row">
	<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Rua</label>
		<input type="text" name="endereco_rua" placeholder="Rua" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Prédio</label>
		<input type="text" name="endereco_predio" placeholder="Prédio" data-parsley-group="step-2" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Aptº/Casa nº</label>
		<input type="text" name="endereco_casa" placeholder="Aptº/Casa nº" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Bairro</label>
		<input type="text" name="endereco_bairro" placeholder="Bairro" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Província</label>
		<select class="form-control" id="endereco_provincia" name="endereco_provincia" onchange="selectMunicipioEndereco()">
			<option class="selectDefault" value="0">Selecionar</option>
			@if(!empty($provincias))
				@foreach($provincias as $provincia)
					<option value="{{$provincia->id}}">
						{{$provincia->nome}}
					</option>
				@endforeach
			@endif
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Município</label>
		<select class="form-control" id="endereco_municipio" name="endereco_municipio">
			<option class="selectDefault" value="0">Selecionar</option>
		</select>
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Email</label>
		<input type="email" name="endereco_email" placeholder="Email" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Telefone 1</label>
		<input type="number" name="endereco_telefone_1" placeholder="Telefone 1" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Telefone 2</label>
		<input type="number" name="endereco_telefone_2" placeholder="Telefone 2" data-parsley-group="step-2" data-parsley-required="false" class="form-control" />
	</div>
</div>
