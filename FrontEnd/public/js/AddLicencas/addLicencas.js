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
    }
}