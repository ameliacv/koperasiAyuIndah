<?php

if (isset($_GET['kc'])) {
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['kc'];
    $perintah = "DELETE FROM cabang WHERE kode='$kode'";
    $hasil = mysql_query($perintah);
    header("location:cabang.php");
} else if (isset($_GET['ka'])){
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['ka'];
    $perintah = "DELETE FROM anggota WHERE kode_anggota='$kode'";
    $hasil = mysql_query($perintah);
    header("location:anggota.php");
} else if (isset($_GET['ku'])){
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['ku'];
    $perintah = "DELETE FROM people WHERE kode='$kode'";
    $hasil = mysql_query($perintah);
    header("location:people");
}else if (isset($_GET['ks'])){
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['ks'];
    $perintah = "DELETE FROM simpanan WHERE kode='$kode'";
    $hasil = mysql_query($perintah);
    header("location:report_tabungan");
} else if (isset($_GET['kr'])){
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['kr'];
    $perintah = "DELETE FROM pinjaman_detail WHERE kode_angsur='$kode'";
    $hasil = mysql_query($perintah);
    header("location:report_angsuran");
} else if (isset($_GET['kp'])){
    require_once '../koperasi/config/koneksi.php';
    $kode=$_GET['kp'];
    $perintah = "DELETE FROM pinjaman_header WHERE id_pinjam='$kode'";
    $hasil = mysql_query($perintah);
    header("location:report_pinjam");
}
?>
