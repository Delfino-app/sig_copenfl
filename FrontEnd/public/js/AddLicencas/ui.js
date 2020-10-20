export default{

    getDefaultElements(){

        this.displayPaises = document.getElementById("dados_pais");
        //this.displayProvincias = document.getElementById("dados_provincia");
        this.displayMunicipios = document.getElementById("dados_municipio");
        this.displayMunicipiosEndereco = document.getElementById("endereco_municipio");
        this.displayMunicipiosTrabalho = document.getElementById("trabalho_municipio");
        //this.provinciaId = document.querySelector("#dados_provincia").value;

    },
    getDefaultActions(){

        //this.displayProvincias.onchange = () => this.selectMunicipios();
    }
}