
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới loại phòng</h4>
                <form class="forms-sample" action="index.php?url=them-moi-loai-phong" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã loại</label>
                        <input disabled name="id_cate" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên loại</label>
                        <input name="usename" id="" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input name="hinh" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input name="description" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input name="quantity" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số người</label>
                        <input name="number" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Diện tích</label>
                        <input name="area" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giường ngủ</label>
                        <input name="bed" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Views</label>
                        <input name="views" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <!-- <input type = "text" name="id_cate" value="<?php echo $loai_phong['id_cate']?>"> -->
                        <input class="btn btn-gradient-primary me-2" type="submit" name="themmoi" value="Thêm mới">
                        <input class="btn btn-secondary" type="reset" name="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-loai-phong"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>