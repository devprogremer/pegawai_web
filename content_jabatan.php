<?php
if (!defined('INDEX')) die("");
?>
<style>
    .judul {
        margin-bottom: 10px;
    }

    .tombol-tambah {
        display: inline-block;
        background-color: #2ecc71;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .tombol {
        display: inline-block;
        padding: 8px 12px;
        background-color: #3498db;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        padding: 12px;
        border: 2px solid #ddd;
        text-align: center;
        font-size: 12px;
    }

    .edit {
        background-color: #3498db;
        padding: 6px 10px;
        margin-right: 5px;
        font-size: 12px;
    }

    .hapus {
        background-color: #e74c3c;
        padding: 6px 10px;
        font-size: 12px;
    }
</style>
<h2 class="judul">Data Jabatan</h2>

<a class="tombol" href="?hal=jabatan_tambah">Tambah</a>

<table class="table">

<thead>
    <tr>
        <th>No</th>
        <th>Nama Jabatan</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>
    <?php
    $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
    $no = 0;

    while ($data = mysqli_fetch_array($query)) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_jabatan'] ?></td>
            <td>
                <a class="tombol edit" href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>">Edit</a>
                <a class="tombol hapus" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>

</table>