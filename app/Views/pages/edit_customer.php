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
                        <form action="update_customer/<?= $customer['id_customer']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_customer" value="<?= $customer['id_customer']; ?>">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <input type="hidden" name="id_customer" value="<?= $customer['id_customer']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama Customer</label>
                                <input type="text" name="nama_customer" value="<?= $customer['nama_customer']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">No HP Customer</label>
                                <input type="text" name="no_hp" value="<?= $customer['no_hp']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Alamat Customer</label>
                                <input type="text" name="alamat_customer" value="<?= $customer['alamat_customer']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-success">Update Customer
                                </button>
                                <a href="/list_customer" class="btn btn-danger">Kembali</a>
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