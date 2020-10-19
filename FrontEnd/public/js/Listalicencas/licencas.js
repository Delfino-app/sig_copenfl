
import requests from "../api/requests.js"

export default{

    async start(){

        const token = document.querySelector("#recividToken").value;

        const displayNot = document.querySelector(".panel-body");

        const listaLicencas = await requests.listaLicencas(token);

        displayNot.innerHTML = `
            <div class="text-center">
                <p style="font-size:15px;padding:30px">
                    ${listaLicencas.message}
                </p>
            </div>
        `;
        console.log(listaLicencas);
    }
}