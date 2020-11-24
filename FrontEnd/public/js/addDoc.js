$('.file_docs').change(function(e){

    //Propriedades
    const defaultName = $(this).attr("defaultName");
    const nome = $(this).attr("name");
    const file = document.querySelector(`input[name="${nome}"]`).files[0];

    //Removendo Elemento
    e.target.parentElement.parentElement.parentElement.parentElement.remove();

    const ocultarDosNotAdd  = $("#docsNotAdd");

    //Novo elemento
    const displayDocs = $("#displayDocs");

    const newElemet = `
        <div class="col-lg-12 content-doc-list-container">
            <div class="content-doc-list  houver-destaque">
                    <p class="doc-list-title">
                        ${defaultName}
                        <input class="file_docs" type="file" id="${nome}" defaultName="${defaultName}" name="file" hidden required>
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
})