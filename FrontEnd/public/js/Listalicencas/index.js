
window.addEventListener("load",function(){

    const body = document.getElementById("modalLicencaContainer");
    const footer = document.getElementById("modalLicencaFooter")


    $(".btn-danger").click(function(){

        const href = $(this).attr("reference");

        body.innerHTML = `
            <div class=" text-center" style="padding:10px;">
                <i class="ion ion-md-close-circle-outline" style="font-size:70px;color:#FF3B30"></i>
                <h3 style="color:#444">Deseja eliminar o registro?</h3>
                <p style="font-size:14px;">
                    Esta acção eliminará permanentemente o registro e todos os dados associados a ele.
                </p>
            </div>
        `;

        footer.innerHTML = `
            <div class="float-right" style="padding:5px;">
                <a  class="btn btn-inverse" data-dismiss="modal" style="color:white">Não</a>
                <a href="${href}"  class="btn btn-danger">Sim</a>
            </div>
        `;
	});
})