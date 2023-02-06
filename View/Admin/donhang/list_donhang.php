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
                <form class="boloc" action="index.php?url=" method="post">
                
                </form>
                <div class="table-responsive">
                    <table class="table text-center">
                        <table class="table table-bordered text-center table1">
                            <thead>
                            <tr>
                                <th>Id_book</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Tổng giá</th>
                                <th>Trạng thái</th>
                                <th>Ngày đặt</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th style="width: 22%;">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // var_dump($list_book);
                                foreach ($list_donhang as $value) {
                                  extract($value);
                                  if ($status == 0){
                                      $trangthai = 'Vừa đặt';
                                  }elseif ($status == 1){
                                      $trangthai = 'Đang thuê';
                                  }elseif ($status == 2){
                                      $trangthai = 'Đã trả';
                                  }elseif ($status == 3){
                                      $trangthai = 'Hủy phòng';
                                  }
                                  echo'
                                
                            <tr>
                            
                                <td>' .$id_book . '</td>
                                <td>' .$fullname. '</td>
                                <td>' .$tel . '</td>
                                <td>' .$email . '</td>
                                <td>' .$total_price . '</td>
                                <td>' .$trangthai . '</td>
                                <td>' .$date_time . '</td>
                                <td>' .$check_in_date . '</td>
                                <td>' .$check_out_date . '</td>

                                <td class="btn1">
                                <a href="index.php?url=chi-tiet-don-hang&id='.$id_book.'"><input class="btn btn-primary btn2" type="button" value="Chi tiết"></a>
                                <a href="index.php?url=sua-don-hang&id='.$id_book.'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-don-hang&id='.$id_book.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a>
                                </td>
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

