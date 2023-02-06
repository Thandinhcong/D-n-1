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
                <h4 class="card-title">Danh sách liên hệ </h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th>Mã-contact</th>
                            <th>Giới tính</th>
                            <th>Họ và tên </th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($list_contact as $value){
                            extract($value);
                            if ($status == 0) {
                                $trangthai = "Chưa trả lời";
                            }elseif ($status == 1) {
                                $trangthai = "Đã trả lời";                       
                            }
                            if ($sex == 1 ) {
                               $gioitinh = "Nam";
                            }elseif ($sex == 2) {
                                $gioitinh = "Nữ";
                            }else {
                                $gioitinh = "Null";
                            }
                            echo '
                     
                        <tr>
                            <td>' . $id_contact  . '</td>
                            <td>' . $gioitinh . '</td>
                            <td>'.$fullname.'</td>
                            <td>'.$email . '</td>
                            <td>' . $tel. '</td>
                            <td>' . $content . '</td>
                            <td>'.$trangthai.' </td>                         
                            <td class="btn1">
                                <a href="index.php?url=sua-lien-he&id='.$id_contact .'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-lien-he&id='.$id_contact .'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
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


