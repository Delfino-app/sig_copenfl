import ui from "./ui.js";
import request from "../api/requests.js";
export default{
    async start(){
       await ui.getDefaultElements.call(this);

       await ui.getDefaultActions.call(this);

        this.paisesPrepare();
        //this.provinciasPrepare();
        this.municipiosPrepare();
    },
    async paisesPrepare(){

        const getPaises = await request.paises();

        if(getPaises.paises != undefined && getPaises.paises.length > 0){

            const paises = getPaises.paises;
            let display =`
                <option class="selectDefault" value="0">Selecionar</option>
            `;

            for (let i = 0; i < paises.length; i++) {
                
                display +=`
                    <option value="${paises[i].id}">
                        ${paises[i].nome}
					</option>
                `;
            }

            this.displayPaises.innerHTML = display;
        }
    },
    async provinciasPrepare(){

        const getProvincias = await request.provincias();

        if(getProvincias.provincias != undefined && getProvincias.provincias.length > 0){

            const provincias = getProvincias.provincias;
            let display =`
                <option class="selectDefault" value="0">Selecionar</option>
            `;

            for (let i = 0; i < provincias.length; i++) {
                
                display +=`
                    <option value="${provincias[i].id}">
                        ${provincias[i].nome}
					</option>
                `;
            }
            this.displayProvincias.innerHTML = display;
        }
    },
    async municipiosPrepare(){
        
        const getMunicipios = await request.municipios();

        let display =`
            <option class="selectDefault" value="0">Selecionar</option>
        `;

        if(getMunicipios.municipios != undefined && getMunicipios.municipios.length > 0){

            const municipios = getMunicipios.municipios;

            for (let i = 0; i < municipios.length; i++) {
                
                display +=`
                    <option value="${municipios[i].id}">
                        ${municipios[i].nome}
					</option>
                `;
            }

            this.displayMunicipios.innerHTML = display;
            this.displayMunicipiosEndereco.innerHTML = display;
            this.displayMunicipiosTrabalho.innerHTML = display;
        }

    },
    async selectMunicipios(){

        await ui.getDefaultElements.call(this);

        const getMunicipios = await request.municipiosProvincia(this.provinciaId);
        let display =`
            <option class="selectDefault" value="0">Selecionar</option>
        `;

        if(getMunicipios.municipios != undefined && getMunicipios.municipios.length > 0){

            const municipios = getMunicipios.municipios;

            for (let i = 0; i < municipios.length; i++) {
                
                display +=`
                    <option value="${municipios[i].id}">
                        ${municipios[i].nome}
					</option>
                `;
            }

            this.displayMunicipios.innerHTML = display;
        }
    },
    async dataSubmitPrepare(about){

        //Creatind data structure

        const apply_about = about;

        //Personal Dados
        const personal_datail = {
            nome : $('input[name="nome"]').val(),
            pai : $('input[name="pai"]').val(),
            mae : $('input[name="mae"]').val(),
            nacionalidade_id : $('select[name="nacionalidade_id"]').val(),
            data_nascimento : $('input[name="data_nascimento"]').val(),
            estado_civil : $('select[name="estado_civil"]').val(),
            genero : $('select[name="genero"]').val(),
            naturalidade_id : $('select[name="naturalidade_id"]').val(),
            contact : {
                telefone : $('input[name="endereco_telefone"]').val(),
                email : $('input[name="endereco_email"]').val(),
                caixa_postal : $('input[name="endereco_caixa_postal"]').val(),
                fax : $('input[name="endereco_fax"]').val()
            },
            address : {
                municipio_id : $('select[name="endereco_municipio"]').val(),
                bairro : $('input[name="endereco_bairro"]').val(),
                rua : $('input[name="endereco_rua"]').val(),
                casa : $('input[name="endereco_casa"]').val()
            }
        };

        //Work Info
        const work_info = {
            contact : {
                telefone : $('input[name="trabalho_telefone"]').val(),
                email : $('input[name="trabalho_email"]').val(),
                caixa_postal : $('input[name="trabalho_caixa_postal"]').val(),
                fax : $('input[name="trabalho_fax"]').val()
            },
            address : {
                municipio_id : $('select[name="trabalho_municipio"]').val(),
                bairro : $('input[name="trabalho_bairro"]').val(),
                rua : $('input[name="trabalho_rua"]').val(),
                casa : $('input[name="trabalho_casa"]').val()
            }
        };

        //academic_detail
        const academic_detail = {
            tipo_escola : $('select[name="escola_tipo"]').val(), // pode ser Privada ou Publica
            escola : $('input[name="escola_nome"]').val(), // nome da escola
            nivel : $('select[name="escola_nivel"]').val(), // pode ser Fundamental, Medio ou Superior
            ano_frequencia : $('input[name="escola_ano_frequencia"]').val(), // ano/anos de frequencia escolar
            ano_termino : $('input[name="escola_ano_termino"]').val(), // ano que conclui, caso tenha
            ano_inicio : $('input[name="escola_ano_inicio"]').val(), // ano que inicio a estudar
            estado : $('select[name="escola_estado"]').val() // pode ser Estudando ou Concluido
        };

        //Default Data
        const defaultData = {
            apply_about: apply_about,
            personal_datail : personal_datail,
            work_info : work_info,
            academic_detail : academic_detail
        }

        return defaultData;
    },
    async submitFrmLicenca(e){

        e.preventDefault();

        //Add Preload Gif
        $("#addLicencaGifContainer").removeAttr("hidden");
        $("#submitLicencaGifContainer").hide();

        //Disabled Some Buttons

        const data = await this.dataSubmitPrepare("Licenca");

        console.log(data);
    }
}