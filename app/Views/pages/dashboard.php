<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang Yang
                                    Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_barang; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="bx bxs-component bx-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Customer
                                    Yang Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_customer; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-user bx-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sales Yang
                                    Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_sales; ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-user bx-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jurnal
                                    Pembelian Yang Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_jurnal_pembelian; ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-receipt bx-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jurnal
                                    Penjualan Yang Terdaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_jurnal_penjualan; ?> </div>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-receipt bx-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content wrapper -->
<div class="content-backdrop fade"></div>
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>


<?= $this->endSection(); ?>