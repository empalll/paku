<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=" . $title . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<style type="text/css">
    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td {
        border: 1px solid black;
        font-size: 11pt;
        font-family: Verdana;
        padding: 10px 10px 10px 10px;
    }

    .table-data th {
        background-color: grey;
    }

    h3 {
        font-family: Verdana;
    }
</style>
<h3>
    <center>LAPORAN DATA KULI</center>
</h3>
<br />
<table class="table-data" border='1'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kuli</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($produk as $l) {
        ?>
            <tr>
                <td scope="row"><?= $no++; ?></td>
                <td><?= $l['nama_produk']; ?></td>
                <td><?= $l['riwayat_kerja']; ?></td>
                <td><?= $l['harga']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>