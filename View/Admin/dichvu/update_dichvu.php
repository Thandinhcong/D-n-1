<?php 
if(is_array($dichvu)){
    extract($dichvu);
}
$hinhpast = "View/src/upload/" . $image;
    if (is_file($hinhpast)) {
        $image = "<img src='" . $hinhpast . "' height='80px'>";
    }
    else {
        $image = "không có hình ảnh ";
    }
?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật dịch vụ</h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-dich-vu" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã dịch vụ</label>
                        <input disabled name="id_sv" value="<?php echo $id_sv; ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên dịch vụ</label>
                        <input name="namesv" type="text" value="<?php echo $name; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giá dịch vụ</label>
                        <input name="price" value="<?php echo $price; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group" >
                        <label for="">Ảnh</label>
                        <input name="hinh" type="file"  class="form-control">
                        <?php echo $image; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input name="description" value="<?php echo $description; ?>"type="text" class="form-control">
                    </div>
                    
                    
                    <div class="form-group mt-3">
                        <input type="hidden" name="id" value="<?php echo $id_sv; ?>">
                        <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
                        <input class="btn btn-secondary" type="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-dich-vu"><input class="btn btn-gradient-primary me-2" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
