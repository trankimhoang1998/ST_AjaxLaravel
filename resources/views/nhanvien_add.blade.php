<!-- Add Nhanvien Modal Form HTML -->
<div class="modal fade" id="addNhanvienModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddNhanvien">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Nhanvien
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-nhanvien-errors">
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
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-info" id="btn-add" type="button" value="add">
                        Add New Nhân Viên
                    </button>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
