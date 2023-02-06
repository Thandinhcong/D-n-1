<?php
if(is_array($uudai)){
    extract($uudai);
}
?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật ưu đãi </h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-uu-dai" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã ưu đãi</label>
                        <input disabled name="id_voucher" value="<?php echo $id_voucher; ?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên ưu đãi</label>
                        <input name="tenuudai" type="text" value="<?php echo $name; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mã OTP</label>
                        <input name="giftcode" value="<?php echo $giftcode; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giá ưu đãi</label>
                        <input name="price" value="<?php echo $price; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng mã ưu đãi</label>
                        <input name="quantity" value="<?php echo $price; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày kết thúc ưu đãi</label>
                        <input name="date_end" value="<?php echo $price; ?>"type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <input type="hidden" name="id" value="<?php echo $id_voucher; ?>">
                        <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
                        <input class="btn btn-secondary" type="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-uu-dai"><input class="btn btn-gradient-primary me-2" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>

