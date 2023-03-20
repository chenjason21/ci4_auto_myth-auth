<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="card">
                    <h3 class="card-header">List Pembelian</h3>
                    <h5 class="card-header">Periode Tanggal</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <form action="cetak_jurnal_pembelian" Method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label for="html5-text-input" class="col-md-2 col-form-label">Tanggal Awal</label>
                                            <div class="col-md-5">
                                                <input class="form-control" type="date" name="tglawal" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="html5-text-input" class="col-md-2 col-form-label">Tanggal Akhir</label>
                                            <div class="col-md-5">
                                                <input class="form-control" type="date" name="tglakhir" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary" formtarget="_blank">Cetak</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-bottom: 20px;border: 3px solid #30262621;display: block;padding: 5px;border-radius: 10px;margin-left: 5px;width: 20%; margin-top: 10px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Sales</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga @</th>
                                        <th>Total Pembelian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($jurnal_pembelian as $jp) : ?>
                                    <tbody id="myTable">
                                        <td> <?= $jp['tanggal_pembelian']; ?> </td>
                                        <td> <?= $jp['nama_sales']; ?> </td>
                                        <td> <?= $jp['nama_barang']; ?> </td>
                                        <td> <?= $jp['jumlah_barang']; ?> </td>
                                        <td> Rp. <?= number_format((float)$jp['harga_satuan'], 0, ",", "."); ?> </td>
                                        <td> Rp. <?= number_format((float)$jp['total_pembelian'], 0, ",", "."); ?> </td>

                                        <form action="delete_jurnal_pembelian/ <?= $jp['id_jurnal_pembelian']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <td> <a href="/edit_jurnal_pembelian/<?= $jp['id_jurnal_pembelian']; ?>" class="btn btn-info btn-sm"> Edit </a>
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