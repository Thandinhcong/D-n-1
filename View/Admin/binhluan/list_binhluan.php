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
                <h4 class="card-title">Danh sách bình luận</h4>
                <div class="search">
                    <form action="index.php?url=quan-ly-binh-luan" method="post">

                        <select name="id_room">
                            <?php
                            foreach ($load_room as $item){
                                extract($item);
                                echo '
                                <option value="'.$id_cate .'">'.$name.'</option>
                                ';
                            }
                            ?>
                        </select>
                        <input type="submit" name="seach" value="Tìm kiếm">
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung bình luận</th>
                            <th>Id_phòng</th>
                            <th>Id_user</th>
                            <th>Thời gian </th>
                            <th style="width: 17%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($load_commnet as $value) {
                            extract($value);
                             echo '
                            <tr >
                            <td >'.$id_cmt.'</td >
                            <td >'.$content.'</td >
                            <td >'.$id_room.'</td >
                            <td > '.$Id_user.'</td >
                            <td >'.$date_time.'</td >
                            <td class="btn1" ><a href = "index.php?url=xoa-binh-luan&id='.$id_cmt.'" onclick = "return confirm(`Bạn muốn xóa?`)"; id = "delete" ><input class="btn btn-danger btn2" type = "button" value = "Xóa" ></a ></td >
                        </tr >
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

