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

    .table1 thead tr th {
        font-weight: 600;
        font-size: 1rem;
    }
</style>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách ưu đãi</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">#</th>
                            <th>Id-voucher</th>
                            <th>Tên</th>
                            <th>Mã voucher</th>
                            <th>Giá tiền</th>
                            <th>Số lượng mã ưu đãi</th>
                            <th>Ngày kết thúc ưu đãi</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                           foreach ($list_uudai as $value){
                            extract($value);   
                            echo'
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="" id=""></td>
                            <td>' .$id_voucher . '</td>
                            <td>' .$name . '</td>
                            <td>' . $giftcode. '</td>
                            <td>' . $price. '</td>
                            <td>' . $quantity. '</td>
                            <td>' . $date_end. '</td>
                            <td class="btn1"><a href="index.php?url=sua-uu-dai&id='.$id_voucher.'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="index.php?url=xoa-uu-dai&id='.$id_voucher.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        ';
                           }
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thaotac">
    <div class="">
        <a href="index.php?url=them-moi-uu-dai"><input class="btn btn-primary" type="button" value="Thêm Ưu đãi"></a>
    </div>
</div>
