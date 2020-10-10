@section('add-js')
<script type="text/javascript">

	async function get(url){

	    const response = await fetch(url);
	    const resData = await response.json();
	    return resData;
	}

	async function selectMunicipio(){

		const id = document.querySelector('#dados_provincia').value;

		const displayMunicipios = document.getElementById('dados_municipio');

		const url = `../api/municipios/${id}`;

		const all = await get(url);

		if (all.length > 0) {

			displayMunicipios.innerHTML = `<option class="selectDefault" value="0">Selecionar</option>`;

			for (var i = 0; i < all.length; i++) {
				
				displayMunicipios.innerHTML += `

					<option value="${all[i].id}">${all[i].nome}</option>
				`;
			}
		}
		else{

			displayMunicipios.innerHTML = `

				<option class="selectDefault" value="0">Selecionar</option>
			`;
		}
	}

	async function selectMunicipioEndereco(){

		const id = document.querySelector('#endereco_provincia').value;

		const displayMunicipios = document.getElementById('endereco_municipio');

		const url = `../api/municipios/${id}`;

		const all = await get(url);

		console.log(all);

		if (all.length > 0) {

			displayMunicipios.innerHTML = `<option class="selectDefault" value="0">Selecionar</option>`;

			for (var i = 0; i < all.length; i++) {
				
				displayMunicipios.innerHTML += `

					<option value="${all[i].id}">${all[i].nome}</option>
				`;
			}
		}
		else{

			displayMunicipios.innerHTML = `

				<option class="selectDefault" value="0">Selecionar</option>
			`;
		}
	}

	async function selectMunicipioTrabalho(){

		const id = document.querySelector('#trabalho_provincia').value;

		const displayMunicipios = document.getElementById('trabalho_municipio');

		const url = `../api/municipios/${id}`;

		const all = await get(url);

		if (all.length > 0) {

			displayMunicipios.innerHTML = `<option class="selectDefault" value="0">Selecionar</option>`;

			for (var i = 0; i < all.length; i++) {
				
				displayMunicipios.innerHTML += `

					<option value="${all[i].id}">${all[i].nome}</option>
				`;
			}
		}
		else{

			displayMunicipios.innerHTML = `

				<option class="selectDefault" value="0">Selecionar</option>
			`;
		}
	}
</script>
@endsection