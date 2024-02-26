<?php
if (!defined('INDEX')) die("");
?>

<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
}


.judul {
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input {
    margin-top: 5px;
}

.form-group {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.tombol {
    padding: 8px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
}

.simpan {
    background-color: #4caf50;
}

.reset {
    background-color: #f44336;
    margin-left: 5px;
}



</style>



<h2 class="judul">Tambah Jabatan</h2>

<form method="post" action="?hal=jabatan_insert">

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" id="nama" name="nama"></div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>

</form>