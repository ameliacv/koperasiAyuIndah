<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <h1>Data Simpanan Koperasi</h1>
    <form id="form1" name="form1" method="post" action="">

        <div class="row">

            <div class="large-12 columns">

                <div class="row collapse">

                    <div class="small-10 columns">
                        <input type="text" placeholder="Kode Anggota" name="kl" onkeyup="oke(this)" />
                    </div>

                    <div class="small-2 columns">
                        <input type="submit" name="find_tab" id="button1" class="button postfix" value="FIND" />
                    </div>

                </div>

            </div>

        </div>        
    </form>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Tanggal</th>
                <th>Kredit</th>
                <th>Debet</th>
                <th>Saldo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['find_tab']) == "FIND") {
                require_once '../koperasi/config/koneksi.php';
                $cari = $_POST['kl'];
                $queri = mysql_query("select * from simpanan where noanggota='$cari'");
                while ($d = mysql_fetch_array($queri)) {
                    $ok7 = $d[0];
                    $ok1 = $d[2];
                    $ok2 = $d[3];
                    $ok3 = $d[5];
                    $ok4 = $d[6];
                    $ok5 = $d[7];
                    ?>
                    <tr>
                        <td data-th="Kode Simpan"><?php echo"$ok7"; ?></td>
                        <td data-th="Tanggal"><?php echo"$ok1"; ?></td>
                        <td data-th="Kredit"><?php echo"$ok3"; ?></td>
                        <td data-th="Debet"><?php echo"$ok4"; ?></td>
                        <td data-th="Saldo"><?php echo"$ok5"; ?></td>

                        <td data-th="Action"><a href="transaksi_simpan?ks=<?php echo"$ok7"; ?>"><img src="image/ok.png"/></a> | <a href="delete?ks=<?php echo"$ok7"; ?>"><img src="image/ok1.png"/></a> </td>
                    </tr>
                    <?php
                }
                require_once '../koperasi/config/koneksi.php';

                $hihi = mysql_query("select anggota.namaanggota, anggota.alamat, cabang.nama from anggota,cabang where anggota.id_cabang=cabang.id_cabang and anggota.kode_anggota='$cari'");
                while ($haha = mysql_fetch_array($hihi)) {
                    $k1 = $haha[0];
                    $k2 = $haha[1];
                    $k3 = $haha[2];
                }
            }
            ?>
        <label>Nama Nasabah : <?php echo"$k1"; ?></label>
        <label>Alamat Nasabah : <?php echo"$k2"; ?></label>
        <label>Kantor Cabang : <?php echo"$k3"; ?></label>
        </tbody>
    </table>
    <ul class="button-group round">
        <li>    <a href="transaksi_simpan.php" class="button">TRANSAKSI SIMPANAN</a> </li>
        <li>    <a href="transaksi_penarikan.php" class="button">TRANSAKSI PENARIKAN</a> </li>
        <li><a href="print/print_tabungan.php?ol=<?php echo"$cari"; ?> " class="button">PRINT</a></li>
    </ul>
</div>
<?php
include '../koperasi/config/koneksi.php';
session_start();
$ok = $_SESSION['login_user'];
$queri2 = mysql_query("select levell from people where username ='$ok'");
while ($h1 = mysql_fetch_array($queri2)) {
    $j1 = $h1[0];
}
if ($j1 == "PIMPINAN") {
    include '../koperasi/sidebar/sidebar_pim.php';
} else if ($j1 == "CUSTOMER SERVICE") {
    include '../koperasi/sidebar/sidebar_cs.php';
} else if ($j1 == "TELLER") {
    include '../koperasi/sidebar/sidebar_teller.php';
}
?>
<?php include('../koperasi/footer/footer.php'); ?>