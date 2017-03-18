<?php
if (isset($_POST['find_pinjam']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['w'];
    $queri = mysql_query("select * from pinjaman_header where id_pinjam='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $f1 = $d[0];
        $f2 = $d[1];
        $f3 = $d[2];
        $f4 = $d[3];
        $f5 = $d[4];
        $f6 = $d[5];
        $f7 = $d[6];
        $f8 = $d[7];
        $f9 = $d[8];
        $f10 = $d[9];
        $f11 = $d[10];
        $f12 = $d[11];
        $f13 = $d[12];
        $f14 = $d[13];
    }
    header("location:report_pinjam?f1=$f1&f2=$f2&f3=$f3&f4=$f4&f5=$f5&f6=$f6&f7=$f7&f8=$f8&f9=$f9&f10=$f10&f11=$f11&f12=$f12&f13=$f13&f14=$f14");
}else if (isset($_POST['find_simpan']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['e'];
    $queri = mysql_query("select simpanan.kode, simpanan.tgl, anggota.kode_anggota,anggota.namaanggota,jenis_simpan.jenis_simpanan, simpanan.jumlah from simpanan,anggota,jenis_simpan where anggota.kode_anggota=simpanan.noanggota and simpanan.id_jenis=jenis_simpan.id_jenis and kode='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $ok1 = $d[0];
        $ok2 = $d[1];
        $ok3 = $d[2];
        $ok4 = $d[3];
        $ok5 = $d[4];
        $ok6 = $d[5];
    }
    header("location:report_simpan?a=$ok1&b=$ok2&c=$ok3&d=$ok4&e=$ok5&f=$ok6");
} 
?>