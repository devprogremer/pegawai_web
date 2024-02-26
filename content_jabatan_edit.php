<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .judul {
        color: black;
    }

    .form-group label {
        color: black;
    }

    input[type="text"] {
        color: black;
        /* Add any other styles you prefer */
    }

    .tombol {
        color: black;
        /* Add any other styles you prefer */
    }
</style>

<h2 class="judul">Edit Jabatan</h2>

<form method="post" action="?hal=jabatan_update">
    <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>">
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>