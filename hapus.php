<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM buku WHERE id_buku='$_GET[id]'");
echo "<script>Perhatian('Buku Ini Telah Dihapus');</script>";
echo "<script>location='index.php';</script>";
