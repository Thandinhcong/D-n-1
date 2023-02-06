<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới ưu đãi </h4>
                <form class="forms-sample" action="index.php?url=them-moi-uu-dai" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã ưu đãi</label>
                        <input disabled name="id_voucher" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên ưu đãi</label>
                        <input name="usename" id="" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mã OTP</label>
                        <input name="giftcode" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Giá ưu đãi</label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng ưu đãi</label>
                        <input name="quantity" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày kết thúc ưu đãi</label>
                        <input name="date_end" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        
                        <input class="btn btn-gradient-primary me-2" type="submit" name="themmoi" value="Thêm mới">
                        <input class="btn btn-secondary" type="reset" name="reset" value="Nhập lại">
                        <a href="index.php?url=quan-ly-uu-dai"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
