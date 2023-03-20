<?= $this->extend('layout/template_list'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Perubahan Data</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form action="update_jurnal_penjualan/<?= $jurnal_pembelian['id_jurnal_pembelian']; ?>" method="POST" name="autoSumForm">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_jurnal_pembelian" value="<?= $jurnal_pembelian['id_jurnal_pembelian']; ?>">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <input type="hidden" name="id_jurnal_pembelian" value="<?= $jurnal_pembelian['id_jurnal_pembelian']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Tanggal Pembelian</label>
                                <input type="date" name="tanggal_pembelian" value="<?= $jurnal_pembelian['tanggal_pembelian']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama Sales</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="nama_sales">
                                        <option value="<?= $jurnal_pembelian['nama_sales']; ?> " selected> <?= $jurnal_pembelian['nama_sales']; ?> </option>
                                        <?php foreach ($sales as $s) : ?>
                                            <option value="<?= $s['nama_sales']; ?> "> <?= $s['nama_sales']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama Barang </label>
                                <input type="text" name="nama_barang" value="<?= $jurnal_pembelian['nama_barang']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jumlah Barang </label>
                                <input type="text" name="jumlah_barang" value="<?= $jurnal_pembelian['jumlah_barang']; ?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Harga Satuan </label>
                                <input type="text" name="harga_satuan" value="<?= $jurnal_pembelian['harga_satuan']; ?>" class="form-control" onFocus="startCalc();" onBlur="stopCalc();">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Total Penjualan</label>
                                <input type="text" name="total_pembelian" value="<?= $jurnal_pembelian['total_pembelian']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-success">Update Jurnal Pembelian
                                </button>
                                <a href="/list_jurnal_pembelian" class="btn btn-danger">Kembali</a>
                            </div>
                    </div>
                </div>

            </div>
            </form>
        </div>
        <!-- /Account -->
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



        document.autoSumForm.total_pembelian.value = (one * 1) * (two * 1);
    }

    function stopCalc() {

        clearInterval(interval);
    }
</script>
<!-- / Layout wrapper -->
<?= $this->endSection(); ?>