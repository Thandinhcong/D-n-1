<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật ảnh khách sạn</h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-anh-khach-san" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Image</label>
                        <img src="View/src/upload/<?php echo $image['image']; ?>" alt="Lỗi tải ảnh" style="width: 300px">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">Url</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $image['url']; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" class="form-control" name="desc" value="<?php echo $image['description']; ?> ">
                    </div>
                    <div class="form-group mt-3">
                        <input type="hidden" value="<?php echo $image['id_img']?>" name="id">
                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                        <a href="index.php?url=admin"><input class="btn btn-dark" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

