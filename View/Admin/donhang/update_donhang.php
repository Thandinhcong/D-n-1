
<?php
if(is_array($donhang)){
    extract($donhang);
}
?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật đơn hàng</h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-don-hang" method="post">
                    <div class="form-group">
                        <label for="">Mã đơn hàng</label>
                        <input disabled name="id_book" value="<?php echo $id_book; ?>" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Tên đơn hàng</label>
                        <input disabled name="tendonhang" type="text" value="<?php echo $fullname; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TEl</label>
                        <input disabled name="tel" type="text" value="<?php echo $tel; ?>" class="form-control">
                    </div>
                    <div class="form-group">                        
                        <label for="Email"></label>
                        <input disabled name="email" type="text" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tổng giá</label>
                        <input disabled name="total_price" type="text" value="<?php echo $total_price; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bill_status">Trạng thái phòng</label>
                        <select name="status" id="" class="form-select">
                            <option value="0" <?php echo $status == 0 ? 'selected': ''?>>Vừa đặt</option>
                            <option value="1" <?php echo $status == 1 ? 'selected': ''?>>Đang được thuê </option>
                            <option value="2" <?php echo $status == 2 ? 'selected': ''?>>Đã trả phòng </option>
                            <option value="3" <?php echo $status == 3 ? 'selected': ''?>>Hủy phòng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày đặt</label>
                        <input disabled name="date_time" type="text" value="<?php echo $date_time; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Check-in</label>
                        <input disabled name="check_in_date" type="text" value="<?php echo $check_in_date; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Check-out</label>
                        <input disabled name="check_out_date" type="text" value="<?php echo $check_out_date; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group mt-3">
                    <input type="hidden" name="id" value="<?php echo $id_book; ?>">
                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                        <a href="index.php?url=quan-ly-don-hang"><input class="btn btn-dark" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>