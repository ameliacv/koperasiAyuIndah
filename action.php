<?php

if (isset($_POST['add_cabang']) == "Add") {
    require_once '../koperasi/config/koneksi.php';
    $kode = $_POST['tkc'];
    $nama = $_POST['tnc'];
    $alamat = $_POST['tac'];
    $hp = $_POST['thc'];
    $queri8 = "insert into cabang (kode, nama, alamat, telf) values ('$kode', '$nama', '$alamat', '$hp')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    header("location:cabang");
} else if (isset($_POST['update_cabang']) == "Update") {
    require_once '../koperasi/config/koneksi.php';
    $kode = $_POST['tkc'];
    $nama = $_POST['tnc'];
    $alamat = $_POST['tac'];
    $hp = $_POST['thc'];
    $perintah = "UPDATE cabang SET  nama='$nama', alamat='$alamat', telf='$hp'  WHERE kode='$kode'";
    $hasil = mysql_query($perintah)or die(mysql_error());

    header("location:cabang.php");
} else if (isset($_POST['Find']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['tcari'];
    $queri = mysql_query("select * from anggota where kode_anggota='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $ok1 = $d[1];
        $ok2 = $d[2];
        $ok3 = $d[3];
        $ok4 = $d[4];
        $ok7 = $d[7];
        $ok8 = $d[8];
        $ok9 = $d[9];
    }
    header("location:anggota?a=$ok1&b=$ok2&c=$ok3&d=$ok4&e=$ok7&f=$ok8&g=$ok9");
} else if (isset($_POST['add_anggota']) == "Add") {
    require_once '../koperasi/config/koneksi.php';
    $Y1 = $_POST['tka'];
    $Y2 = $_POST['tna'];
    $Y3 = $_POST['tjk'];
    $Y4 = $_POST['ttla'];
    $Y5 = $_POST['tta'];
    $Y6 = $_POST['taa'];
    $Y7 = $_POST['tha'];
    $Y8 = $_POST['tia'];
    $Y9 = $_POST['tc'];
    $Y10 = $_POST['tp'];
    $queri5 = "INSERT INTO anggota (kode_anggota, namaanggota,"
            . " jk, tempat_lahir, tgl_lahir, alamat, hp,"
            . " noidentitas, pekerjaan, id_cabang)"
            . " values ('$Y1', '$Y2', '$Y3', '$Y4','$Y5',"
            . "'$Y6','$Y7', '$Y8', '$Y10', '$Y9')";
    $hasil5 = mysql_query($queri5)or die(mysql_error());

    header("location:anggota");
} else if (isset($_POST['update_anggota']) == "Update") {
    require_once '../koperasi/config/koneksi.php';
    $Y1 = $_POST['tka'];
    $Y2 = $_POST['tna'];
    $Y3 = $_POST['tjk'];
    $Y4 = $_POST['ttla'];
    $Y5 = $_POST['tta'];
    $Y6 = $_POST['taa'];
    $Y7 = $_POST['tha'];
    $Y8 = $_POST['tia'];
    $perintah = "UPDATE anggota SET  namaanggota='$Y2', jk='$Y3', tempat_lahir='$Y4' ,tgl_lahir='$Y5', alamat='$Y6',hp='$Y7' ,noidentitas='$Y8' WHERE kode_anggota='$Y1'";
    $hasil = mysql_query($perintah)or die(mysql_error());

    header("location:anggota");
} else if (isset($_POST['add_simpan']) == "Add") {
    $P1 = $_POST['a1'];
    $P2 = $_POST['a2'];
    $P3 = $_POST['a3'];
    $P4 = $_POST['a4'];
    require_once '../koperasi/config/koneksi.php';
    $queri = mysql_query("select MAX(saldo) from simpanan where noanggota='$P2'");
    while ($d = mysql_fetch_array($queri)) {
        $a = $d[0];
    }
    $f = $a + $P4;
    $queri8 = "insert into simpanan (kode, noanggota, id_jenis,jumlah,saldo) values ('$P1', '$P2', '$P3', '$P4','$f')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    header("location:report_tabungan");
} else if (isset($_POST['update_simpan']) == "Update") {
    require_once '../koperasi/config/koneksi.php';
    $P1 = $_POST['a1'];
    $P2 = $_POST['a2'];
    $P3 = $_POST['a3'];
    $P4 = $_POST['a4'];
    $perintah = "UPDATE simpanan SET  id_jenis='$P3', jumlah='$P4' WHERE kode='$P1'";
    $hasil = mysql_query($perintah)or die(mysql_error());

    header("location:report_tabungan");
} else if (isset($_POST['angsur']) == "ADD") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['k'];
    $queri = mysql_query("select anggota.namaanggota, pinjaman_header.jumlah, pinjaman_detail.sisa_angsuran, pinjaman_header.id_pinjam ,pinjaman_detail.sisa_waktu from anggota,pinjaman_detail, pinjaman_header where anggota.kode_anggota = pinjaman_detail.anggota && anggota.kode_anggota= pinjaman_header.noanggota && anggota.kode_anggota='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $t = $d[0];
        $p = $d[1];
        $n = $d[2];
        $l = $d[3];
        $m = $d[4];
    }
    $ki = mysql_query("select max(angsuran) from pinjaman_detail where anggota='$cari'");
    while ($q = mysql_fetch_array($ki)) {
        $h = $q[0];
    }
    header("location:transaksi_angsuran?t=$t&p=$p&n=$n&l=$l&h=$h&m=$m&o=$cari");
} else if (isset($_POST['add_people']) == "Add") {
    require_once '../koperasi/config/koneksi.php';
    $L1 = $_POST['a'];
    $L2 = $_POST['b'];
    $L3 = $_POST['c'];
    $L4 = $_POST['d'];
    $L5 = $_POST['e'];
    $L6 = $_POST['f'];
    $L7 = $_POST['g'];
    $L8 = $_POST['h'];
    $L9 = $_POST['i'];


    $queri8 = "insert into people (kode, nama,username,password,email,tlf,levell,cabang,image) values ('$L1', '$L2', '$L3', '$L4', '$L5', '$L6', '$L7', '$L8', '$L9')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    header("location:people");
} else if (isset($_POST['update_people']) == "Update") {
    require_once '../koperasi/config/koneksi.php';
    $L1 = $_POST['a'];
    $L2 = $_POST['b'];
    $L3 = $_POST['c'];
    $L4 = $_POST['d'];
    $L5 = $_POST['e'];
    $L6 = $_POST['f'];
    $L7 = $_POST['g'];
    $L8 = $_POST['h'];
    $L9 = $_POST['i'];

    $perintah = "UPDATE people SET  nama='$L2', username='$L3', password='$L4' ,email='$L5', tlf='$L6',levell='$L7' ,cabang='$L8',image='$L9' WHERE kode='$L1'";
    $hasil = mysql_query($perintah)or die(mysql_error());

    header("location:people");
} else if (isset($_POST['find_cabang']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['j'];
    $queri = mysql_query("select * from cabang where kode='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $ok1 = $d[1];
        $ok2 = $d[2];
        $ok3 = $d[3];
        $ok4 = $d[4];
    }
    header("location:cabang?a=$ok1&b=$ok2&c=$ok3&d=$ok4");
} else if (isset($_POST['find_people']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['r'];
    $queri = mysql_query("select * from people where kode='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $ok1 = $d[1];
        $ok2 = $d[2];
        $ok3 = $d[3];
        $ok4 = $d[5];
        $ok7 = $d[6];
        $ok8 = $d[7];
        $ok9 = $d[8];
    }
    header("location:people?a=$ok1&b=$ok2&c=$ok3&d=$ok4&e=$ok7&f=$ok8&g=$ok9");
} else if (isset($_POST['add_angsur']) == "Add") {
    require_once '../koperasi/config/koneksi.php';
    $K1 = $_POST['z'];
    $K2 = $_POST['y'];
    $K3 = $_POST['x'];
    $K4 = $_POST['w'];
    $K5 = $_POST['v'];
    $K6 = $_POST['u'];
    $K7 = $_POST['t'];
    $K8 = $_POST['s'];
    $K9 = $_POST['r'];
    $rt = $_POST['tgl_ok'];

    $c = $K7 - 1;
    $v = $K3 - $K6;
    $queri8 = "insert into pinjaman_detail (kode_angsur, id_pinjam,anggota,angsuran,jumlah_bayar,sisa_angsuran,sisa_waktu,tgl_berikutnya) values ('$K9', '$K4', '$K8', '$K5', '$K6', '$v','$c','$rt')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    header("location:report_angsuran");
} else if (isset($_POST['find_angsur']) == "FIND") {
    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['e'];
    $queri = mysql_query("select pinjaman_detail.kode_angsur, pinjaman_detail.id_pinjam,pinjaman_detail.anggota,anggota.namaanggota,pinjaman_detail.angsuran,pinjaman_detail.tgl_bayar,pinjaman_detail.jumlah_bayar,pinjaman_detail.sisa_angsuran,pinjaman_detail.sisa_waktu,pinjaman_detail.denda from pinjaman_detail, pinjaman_header,anggota where pinjaman_detail.anggota=anggota.kode_anggota and pinjaman_detail.id_pinjam=pinjaman_header.id_pinjam and kode_angsur='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $g1 = $d[0];
        $g2 = $d[1];
        $g3 = $d[2];
        $g4 = $d[3];
        $g5 = $d[4];
        $g6 = $d[5];
        $g7 = $d[6];
        $g8 = $d[7];
        $g9 = $d[8];
        $g10 = $d[9];
    }
    header("location:report_angsuran?a=$g1&b=$g2&c=$g3&d=$g4&e=$g5&f=$g6&g=$g7&h=$g8&i=$g9&j=$g10");
} else if (isset($_POST['add_pinjam']) == "Add") {
    require_once '../koperasi/config/koneksi.php';
    $R1 = $_POST['1'];
    $R2 = $_POST['2'];
    $R3 = $_POST['3'];
    $R4 = $_POST['4'];
    $R5 = $_POST['5'];
    $R6 = $_POST['6'];
    $R7 = $_POST['7'];
    $R8 = $_POST['8'];
    $R9 = $_POST['9'];
    $R10 = $_POST['10'];
    $R11 = $_POST['11'];
    $R12 = $_POST['12'];
    $R13 = $_POST['13'];
    $R14 = $_POST['kode_angsur'];
    $R15 = $_POST['tgl_ok'];
    $queri8 = "insert into pinjaman_header (id_pinjam,noanggota,jumlah,lama,bunga,status,jaminan,nopol,masa_jaminan,nama_pemilik,alamat_pemilik,hp_pemilik,status_jaminan) values ('$R1', '$R2', '$R13', '$R3', '$R4', '$R5', '$R6', '$R7', '$R8', '$R9', '$R10', '$R11', '$R12')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    require_once '../koperasi/config/koneksi.php';
    $queri9 = "insert into pinjaman_detail (kode_angsur, id_pinjam,anggota,angsuran,jumlah_bayar,sisa_angsuran,sisa_waktu,tgl_berikutnya) values ('$R14', '$R1', '$R2', '0', '0','$R13', '$R3','$R15')";
    $hasil2 = mysql_query($queri9)or die(mysql_error());
    header("location:report_pinjam");
} else if (isset($_POST['update_pinjam']) == "Update") {
    require_once '../koperasi/config/koneksi.php';
    $R1 = $_POST['1'];
    $R2 = $_POST['2'];
    $R3 = $_POST['3'];
    $R4 = $_POST['4'];
    $R5 = $_POST['5'];
    $R6 = $_POST['6'];
    $R7 = $_POST['7'];
    $R8 = $_POST['8'];
    $R9 = $_POST['9'];
    $R10 = $_POST['10'];
    $R11 = $_POST['11'];
    $R12 = $_POST['12'];
    $R13 = $_POST['13'];
    $perintah = "UPDATE pinjaman_header SET jumlah='$R13', lama='$R3', bunga='$R4' ,status='$R5', jaminan='$R6',nopol='$R7' ,masa_jaminan='$R8',nama_pemilik='$R9',alamat_pemilik='$R10',hp_pemilik='$R11',status_jaminan='$R12' WHERE id_pinjam='$R1'";
    $hasil = mysql_query($perintah)or die(mysql_error());

    header("location:report_pinjam");
} else if (isset($_POST['add_tarik']) == "Add") {

    require_once '../koperasi/config/koneksi.php';
    $cari = $_POST['ib2'];
    $queri = mysql_query("select saldo from simpanan where noanggota='$cari'");
    while ($d = mysql_fetch_array($queri)) {
        $ok1 = $d[0];
    }
    require_once '../koperasi/config/koneksi.php';
    $u1 = $_POST['ib1'];
    $u2 = $_POST['ib2'];
    $u3 = $_POST['ib3'];
    $u4 = $ok1 - $u3;
    $queri8 = "insert into simpanan (kode,noanggota,tarik, saldo) values ('$u1','$u2', '$u3', '$u4')";
    $hasil = mysql_query($queri8)or die(mysql_error());
    header("location:report_tabungan");
}
?>