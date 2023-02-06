<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật giao diện trang chủ</h4>
                <?php foreach ($giaoDienTrangChu as $key => $value){
//                    var_dump($value);?>

                <form class="forms-sample" action="index.php?url=cap-nhat-trang-chu" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Logo</label>
                        <img src="View/src/upload/<?php echo $value['logo'] ; ?>" alt="Lỗi tải ảnh" style="width: 300px">
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $value['address']; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Tel</label>
                        <input type="text" class="form-control" name="tel" value="<?php echo $value['tel']; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $value['email']; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Copyright</label>
                        <input type="text" class="form-control" name="copyright" value="<?php echo $value['copyright'] ?> ">
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                        <a href="index.php?url=admin"><input class="btn btn-dark" type="button" value="Danh sách"></a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
