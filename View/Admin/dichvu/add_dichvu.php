<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới dịch vụ</h4>
                <form class="forms-sample" action="index.php?url=them-moi-dich-vu" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã dịch vụ</label>
                        <input disabled name="id_sv" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên dịch vụ</label>
                        <input name="usename" id="" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giá dịch vụ</label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input name="hinh" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input name="description" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-gradient-primary me-2" type="submit" name="themmoi" value="Thêm mới">
                        <input class="btn btn-secondary" type="reset" name="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-dich-vu"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>