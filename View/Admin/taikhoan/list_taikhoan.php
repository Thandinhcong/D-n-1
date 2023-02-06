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
                <h4 class="card-title">Danh sách khách hàng</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center table1">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Họ và tên </th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>số điện thoại </th>
                            <th>Vai trò</th>
                            <th style="width: 17%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($list_account as $value){
                            extract($value);
                            $hinh_anh = "./View/src/upload/".$image;
                            if(is_file($hinh_anh)){
                                $image = "<img src ='".$hinh_anh."' height='80'> ";
                            }else{
                                $image = "No photo";
                            }
                            if($role == 1 ){
                                $thongbao ='Admin';
                            }else{
                                $thongbao ='Thành viên ';
                            }
                            echo '     
                        <tr>
                            <td>'.$id_account.'</td>
                            <td>'.$image.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$password.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.' </td>
                            <td>'.$thongbao.'</td>
                            <td class="btn1">
                                <a href="index.php?url=sua-khach-hang&id='.$id_account.'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-khach-hang&id='.$id_account.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
                                    <input class="btn btn-danger btn2" type="button" value="Xóa"></a>
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

