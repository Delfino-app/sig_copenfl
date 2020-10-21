@extends('layout.template')

@section('titulo','Anexar Documentos')
@section('conteudo')
<div id="content" class="content" style="margin-top:40px;">
		<div class="row">
			<div class="col-lg-12" style="background-color:white;padding-to:20px">
                <form method="Post" style="margin-top:20px">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="doc-em-falta-container">
                                <h3 class="semi-text-title">Documentos</h3>
                                <div class="row doc-container">
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="Declaracao_Frequencia">
                                                    <span class="doc-list-number doc-not-add">1</span>
                                                    Declração de ano de frequência
                                                    <input type="file" id="Declaracao_Frequencia" name="Declaracao_Frequencia" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="b_i">
                                                    <span class="doc-list-number doc-not-add">2</span>
                                                    Cópia do Bilhete de Identidade
                                                    <input type="file" id="b_i" name="b_i" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title"> 
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="3_fotos">
                                                    <span class="doc-list-number doc-not-add">3</span>
                                                    3 Fotográfias tipo passe
                                                    <input type="file" id="3_fotos" name="3_fotos" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="copia_certificado">
                                                    <span class="doc-list-number doc-not-add">4</span>
                                                    Cópia autênticada do certificado da 12ª classe
                                                    <input type="file" id="copia_certificado" name="copia_certificado" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="copia_cartao_contribuente">
                                                    <span class="doc-list-number doc-not-add">5</span>
                                                    Cópia do nº de cartão de contribuente
                                                    <input type="file" id="copia_cartao_contribuente" name="copia_cartao_contribuente" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="doc-em-falta-container">
                                <h3 class="semi-text-title">Pagamentos</h3>
                                <div class="row doc-container">
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_inscricao">
                                                    <span class="doc-list-number doc-not-add">1</span>
                                                    Inscrição <b>2.000,00</b> kz
                                                    <input type="file" id="pagamento_inscricao" name="pagamento_inscricao" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_cota">
                                                    <span class="doc-list-number doc-not-add">2</span>
                                                    Cota <b>4.500,00</b> Kz (Anual)
                                                    <input type="file" id="pagamento_cota" name="pagamento_cota" hidden required>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 content-doc-list-container">
                                        <div class="content-doc-list">
                                            <p class="doc-list-title">
                                                <label title="Clique para adicionar" class="lbl_addDoc" for="pagamento_licenca">
                                                    <span class="doc-list-number doc-not-add">3</span>
                                                    Licença de Aprendizagem <b>2.500,00</b> Kz 
                                                    <input type="file" id="pagamento_licenca" name="pagamento_licenca" hidden required>
                                                </label>
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
                                <button type="submit" class="btn btn-destaque">
                                    Anexar <i class="ion-md-attach" style="font-size:14px;padding-left:5px"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>  
			</div>
		</div>
	</div>
@endsection
@section('add-js')
<!--<script src="{{asset('js/AddLicencas/index.js')}}" type="module"></script>-->
@endsection
