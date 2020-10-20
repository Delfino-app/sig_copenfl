
import requests from "../api/requests.js"

export default{

    displayNot:document.querySelector("#panel-bodyAdd"),
    displayData:document.getElementById("tableData"),
    async start(){

        const token = document.querySelector("#recividToken").value;
        const listaLicencas = await requests.listaLicencas(token);

        if(listaLicencas.message != undefined && listaLicencas.message != "Unauthenticated."){

            this.displayNot.innerHTML = `
                <div class="text-center">
                    <p style="font-size:15px;padding:30px">
                        ${listaLicencas.message}
                    </p>
                </div>
            `;
        }
        else if(listaLicencas.candidatos != undefined){

            await this.displayCandidatos(listaLicencas.candidatos);
        }
        else{

            //Token Expirou, redir to login
            window.location.href = "/login";
        }

        
        console.log(listaLicencas);
    },
    async displayCandidatos(dados){

        if(dados.length > 0){
            $("#painel-body").removeAttr("hidden");

            let display = ``;

            for (let i = 0; i < dados.length; i++) {
                
                display +=`
                    <tr class="even gradeC">
                        <td width="1%" class="f-s-600 text-inverse">
                            ${dados[i].id}
                        </td>
                        <td width="1%" class="with-img">
                            <!--<img src="#" class="img-rounded height-30" />-->
                        </td>
                        <td>${dados[i].nome}</td>
                        <td>${dados[i].data_nascimento}</td>
                        <td>${dados[i].contacto[1].telefone}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center" style="display:inline-flex">
                            <a href="#" title="Ver detalhes" class="btn btn-success btn-action">
                                <i class="fa fa-eye"></i>
                            </a>
                            <span style="padding:5px"></span>
                            <a href="#" title="Documentos" class="btn btn-primary btn-action">
                                <i class="fa fa-file-archive-o"></i>
                            </a>
                            <span style="padding:5px"></span>
                            <a href="#" title="Editar" class="btn btn-dark btn-action">
                                <i class="fa fa-edit"></i>
                            </a>
                            <span style="padding:5px"></span>
                            <a href="#" title="Eliminar" class="btn btn-danger btn-action">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                `;
            }

            this.displayData.innerHTML = display;
        }else{

            this.displayNot.innerHTML = `
                <div class="text-center">
                    <p style="font-size:15px;padding:30px">
                        Nenhum registro encontrado
                    </p>
                </div>
            `;
        }
    }
}