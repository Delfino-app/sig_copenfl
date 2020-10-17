<div class="row">
	<div class="form-group col-lg-4 col-sm-6">
		<label class="col-form-label">Email</label>
		<input type="email" name="trabalho_email" placeholder="Email" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Telefone</label>
		<input type="number" name="trabalho_telefone" placeholder="Telefone" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Rua/Largo</label>
		<input type="text" name="trabalho_rua" placeholder="Rua/Largo" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Nº</label>
		<input type="number" name="trabalho_num" placeholder="Rua nº" data-parsley-group="step-3" data-parsley-required="false" class="form-control" />
	</div>
	<div class="form-group col-lg-4 col-sm-6">
		<label class="text-lg-right col-form-label">Província</label>
		<select class="form-control" id="trabalho_provincia" name="trabalho_provincia" onchange="selectMunicipioTrabalho()">
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
		<select class="form-control" id="trabalho_municipio" name="trabalho_municipio">
			<option class="selectDefault" value="0">Selecionar</option>
		</select>
	</div>
</div>
