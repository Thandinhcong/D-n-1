<?php 
if(is_array($loaiphong)){
    extract($loaiphong);
}
$hinhpast = "View/src/upload/" . $image;
    if (is_file($hinhpast)) {
        $image = "<img src='" .$hinhpast ."' height='80px'>";
    }
    else {
        $image = "không có hình ảnh ";
    }
?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật loại hàng</h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-loai-phong" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã loại</label>
                        <input disabled name="id_cate" value="<?php echo $id_cate; ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên loại</label>
                        <input name="nameroom" type="text" value="<?php echo $name; ?>" class="form-control">
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
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input name="price" value="<?php echo $price; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input name="quantity" value="<?php echo $quantity; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số người</label>
                        <input name="number" value="<?php echo $number; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Diện tích</label>
                        <input name="area" value="<?php echo $area; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giướng ngủ</label>
                        <input name="bed" value="<?php echo $bed; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Views</label>
                        <input name="views" value="<?php echo $views; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <input type="hidden" name="id" value="<?php echo $id_cate; ?>">
                        <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
                        <input class="btn btn-secondary" type="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-loai-phong"><input class="btn btn-gradient-primary me-2" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
