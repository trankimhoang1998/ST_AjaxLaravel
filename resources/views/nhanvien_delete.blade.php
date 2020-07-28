<!-- Delete Nhanvien Modal Form HTML -->
<div class="modal fade" id="deleteNhanvienModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteNhanvien">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete-title" name="title">
                        Delete Nhân Viên
                    </h4>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Bạn có chắc muốn xóa nhân viên?
                    </p>
                    <p class="text-warning">
                        <small>
                            Xóa rồi không thể hoàn tác nha hihi :)).
                        </small>
                    </p>
                </div>
                <div class="modal-footer">
                    <input id="nhanvien_id" name="nhanvien_id" type="hidden" value="0">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-danger" id="btn-delete" type="button">
                        Delete Nhân Viên
                    </button>
                    </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
