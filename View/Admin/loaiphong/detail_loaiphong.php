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
                <h4 class="card-title">Danh sách ảnh phòng</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center table1">
                        <thead>
                        <tr>
                            <th>ID Ảnh</th>
                            <th>Image</th>
                            <th>ID phòng</th>
                            <th style="width: 17%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listImage as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id_img'] ?></td>
                            <td><img src="View/src/upload/<?php echo $value['image'] ?>" alt="Lỗi tải ảnh" ></td>
                            <td><?php echo $value['id_room'] ?></td>
                            <td class="btn1">
                                <a href="index.php?url=xoa-anh-phong&id=<?php echo $value['id_img'] ?>" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
                                    <input class="btn btn-danger btn2" type="button" value="Xóa"></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thaotac">
    <form action="index.php?url=them-moi-anh-phong" method="post" enctype="multipart/form-data">
        <input type="file" name="imageRoom" class="form-control"><br>
        <input type="submit" value="Thêm mới ảnh phòng" name="themmoi" class="btn btn-primary">
    </form>
</div>
<!--<div class="thaotac">-->
<!--    <div class="">-->
<!--        <a href="index.php?url=them-moi-loai-phong"><input class="btn btn-primary" type="button" value="Thêm mới ảnh phòng"></a>-->
<!--    </div>-->
<!--</div>-->

