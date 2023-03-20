<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="card">
                    <h5 class="card-header">List Sales</h5>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-bottom: 20px;border: 3px solid #30262621;display: block;padding: 5px;border-radius: 10px;margin-left: 5px;width: 20%; margin-top: 10px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Customer</th>
                                        <th>No HP</th>
                                        <th>Alamat Customer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($customer as $c) : ?>
                                    <tbody id="myTable">
                                        <td> <?= $c['id_customer']; ?> </td>
                                        <td> <?= $c['nama_customer']; ?> </td>
                                        <td> <?= $c['no_hp']; ?> </td>
                                        <td> <?= $c['alamat_customer']; ?> </td>
                                        <form action="delete_customer/ <?= $c['id_customer']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <td> <a href="edit_customer/<?= $c['id_customer']; ?>" class="btn btn-info btn-sm"> Edit Customer </a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus Data ?')"> Hapus </button>
                                            </td>
                                        </form>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
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