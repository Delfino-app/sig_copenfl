export default{

    getDefaultElements(){

        this.displayPaises = document.getElementById("dados_pais");
        //this.displayProvincias = document.getElementById("dados_provincia");
        this.displayMunicipios = document.getElementById("dados_municipio");
        this.displayMunicipiosEndereco = document.getElementById("endereco_municipio");
        this.displayMunicipiosTrabalho = document.getElementById("trabalho_municipio");
        //this.provinciaId = document.querySelector("#dados_provincia").value;
        this.frmPostLicenca = document.getElementById("frmPostLicenca");

    },
    getDefaultActions(){

        //this.displayProvincias.onchange = () => this.selectMunicipios();
        this.frmPostLicenca.onsubmit = (e) => this.submitFrmLicenca(e);
    }
}