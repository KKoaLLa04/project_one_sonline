<div class="container-fluid">
    <a href="?module=exam&action=add"><button class="btn btn-warning btn-sm">Quay lại</button></a>
    <hr>
    <h4>Thêm đề thi mới</h4>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tiêu đề đề thi</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề đề thi...." name="title">
                    <p></p>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="exam_id" class="form-control">
                        <option value="0">---Danh mục đề thi---</option>
                    </select>
                    <p></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="description" class="form-control" placeholder="Mô tả ngắn..." rows="5"></textarea>
                    <p></p>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea name="content" class="form-control" placeholder="Nội dung..." rows="5"></textarea>
                    <p></p>
                </div>
            </div>
        </div>

        <button class="btn btn-primary">Thêm mới</button>
    </form>
</div>