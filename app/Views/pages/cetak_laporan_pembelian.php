<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Dashbord</title>

  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,1200;0,700;1,300;1,400;1,500;1,1200;1,700&display=swap" rel="stylesheet" />
</head>

<body onload="window.print()">
  <table style="width:100%; border-collapse:collapse; text-align:center;" border="1">
    <tr>
      <td>
        <table style="width:100%;  text-align:center;" border="0">
          <tr>
            <td>
              <!-- <img src="assets/img/avatars/1.png"> -->
              <h1>AutoPart</h1>
            </td>
          </tr>
        </table>
      </td>
    </tr>


    <tr>
      <td>
        <table style="width:100%;  text-align:center;" border="0">
          <tr>
            <td>
              <!-- <img src="assets/img/avatars/1.png"> -->
              <h3> <u>Laporan Pembelian</u></h3><br>
              Periode : <?= $tglawal . " s/d " . $tglakhir ?>
            </td>
          </tr>
      </td>
    </tr>

    <tr>
      <td>
        <br>
        <center>
          <table border="1" cellpadding="4" style="border-collapse:collapse; border: 1px solid #000; text-align:center; width:80%">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Pembelian</th>
                <th>Nama Sales</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
                <th>Total Pembelian</th>
              </tr>
            </thead>
            <?php
            $totalseluruhpembelian = 0;
            foreach ($datalaporan->getResultArray() as $jp) :
              $totalseluruhpembelian += $jp['total_pembelian']; ?>
              <tbody id="myTable">
                <td> <?= $nomor++; ?></td>
                <td> <?= $jp['tanggal_pembelian']; ?> </td>
                <td> <?= $jp['nama_sales']; ?> </td>
                <td> <?= $jp['nama_barang']; ?> </td>
                <td> <?= $jp['jumlah_barang']; ?> </td>
                <td> Rp. <?= number_format((float)$jp['harga_satuan'], 0, ",", "."); ?> </td>
                <td> Rp. <?= number_format((float)$jp['total_pembelian'], 0, ",", "."); ?> </td>
              <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="6"> Total Seluruh Harga</th>
                  <td> Rp. <?= number_format($totalseluruhpembelian, 0, ",", "."); ?> </td>
                </tr>
              </tfoot>
          </table>
        </center>
      </td>
    </tr>

  </table>
  </table>


</body>

</html>