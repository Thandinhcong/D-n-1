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
    <link rel="shortcut icon" href="View/src/assets/logo.png"/>
    <title>Petio Admin</title>
</head>

<body>
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php?url=admin"><img src="View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php?url=admin"><img src="View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png" alt="logo" /></a>
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
                        <img src="<?php if (isset($_SESSION['account'])){
                            if ($_SESSION['account']['image'] == null){
                                echo 'View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png';
                            }else{
                                echo 'View/src/upload/'.$_SESSION['account']['image'];
                            }
                        }else{
                            echo 'View/src/image/Chân%20mây%20có%20sen%20nền%20trắng.png';
                        }?>" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black"><?php echo isset($_SESSION['account']) ? $_SESSION['account']['fullname'] : "Admin" ?></p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?url=dang-xuat">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    <a class="dropdown-item" href="index.php?url=trang-chu">
                        <i class="mdi mdi-home menu-icon"></i> Home Page </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="index.php?url=trang-chu">
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
                <a class="nav-link" href="index.php?url=admin">
                    <span class="menu-title">Giao diện</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-loai-phong">
                    <span class="menu-title">Loại phòng</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-khach-hang">
                    <span class="menu-title">Khách hàng</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-binh-luan">
                    <span class="menu-title">Bình luận</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-don-hang">
                    <span class="menu-title">Đơn hàng</span>
                    <i class="mdi mdi-comment-text menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-thong-ke">
                    <span class="menu-title">Thống kê</span>
                    <i class="mdi mdi-cart menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-lien-he">
                    <span class="menu-title">Liên hệ</span>
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?url=quan-ly-dich-vu">
                    <span class="menu-title">Dịch vụ</span>
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
                    <a class="nav-link text-black font-weight-bold" href="index.php?url=admin">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard Admin
                    </a>
                </h3>
            </div>
