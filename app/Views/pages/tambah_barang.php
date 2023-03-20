<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 ">
                    <h5 class="card-header">Tambah Barang</h5>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="save_barang" method="POST">
                        <?= csrf_field(); ?>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Jenis Mobil</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="jenis_mobil">
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
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Merek Mobil</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="merek_mobil" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">No Part</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="no_part" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Jenis Barang</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="jenis_barang" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Barang</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nama_barang" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Harga Sales</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="harga_sales" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Harga Jual</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="harga_jual" value="#" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Sales</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="nama_sales">
                                        <option disabled selected> Pilih Nama Sales </option>
                                        <?php foreach ($sales as $s) : ?>
                                            <option> <?= $s['nama_sales']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah Barang</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="jumlah_barang" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">Tambah Barang</button>
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

<?= $this->endSection(); ?>