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

input[type="text"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="radio"] {
    margin-right: 5px;
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


<h2 class="judul">Tambah Pegawai</h2>
<form method="post" action="?hal=pegawai_insert" enctype="multipart/form-data">

    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="input"><input type="file" id="foto" name="foto"></div>
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" id="nama" name="nama"></div>
    </div>

    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" id="jk" name="jk" value="L"> Laki-laki
        <input type="radio" id="jk" name="jk" value="P"> Perempuan
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input"><input type="date" id="tanggal" name="tanggal"></div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select id="jabatan" name="jabatan">
                <option value="">- Pilih Jabatan -</option>
                <?php
                $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                while ($j = mysqli_fetch_array($queryjabatan)) {
                    echo "<option value='" . $j['id_jabatan'] . "'>" . $j['nama_jabatan'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input"><textarea style="width:100%;" rows="5" id="keterangan" name="keterangan"></textarea></div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>

</form>