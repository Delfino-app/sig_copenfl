<div class="row">
    <div class="col-lg-12">
        <div>
            <h3 class="semi-text-title">
                <span id="StepTitle">Dados Pessoais</span>
                <div class="float-right">
                    <a step="Step4" title="Anterior" id="previusVer"  class="btn btn-sm btn-next-previus-ficha btn-previus-ficha disabled" href="#">
                        <!--<i class="fa fa-angle-left"></i>-->
                        ❮
                    </a>
                    <a step="Step1" title="Próximo" id="nextVer" class="btn btn-sm btn-next-previus-ficha btn-next-ficha" href="#">
                        <!--<i class="fa fa-angle-right"></i>-->
                        ❯
                    </a>
                </div>
            </h3>
            <div id="Step1" class="row ficha-preview-dados-container">
                <!--Dados Pessoais-->
				<div class="col-lg-12 ficha-content-col-12">
					@if(!empty($candidato))
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">1. Nome Completo</span>
						<p class="col-lg-10">{{$candidato->nome}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">2. Filho(a) de: </span>
						<p class="col-lg-10">{{$candidato->pai}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">E de:</span>
						<p class="col-lg-10">{{$candidato->mae}}</p>
					</h3>
                    <h3 class="ficha-text-container row">
                        <span class="col-lg-2">3. Data de Nascimento</span>
                        <p class="col-lg-2">{{$candidato->data_nascimento}}</p>
                        <span class="col-lg-2">4. Nacionalidade</span>
                        <p class="col-lg-2">{{$candidato->nacionalidade}}</p>
                        <span class="col-lg-2">5. Naturalidade</span>
                        <p class="col-lg-2">{{$candidato->naturalidade->municipio}}</p>
                        <span class="col-lg-2" style="margin-top:5px">6. Gênero</span>
                        <p class="col-lg-2" style="margin-top:5px">{{$candidato->genero}}</p>
                        <span class="col-lg-2" style="margin-top:5px">7. Estado Civil</span>
                        <p class="col-lg-2" style="margin-top:5px">{{$candidato->estado_civil}}</p>
                    </h3>
					@endif
				</div>
            </div>
            <div id="Step2" hidden class="row ficha-preview-dados-container">
                <!--Endereço e Contacto-->
				@if(!empty($candidato))
				<div class="col-lg-6 ficha-content-col-12">
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">1. Município</span>
						<p class="col-lg-8">{{$candidato->residencia->municipio}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">2. Bairro: </span>
						<p class="col-lg-8">{{$candidato->residencia->bairro}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">3. Rua:</span>
						<p class="col-lg-8">{{$candidato->residencia->rua}}</p>
                    </h3>
                    <h3 class="ficha-text-container row">
						<span class="col-lg-4">4. Casa nº</span>
						<p class="col-lg-8">{{$candidato->residencia->casa}}</p>
					</h3>
                </div>
                <div class="col-lg-6 ficha-content-col-12">
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">5. Telefone</span>
						<p class="col-lg-8">{{$candidato->residencia->telefone}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">6. Email: </span>
						<p class="col-lg-8">{{$candidato->residencia->email}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">7. Caixa Postal:</span>
						<p class="col-lg-8">{{$candidato->residencia->caixa_postal}}</p>
                    </h3>
                    <h3 class="ficha-text-container row">
						<span class="col-lg-4">8. Fax</span>
						<p class="col-lg-8">{{$candidato->residencia->fax}}</p>
					</h3>
				</div>
				@endif
            </div>
            <div id="Step3" hidden class="row ficha-preview-dados-container">
                <!--Endereço e Contacto Trabalho-->
				@if(!empty($candidato))
				<div class="col-lg-6 ficha-content-col-12">
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">1. Município</span>
						<p class="col-lg-8">{{$candidato->trabalho->municipio}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">2. Bairro: </span>
						<p class="col-lg-8">{{$candidato->trabalho->bairro}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">3. Rua:</span>
						<p class="col-lg-8">{{$candidato->trabalho->rua}}</p>
                    </h3>
                    <h3 class="ficha-text-container row">
						<span class="col-lg-4">4. Casa nº</span>
						<p class="col-lg-8">{{$candidato->trabalho->casa}}</p>
					</h3>
                </div>
                <div class="col-lg-6 ficha-content-col-12">
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">5. Telefone</span>
						<p class="col-lg-8">{{$candidato->trabalho->telefone}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">6. Email: </span>
						<p class="col-lg-8">{{$candidato->trabalho->email}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-4">7. Caixa Postal:</span>
						<p class="col-lg-8">{{$candidato->trabalho->caixa_postal}}</p>
                    </h3>
                    <h3 class="ficha-text-container row">
						<span class="col-lg-4">8. Fax</span>
						<p class="col-lg-8">{{$candidato->trabalho->fax}}</p>
					</h3>
				</div>
				@endif
            </div>
            <div id="Step4" hidden class="row ficha-preview-dados-container">
                <!--Dados Escola-->
				<div class="col-lg-12 ficha-content-col-12">
                    <h3 class="ficha-text-container row">
                        <span class="col-lg-2">1. Tipo Escola</span>
                        <p class="col-lg-2"></p>
                        <span class="col-lg-2">2. Nome da Escola</span>
                        <p class="col-lg-6"></p>
                        <span class="col-lg-2">3. Nível</span>
                        <p class="col-lg-2"></p>
                        <span class="col-lg-2" style="margin-top:5px">4. Ano de Frequência</span>
                        <p class="col-lg-2" style="margin-top:5px"></p>
                        <span class="col-lg-2" style="margin-top:5px">5. Ano de Início</span>
                        <p class="col-lg-2" style="margin-top:5px"></p>
                        <span class="col-lg-2" style="margin-top:5px">6. Ano de Termino</span>
                        <p class="col-lg-2" style="margin-top:5px"></p>
                    </h3>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 fotter_ver-container">
        <div class="float-right">
            <a href="#" class="btn btn-destaque">
                Gerar PDF <i class="fa fa-file-pdf-o"></i>
            </a>
        </div>
    </div>
</div>