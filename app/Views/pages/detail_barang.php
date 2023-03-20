<?= $this->extend('layout/template_list'); ?>

<?= $this->section('content'); ?>


<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Detail Barang</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="id_siswa" class="form-label">id_barang</label>
                                <p class="form-control"> <?= $barang['id_barang']; ?></p>
                            </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">Jenis Mobil</label>
                            <p class="form-control"> <?= $barang['jenis_mobil']; ?></p>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="#" class="form-label">Merek Mobil</label>
                            <p class="form-control"> <?= $barang['merek_mobil']; ?></p>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="nama_siswa" class="form-label">No Part</label>
                            <p class="form-control"> <?= $barang['no_part']; ?></p>
                            <div class="mb-3 col-md-12">
                                <label for="nama_siswa" class="form-label">Jenis Barang</label>
                                <p class="form-control"> <?= $barang['jenis_barang']; ?></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nama_siswa" class="form-label">Nama Barang</label>
                                <p class="form-control"> <?= $barang['nama_barang']; ?></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="#" class="form-label">Jumlah Barang</label>
                                <p class="form-control"> <?= $barang['jumlah_barang']; ?></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="#" class="form-label">Harga Sales</label>
                                <p class="form-control"> <?= $barang['harga_sales']; ?></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="#" class="form-label">Nama Sales</label>
                                <p class="form-control"> <?= $barang['nama_sales']; ?></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <a href="/edit_barang/<?= $barang['id_barang']; ?>" class="btn btn-success">Edit Data</a>
                                <a href="/list_barang" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>



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
<?= $this->endSection(); ?>