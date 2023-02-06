<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- plugins:css -->
    <link rel="stylesheet" href="View/src/assets/vendors/mdi/css/materialdesignicons.min.css">
<!--    <link rel="stylesheet" href="./View/src/assets/vendors/mdi/css/materialdesignicons.min.css">-->
    <link rel="stylesheet" href="View/src/assets/vendors/css/vendor.bundle.base.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="View/src/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/logo.png" />
    <title>Petio Admin</title>
</head>

<body>
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">Phan luan</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    <a class="dropdown-item" href="../view/index.php">
                        <i class="mdi mdi-home menu-icon"></i> Home Page </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<div class="container-fluid page-body-wrapper body1">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <ul class="nav">
<!--            <li class="nav-item nav-profile">-->
<!--                <a href="#" class="nav-link">-->
<!--                    <div class="nav-profile-image">-->
<!--                        <img src="./assets/images/favicon.png" alt="profile">-->
<!--                        <span class="login-status online"></span>-->
<!--                        change to offline or busy as needed-->
<!--                    </div>-->
<!--                    <div class="nav-profile-text d-flex flex-column">-->
<!--                        <span class="font-weight-bold mb-2">Phan luân </span>-->
<!--                    </div>-->
<!--                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>-->
<!--                </a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <span class="menu-title">Home</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=add_category">
                    <span class="menu-title">Danh mục</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=add_product">
                    <span class="menu-title">Hàng hóa</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=list_account">
                    <span class="menu-title">Khách hàng</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=list_comment">
                    <span class="menu-title">Bình luận</span>
                    <i class="mdi mdi-comment-text menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=list_bill">
                    <span class="menu-title">Đơn hàng</span>
                    <i class="mdi mdi-cart menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=statistical">
                    <span class="menu-title">Thống kê</span>
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <a class="nav-link text-black font-weight-bold" href="../index.php">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard Admin
                    </a>
                </h3>
            </div>
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
                            <h4 class="card-title">Danh sách loại hàng</h4>
                            <div class="table-responsive">
                                <table class="table text-center table-bordered table1">
                                    <thead>
                                    <tr>
                                        <th style="width: 9%;">#</th>
                                        <th>Mã loại</th>
                                        <th>Tên loại</th>
                                        <th style="width: 22%;">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" name="" id=""></td>
                                        <td>' . $danhmuc_id . '</td>
                                        <td>' . $danhmuc_name . '</td>
                                        <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thaotac">
                <div class="">
                    <a href="index.php?act=add_danhmuc"><input class="btn btn-primary" type="button" value="Thêm danh mục"></a>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <!-- <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com
                      2021</span> -->

                </div>

            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
</body>
<!-- plugins:js -->
<script src="View/src/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="View/src/assets/vendors/chart.js/Chart.min.js"></script>
<script src="View/src/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="View/src/assets/js/off-canvas.js"></script>
<script src="View/src/assets/js/hoverable-collapse.js"></script>
<script src="View/src/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="View/src/assets/js/dashboard.js"></script>
<script src="View/src/assets/js/todolist.js"></script>
<!-- End custom js for this page -->

</html>
