<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="card">
                    <h5 class="card-header">List Barang</h5>

                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-bottom: 20px;border: 3px solid #30262621;display: block;padding: 5px;border-radius: 10px;margin-left: 5px;width: 20%; margin-top: 10px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Merek Mobil</th>
                                        <th>No Part</th>
                                        <th>Jenis Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga Sales</th>
                                        <th>Harga Jual</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($barang as $b) : ?>
                                    <tbody id="myTable">
                                        <td> <?= $b['merek_mobil']; ?> </td>
                                        <td> <?= $b['no_part']; ?> </td>
                                        <td> <?= $b['jenis_barang']; ?> </td>
                                        <td> <?= $b['nama_barang']; ?> </td>
                                        <td> <?= $b['jumlah_barang']; ?> </td>
                                        <td> Rp. <?= number_format((float)$b['harga_sales'], 0, ",", "."); ?> </td>
                                        <td> Rp. <?= number_format((float)$b['harga_jual'], 0, ",", "."); ?> </td>

                                        <form action="delete_barang/ <?= $b['id_barang']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <td> <a href="/detail_barang/<?= $b['id_barang']; ?>" class="btn btn-info btn-sm"> Detail </a>
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