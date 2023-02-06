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
                <h4 class="card-title">Danh sách loại phòng</h4>
                <div class="table-responsive">
                    <!-- <form action="index.php?url=listLoaiPhong" method="post"> -->
                    <table class="table text-center table-bordered table1" >
                        <thead >
                          <tr>
                              <th>Mã loại</th>
                              <th>Tên loại</th>
                              <th>Ảnh</th>
                              <th>Mô tả</th>
                              <th>Gía tiền</th>
                              <th>Số lượng</th>
                              <th>Số người</th>
                              <th>Diện tích</th>
                              <th>Giường ngủ</th>
                              <th>Views</th>
                              <th style="width: 22%;">Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        
                           <?php 
                           foreach ($list_loaiphong as $value){
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
                            <td>' . $id_cate . '</td>
                            <td>' . $name . '</td>
                            <td>' . $image . '</td>
                            <td>' . $description . '</td>
                            <td>' . $price . '</td>
                            <td>' . $quantity . '</td>
                            <td>' . $number . '</td> 
                            <td>' . $area . '</td>
                            <td>' . $bed . '</td>
                            <td>' . $views . '</td>
                            <td class="btn1">
                                <a href="index.php?url=chi-tiet-anh-phong&id='.$id_cate.'"><input class="btn btn-primary btn2" type="button" value="Ảnh phòng"></a>
                                <a href="index.php?url=sua-loai-phong&id='.$id_cate.'"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-loai-phong&id='.$id_cate.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
                                    <input class="btn btn-danger btn2" type="button" value="Xóa"></a>
                            </td>
                            
                        </tr>
                        ';
                    } 
                        ?>
                        </tbody>
                    </table>
<!-- </form>  -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thaotac">
    <div class="">
        <a href="index.php?url=them-moi-loai-phong"><input class="btn btn-primary" type="button" value="Thêm loại phòng"></a>
    </div>
</div>
