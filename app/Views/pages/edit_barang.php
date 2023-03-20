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
                        <form action="update_barang/<?= $barang['id_barang']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Merek Mobil</label>
                                <input type="text" name="merek_mobil" value="<?= $barang['merek_mobil']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jenis Mobil</label>
                                <select class="form-control" name="jenis_mobil">
                                    <option value="<?= $barang['jenis_mobil']; ?> " selected> <?= $barang['jenis_mobil']; ?> </option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Datsun">Datsun</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">No Part</label>
                                <input type="text" name="no_part" value="<?= $barang['no_part']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jenis Barang</label>
                                <input type="text" name="jenis_barang" value="<?= $barang['jenis_barang']; ?>" class="form-control">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" value="<?= $barang['nama_barang']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jumlah Barang</label>
                                <input type="text" name="jumlah_barang" value="<?= $barang['jumlah_barang']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Harga Sales </label>
                                <input type="text" name="harga_sales" value="<?= $barang['harga_sales']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Harga Jual </label>
                                <input type="text" name="harga_jual" value="<?= $barang['harga_jual']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama Sales</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="nama_sales">
                                        <option value="<?= $barang['nama_sales']; ?> " selected> <?= $barang['nama_sales']; ?> </option>
                                        <?php foreach ($sales as $s) : ?>
                                            <option value="<?= $s['nama_sales']; ?> "> <?= $s['nama_sales']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-success">Update Barang
                                </button>
                                <a href="/list_barang" class="btn btn-danger">Kembali</a>
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
<!-- / Layout wrapper -->
<?= $this->endSection(); ?>