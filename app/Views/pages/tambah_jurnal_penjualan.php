<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 ">
                    <h5 class="card-header">Tambah Jurnal Penjualan</h5>
                    <form action="save_jurnal_penjualan" method="POST" name="autoSumForm">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Tanggal Penjualan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="tanggal_penjualan" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Customer</label>
                                <div class="col-md-10">

                                    <select class="form-control" name="nama_customer">
                                        <option disabled selected> Pilih Nama Customer </option>
                                        <?php foreach ($customer as $c) : ?>
                                            <option> <?= $c['nama_customer']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Barang</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nama_barang" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah Barang</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="jumlah_barang" onFocus="startCalc();" onBlur="stopCalc();" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Harga Satuan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="harga_satuan" onFocus="startCalc();" onBlur="stopCalc();" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Total</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="total_penjualan" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-10">
                                    <button type="submit" name="tambah_jurnal_penjualan" class="btn btn-primary">Tambah Jurnal Penjualan</button>
                                </div>
                            </div>
                        </div>
                    </form>

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
<script>
    function startCalc() {

        interval = setInterval("calc()", 1);
    }

    function calc() {

        one = document.autoSumForm.harga_satuan.value;

        two = document.autoSumForm.jumlah_barang.value;



        document.autoSumForm.total_penjualan.value = (one * 1) * (two * 1);
    }

    function stopCalc() {

        clearInterval(interval);
    }
</script>
<?= $this->endSection(); ?>