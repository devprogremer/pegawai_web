<?php
if (!defined('INDEX')) die("");
?>

<style>
    .judul {
        margin-bottom: 10px;
    }

    .tombol-tambah {
        display: inline-block;
        background-color: transparent;
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

<h2 class="judul">Data Pegawai</h2>

<div class="tombol-tambah">
    <a class="tombol" href="?hal=pegawai_tambah">Tambah</a>
</div>

<table class="table">

<thead>
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Tanggal Lahir</th>
        <th>Jabatan</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>
    <?php
    $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
    $no = 0;

    while ($data = mysqli_fetch_array($query)) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><img src="images/<?= $data['foto'] ?>" width="100"></td>
            <td><?= $data['nama_pegawai'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['nama_jabatan'] ?></td>
            <td><?= $data['keterangan'] ?></td>
            <td>
                <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>">Edit</a>
                <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>

</table>