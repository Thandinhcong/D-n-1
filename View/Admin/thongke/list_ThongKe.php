<style>
    .thaotac {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .table1 thead tr th {
        font-weight: 600;
        font-size: 1rem;
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
</style>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card" id="categori">

        </div>
        <div class="card" id="date">
            <div class="card-body">
                <h2 class="card-title">Phòng được đặt nhiều nhất</h2>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                            <th>ID</th>
                            <th>Tên Phòng</th>
                            <th>Số lượng đặt hàng</th>
                        </thead>
                        <tbody>
                        <?php foreach ($soLuong as $key => $value){ ?>
                        <tr>
                            <td><?php echo $value['id']?></td>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['soluong']?></td>
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
    <div class="">
        <a href="index.php?url=chart-thong-ke"><input class="btn btn-primary" type="button" value="Xem Biểu đồ"></a>
    </div>
</div>
