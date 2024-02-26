<?php

if (!defined('INDEX')) die("");

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$id'");
$data = mysqli_fetch_array($query);

if (file_exists("images/$data[foto]")) {
    unlink("images/$data[foto]");
}

$query_delete = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$id'");

if ($query_delete) {
    echo "Data berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error();
}
?>