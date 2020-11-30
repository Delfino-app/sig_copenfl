import api from "../api/requests.js";
import validade from "../utils/validatefiles.js";


let infoDocs = [];

const frmAnexarDocs = document.getElementById("frmAnexarDocs");
const frmFinalizarRegistro = document.getElementById("frmFinalizarRegistro");

(frmAnexarDocs != null) ? frmAnexarDocs.onsubmit = (e) => submeterDocs(e,"inside"): null;
(frmFinalizarRegistro != null) ? frmFinalizarRegistro.onsubmit = (e) => submeterDocs(e,"out") : null;

$('.file_docs').change(function(e){

    //Propriedades
    const defaultName = $(this).attr("defaultName");
    const nome = $(this).attr("name");
    
    //Dados Docs
    const tipo_documento_id = $(this).attr("tipo_documento_id");
    const inscricao_id = $(this).attr("inscricao_id");
    const inscricao_tipo = $(this).attr("inscricao_tipo");
    const file = document.querySelector(`input[name="${nome}"]`).files[0];

    if(file != undefined){

        const validarFile = validade.validateFile(file);

        const parent =  e.target.parentElement.parentElement.parentElement.parentElement;

        const prentAddClass = e.target.parentElement.parentElement.parentElement;

        const prentAddSpan = e.target.parentElement.parentElement;

        if(validarFile.status === 200){

            //Removendo Elemento
            $(parent).addClass("fadeOutRight animated");

            parent.remove();

            const ocultarDosNotAdd  = $("#docsNotAdd");

            //Novo elemento
            const displayDocs = $("#displayDocs");

            const newElemet = `
                <div class="col-lg-12 content-doc-list-container fadeInLeft animated">
                    <div class="content-doc-list  houver-destaque">
                        <p class="doc-list-title">
                            ${defaultName}
                            <span class="float-right icon-hover">
                                <i class="fa fa-eye"></i>
                            </span>
                        </p>
                    </div>
                </div>
            `;

            ocultarDosNotAdd.hide();
            
            //Alimentando Novo elemento
            displayDocs.append(newElemet);

            //Criando Objecto com os dados do Documento
            const doc = {
                nome:defaultName,
                inscricao_id,
                inscricao_tipo,
                tipo_documento_id,
                file
            };

            infoDocs.push(doc);
        }
        else{

            $(prentAddClass).addClass("content-doc-list-error");

            $(prentAddSpan).append(`<span style="color:#FF3B30">${validarFile.info} ${validarFile.message}</sapn>`);
        }  
    }
    else{

        alert("Selecione o primeiro");
    }
});


//Anexar Documentos - Ao Finalizar Etapa de Registro
function submeterDocs(e,from){

    e.preventDefault();

    const token = $('input[name="recividToken"]').val();

    if(infoDocs.length > 0){

        for (let i = 0; i < infoDocs.length; i++) {
          
            api.submitDocumentos(infoDocs[i],token,from);
        }
    }
    else{

        alert("Adicione os documentos");
    }
}

