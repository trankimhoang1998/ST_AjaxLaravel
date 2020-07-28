<!-- Edit Modal HTML -->
<div class="modal fade" id="editNhanvienModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditNhanvien">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Edit Nhân Viên
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-nhanvien-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>
                            name
                        </label>
                        <input class="form-control" id="name" name="name" required="" type="text">
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            phone
                        </label>
                        <input class="form-control" id="phone" name="phone" required="" type="text">
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            email
                        </label>
                        <input class="form-control" id="email" name="email" required="" type="text">
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            address
                        </label>
                        <input class="form-control" id="address" name="address" required="" type="text">
                        </input>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="nhanvien_id" name="nhanvien_id" type="hidden" value="0">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-info" id="btn-edit" type="button" value="add">
                        Update Nhân Viên
                    </button>
                    </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
