<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 ">
                    <h5 class="card-header">Tambah Customer</h5>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="save_customer" method="POST">
                        <div class="card-body">

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Customer</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nama_customer" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">No HP</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="no_hp" value="#" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Alamat Customer</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="alamat_customer" value="#" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">Tambah customer</button>
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