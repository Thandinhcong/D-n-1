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
                <h4 class="card-title">Danh sách dịch vụ</h4>
                <div class="table-responsive">
                    
                    <table class="table text-center table-bordered table1" >
                        <thead >
                          <tr>
                              <th>Mã dịch vụ</th>
                              <th>Tên dịch vụ</th>
                              <th>Giá dịch vụ</th>
                              <th>Ảnh</th>
                              <th>Mô tả</th>
                              
                             
                              <th style="width: 22%;">Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        
                           <?php 
                           foreach ($list_dichvu as $value){
                            extract($value);
                        $hinh = "View/src/upload/" . $image;
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' height='80px'>";
                        }
                        else {
                            $image = "không có hình ảnh ";
                        } 
                                            
                        echo'
                        <tr>
                            <td>' . $id_sv . '</td>
                            <td>' . $name . '</td>
                            <td>' . $price . '</td>
                            <td>' . $image . '</td>
                            <td>' . $description  . '</td>
                            
                            <td class="btn1">
                               
                                <a href="index.php?url=sua-dich-vu&id='.$id_sv.'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-dich-vu&id='.$id_sv.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
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
<div class="thaotac">
    <div class="">
        <a href="index.php?url=them-moi-dich-vu"><input class="btn btn-primary" type="button" value="Thêm dịch vu"></a>
    </div>
</div>
