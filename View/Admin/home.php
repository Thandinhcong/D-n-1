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
<?php //var_dump($giaoDienTrangChu); ?>
<div class="row">
<!--    --><?php //var_dump($_SESSION['account']); ?>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Giao diện trang chủ</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th>LOGO</th>
                            <th>ADDRESS</th>
                            <th>TEL</th>
                            <th>EMAIL</th>
                            <th>COPYRIGHT</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($giaoDienTrangChu as $key => $value){ ?>
                        <tr>
                            <td><img src="View/src/upload/<?php echo $value['logo']?>" alt="Lỗi tải ảnh"> </td>
                            <td><?php echo $value['address']?></td>
                            <td><?php echo $value['tel']?></td>
                            <td><?php echo $value['email']?></td>
                            <td><?php echo $value['copyright']?></td>
                            <td class="btn1">
                                <a href="index.php?url=sua-trang-chu"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-body">
                <h4 class="card-title">Ảnh Slider</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">ID IMG</th>
                            <th>IMAGE</th>
                            <th>URL</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($anhSlider as $key => $value){ ?>
                        <tr>
                            <td><?php echo $value['id_slider']?></td>
                            <td><img src="View/src/upload/<?php echo $value['image']?>" alt="Lỗi tải ảnh"></td>
                            <td><?php echo $value['url']?></td>
                            <td><?php echo $value['title']?></td>
                            <td><?php echo $value['description']?></td>
                            <td class="btn1">
                                <a href="index.php?url=sua-slider&id=<?php echo $value['id_slider']?>"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="index.php?url=xoa-slider&id=<?php echo $value['id_slider']?>" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="thaotac">
                    <div class="">
                        <a href="index.php?url=them-moi-slider"><input class="btn btn-primary" type="button" value="Thêm mới ảnh"></a>
                    </div>
                </div>
            </div>
<!--            <div class="card-body">-->
<!--                <h4 class="card-title">Ảnh Khách Sạn</h4>-->
<!--                <div class="table-responsive">-->
<!--                    <table class="table text-center table-bordered table1">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th style="width: 9%;">ID IMG</th>-->
<!--                            <th>IMAGE</th>-->
<!--                            <th>URL</th>-->
<!--                            <th>DESCRIPTION</th>-->
<!--                            <th style="width: 22%;">Thao tác</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            --><?php
////                            var_dump($anhHotel);
//                            foreach ($anhHotel as $key => $value){
//                            ?>
<!--                            <td>--><?php //echo $value['id_img']?><!--</td>-->
<!--                            <td><img src="View/src/upload/--><?php //echo $value['image']?><!--" alt="Lỗi tải ảnh"></td>-->
<!--                            <td>--><?php //echo $value['url']?><!--</td>-->
<!--                            <td>--><?php //echo $value['description']?><!--</td>-->
<!--                            <td class="btn1">-->
<!--                                <a href="index.php?url=sua-anh-khach-san&id=--><?php //echo $value['id_img']?><!--"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>-->
<!--                                <a href="index.php?url=xoa-anh-khach-san&id=--><?php //echo $value['id_img']?><!--" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        --><?php //} ?>
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="thaotac">-->
<!--                    <div class="">-->
<!--                        <a href="index.php?url=them-moi-anh-khach-san"><input class="btn btn-primary" type="button" value="Thêm mới ảnh"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>

