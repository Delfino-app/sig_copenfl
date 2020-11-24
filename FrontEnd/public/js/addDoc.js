import validade from "./utils/validatefiles.js";

$('.file_docs').change(function(e){

    //Propriedades
    const defaultName = $(this).attr("defaultName");
    const nome = $(this).attr("name");
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
                                <input class="file_docs_add" type="file" id="${nome}" defaultName="${defaultName}" name="file" hidden required>
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
            
        }
        else{

            $(prentAddClass).addClass("content-doc-list-error");

            $(prentAddSpan).append(`<span style="color:#FF3B30">${validarFile.info} ${validarFile.message}</sapn>`);
        }  
    }
    else{

        alert("Selecione o primeiro");
    }

})