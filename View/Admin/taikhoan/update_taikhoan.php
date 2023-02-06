<?php
//var_dump($list_role);
if(is_array($fixaccount)){
    extract($fixaccount);
}

$hinh_anh = "./View/src/upload/".$image;
if(is_file($hinh_anh)){
    $image = "<img style='width: 200px;' src ='".$hinh_anh."'  alt = 'anh' class = 'form-control'> ";
}else{
    $image = "no photo";
}
?>
<style>
    .role {
        margin-left: 1rem;
    }

</style>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật tài khoản</h4>

                <form action="index.php?url=cap-nhat-khach-hang" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for=""> </label>
                        <input type="hidden" class="form-control" name="id_account" value="<?php echo $id_account; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Avatar</label>
<!--                        <img style="width: 120px;" src="" class="form-control" alt="ảnh">-->
             <?php echo $image; ?>
                        <input class="form-control mt-2" type="file" name="anh" id="" multiple="multiple">
                    </div>
                    <div class="form-group">
                        <label for="">Fullname</label>
                        <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>">
                        <?php echo isset($error['fullname']) ? $error['fullname'] : "" ?>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="phone" class="form-control" name="phone" value="<?php echo $tel; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Vai trò</label> <br>
                        <select name="role">
                           <option value="0" <?php  echo $role == 0 ? 'selected' : "" ?>>Thành viên </option>
                            <option value="1" <?php echo $role == 1 ? 'selected' : "" ?>>Admin </option>
                        </select>
                    </div>
                    <input type="hidden" name="account_id" value=" $user_id ">
<!--                    <button type="submit" class="mt-3 btn btn-primary" name="sau-khach-hang">Cập nhật</button>-->
                    <input type="submit" value="Cập nhật" class="mt-3 btn btn-primary" name="capnhat">
                    <input type="reset" class="mt-3 btn btn-primary" value="Nhập lại">
                    <?php
                    if(isset($thongbao)&& $thongbao!= ""){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>