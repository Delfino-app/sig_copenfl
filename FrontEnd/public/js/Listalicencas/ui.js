export default {

    getModalDelete(){

        return `
        <div class="modal fade" id="modalLicenca">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-trash"></i> Eliminar</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12" id="modalLicencaContainer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    }
}