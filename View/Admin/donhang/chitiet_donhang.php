<style>
    .thaotac {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    a {
        text-decoration: none;
    }

    td {
        line-height: 40px;
    }

    .btn1 input:nth-child(1) {
        margin-right: 10px;
    }

    .btn2 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .boloc {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 15px;
    }

    .boloc2 {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .boloc select {
        height: 38px;
    }

    .table1 thead tr th {
        font-weight: 600;
        font-size: 1rem;
    }
</style>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Danh sách đơn hàng</h2>
                </form>
                <div class="table-responsive">
                    <form action="index.php?url=cap-nhat-don-hang" method="post">
                        <div class="form-group">
                            <p>Trạng thái phòng: </p>
                            <?php
                            if(is_array($donhang)){
                                extract($donhang);
                            }
                            ?>
                            <select name="status" id="" class="form-select">
                                <option value="0" <?php echo $status == 0 ? 'selected': ''?>>Vừa đặt</option>
                                <option value="1" <?php echo $status == 1 ? 'selected': ''?>>Đang được thuê </option>
                                <option value="2" <?php echo $status == 2 ? 'selected': ''?>>Đã trả phòng </option>
                                <option value="3" <?php echo $status == 3 ? 'selected': ''?>>Hủy phòng</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                    </form>


                    <table class="table text-center">
                        <table class="table table-bordered text-center table1">
                            <thead>
                            <tr>
                                <td>STT</td>
                                <td>Loại Phòng</td>
                                <td>Giá / Đêm</td>
                                <td>Ảnh phòng</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $tong = 0;
                            foreach ($listDonHang as $key => $value){
                                $listphong = loaiphong_loadone($value[0]);
                                $tong += $value[4];
                                ?>
                            <tr>
                                <td><?php echo $key+1?></td>
                                <td><?php echo $listphong['name']?></td>
                                <td><?php echo $listphong['price']?></td>
                                <td><img src="View/src/upload/<?php echo $listphong['image']?>" alt="Lỗi tải ảnh" width="300px"></td>
                                <td><?php echo $value[3]?></td>
                                <td><?php echo $value[4]?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="5">Tổng tiền</td>
                                <td ><?php echo $tong ?> VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


