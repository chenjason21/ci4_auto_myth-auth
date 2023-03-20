<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard Autopart</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/admin.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,1200;0,700;1,300;1,400;1,500;1,1200;1,700&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/css/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="/css/core.css" />
    <link rel="stylesheet" href="/css/theme-default.css" />
    <link rel="stylesheet" href="/css/demo.css" />
    <!-- Helpers -->
    <script src="/js/helpers.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="/img/admin.png">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">AutoPart</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item <?= $menu == 'dashboard' ? 'active' : '' ?>">
                        <a href="<?= base_url('index.php') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!-- Barang -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Barang</span></li>
                    <li class="menu-item <?= $menu == 'manajemen_barang' ? 'active' : '' ?>">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-component"></i>
                            <div data-i18n="Basic">Manajemen Barang</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item <?= $submenu == 'list_barang' ? 'active' : '' ?>">
                                <a href="/list_barang" class="menu-link">
                                    <div data-i18n="Basic Inputs">List Barang</div>
                                </a>
                            </li>
                            <li class="menu-item <?= $submenu == 'tambah_barang' ? 'active' : '' ?>">
                                <a href="/tambah_barang" class="menu-link">
                                    <div data-i18n="Basic groups">Tambah Barang</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Supplier -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Sales</span></li>
                    <li class="menu-item <?= $menu == 'manajemen_sales' ? 'active' : '' ?>">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Basic">Manajemen Sales</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item <?= $submenu == 'list_sales' ? 'active' : '' ?>">
                                <a href="/list_sales" class="menu-link">
                                    <div data-i18n="Basic Inputs">List Sales</div>
                                </a>
                            </li>
                            <li class="menu-item <?= $submenu == 'tambah_sales' ? 'active' : '' ?>">
                                <a href="/tambah_sales" class="menu-link">
                                    <div data-i18n="Basic groups">Tambah Data Sales</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Customer -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Customer</span></li>
                    <li class="menu-item <?= $menu == 'manajemen_customer' ? 'active' : '' ?>">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Basic">Manajemen Customer</div>
                        </a>
                        <ul class="menu-sub">
                            <ul class="menu-item <?= $submenu == 'list_customer' ? 'active' : '' ?>">
                                <a href="/list_customer" class="menu-link">
                                    <div data-i18n="Basic Inputs">List Customer</div>
                                </a>
                            </ul>
                            <li class="menu-item <?= $submenu == 'tambah_customer' ? 'active' : '' ?>">
                                <a href="/tambah_customer" class="menu-link">
                                    <div data-i18n="Basic groups">Tambah Customer</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Jurnal -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Jurnal</span></li>
                    <li class="menu-item <?= $menu == 'manajemen_jurnal' ? 'active' : '' ?>">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-receipt"></i>
                            <div data-i18n="Basic">Manajemen Jurnal</div>
                        </a>
                        <ul class="menu-sub">
                            <ul class="menu-item <?= $submenu == 'list_jurnal_pembelian' ? 'active' : '' ?>">
                                <a href="/list_jurnal_pembelian" class="menu-link">
                                    <div data-i18n="Basic Inputs">List Jurnal Pembelian</div>
                                </a>
                            </ul>
                            <li class="menu-item <?= $submenu == 'list_jurnal_penjualan' ? 'active' : '' ?>">
                                <a href="/list_jurnal_penjualan" class="menu-link">
                                    <div data-i18n="Basic groups">List Jurnal Penjualan </div>
                                </a>
                            </li>
                            <li class="menu-item <?= $submenu == 'tambah_jurnal_pembelian' ? 'active' : '' ?>">
                                <a href="/tambah_jurnal_pembelian" class="menu-link">
                                    <div data-i18n="Basic groups">Tambah Jurnal Pembelian</div>
                                </a>
                            </li>
                            <li class="menu-item <?= $submenu == 'tambah_jurnal_penjualan' ? 'active' : '' ?>">
                                <a href="/tambah_jurnal_penjualan" class="menu-link">
                                    <div data-i18n="Basic groups">Tambah Jurnal Penjualan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
            </aside>
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="/img/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="/img/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p></p>
                                                    <span class="fw-semibold d-block">AutoPart</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <?= $this->renderSection('content'); ?>
</body>


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/perfect-scrollbar.js"></script>
<script src="/js/menu.js"></script>
<!-- endbuild -->

<!-- Main JS -->
<script src="/js/main.js"></script>
<!-- Page JS -->
<script src="/js/dashboards-analytics.js"></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</html>