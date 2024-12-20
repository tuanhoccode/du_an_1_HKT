<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="60">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="?act=/" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text">
                        <i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span>
                    </span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Đăng ký</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
        </div>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Quản lý</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="?act=/">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <a class="nav-link menu-link" href="http://localhost/du_an_1_HKT/">
                        <i class="ri-user-line"></i> <span data-key="t-dashboards">Quay lại trang người dùng</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSanPham" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSanPham">
                        <i class="ri-cup-line"></i> <span data-key="t-advance-ui">Sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSanPham">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list_product" class="nav-link">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=them-san-pham" class="nav-link">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDanhMuc" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDanhMuc">
                        <i class="ri-list-check"></i> <span data-key="t-advance-ui">Danh Mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDanhMuc">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list_cate" class="nav-link">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=insert_cate" class="nav-link">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBinhLuan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBinhLuan">
                        <i class="ri-comments-line"></i> <span data-key="t-advance-ui">Bình Luận</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBinhLuan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list_review" class="nav-link">Danh sách bình luận</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarNguoiDung" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarNguoiDung">
                        <i class="ri-user-line"></i> <span data-key="t-advance-ui">Người Dùng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarNguoiDung">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list_user" class="nav-link">Danh Sách Người Dùng</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-shopping-cart-line"></i> <span data-key="t-pages">Bán hàng</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDonHang" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDonHang">
                        <i class="ri-shopping-cart-line"></i> <span data-key="t-advance-ui">Đơn hàng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDonHang">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list_orders" class="nav-link">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>