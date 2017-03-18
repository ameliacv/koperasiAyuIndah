<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>

<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <h1>Data Angsuran Koperasi</h1>
    <form id="form1" name="form1" method="post" action="action.php">

        <div class="row">

            <div class="large-12 columns">

                <div class="row collapse">

                    <div class="small-10 columns">
                        <input type="text" placeholder="Kode Angsuran" name="e" onkeyup="oke(this)" />
                    </div>

                    <div class="small-2 columns">
                        <input type="submit" name="find_angsur" id="button1" class="button postfix" value="FIND" />
                    </div>

                </div>

            </div>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Kode Angsuran</th>
                <th>Kode Pinjam</th>
                <th>Kode Anggota</th>
                <th>Nama Anggota</th>
                <th>Angsuran Ke-</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Sisa Ansgur</th>
                <th>Sisa Waktu</th>
                <th>Denda</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['a'])) {
                $iy1 = $_GET['a'];
                $iy2 = $_GET['b'];
                $iy3 = $_GET['c'];
                $iy4 = $_GET['d'];
                $iy5 = $_GET['e'];
                $iy6 = $_GET['f'];
                $iy7 = $_GET['g'];
                $iy8 = $_GET['h'];
                $iy9 = $_GET['i'];
                $iy10 = $_GET['j'];
                ?>
                <tr>
                    <td data-th="Kode Angsuran"><?php if (isset($iy1)) echo"$iy1"; ?></td>
                    <td data-th="Kode Pinjam"><?php if (isset($iy2)) echo"$iy2"; ?></td>
                    <td data-th="Kode Anggota"><?php if (isset($iy3)) echo"$iy3"; ?></td>
                    <td data-th="Nama"><?php if (isset($iy4)) echo"$iy4"; ?></td>
                    <td data-th="Ansguran Ke"><?php if (isset($iy5)) echo"$iy5"; ?></td>
                    <td data-th="Tanggal"><?php if (isset($iy6)) echo"$iy6"; ?></td>
                    <td data-th="Jumlah"><?php if (isset($iy7)) echo"$iy7"; ?></td>
                    <td data-th="Sisa Angsur"><?php if (isset($iy8)) echo"$iy8"; ?></td>
                    <td data-th="Sisa Waktu"><?php if (isset($iy9)) echo"$iy9"; ?></td>
                    <td data-th="Denda"><?php if (isset($iy10)) echo"$iy10"; ?></td>
                    <td data-th="Action"><a href="transaksi_angsuran?kr=<?php echo"$ok1"; ?>"><img src="image/ok.png"/></a> | <a href="delete?kr=<?php echo"$ok1"; ?>"><img src="image/ok1.png"/></a> </td>
                </tr>
                <?php
            } else {
                ?>
                <tr>
                    <?php
                    require_once 'config/koneksi.php';

                    $queri = mysql_query("select pinjaman_detail.kode_angsur, pinjaman_detail.id_pinjam,pinjaman_detail.anggota,anggota.namaanggota,pinjaman_detail.angsuran,pinjaman_detail.tgl_bayar,pinjaman_detail.jumlah_bayar,pinjaman_detail.sisa_angsuran,pinjaman_detail.sisa_waktu,pinjaman_detail.denda from pinjaman_detail, pinjaman_header,anggota where pinjaman_detail.anggota=anggota.kode_anggota and pinjaman_detail.id_pinjam=pinjaman_header.id_pinjam");
                    while ($d = mysql_fetch_array($queri)) {
                        $ok1 = $d[0];
                        $ok2 = $d[1];
                        $ok3 = $d[2];
                        $ok4 = $d[3];
                        $ok5 = $d[4];
                        $ok6 = $d[5];
                        $ok7 = $d[6];
                        $ok8 = $d[7];
                        $ok9 = $d[8];
                        $ok10 = $d[9];
                        ?>

                        <td data-th="Kode Angsuran"><?php echo"$ok1"; ?></td>
                        <td data-th="Kode Pinjam"><?php echo"$ok2"; ?></td>
                        <td data-th="Kode Anggota"><?php echo"$ok3"; ?></td>
                        <td data-th="Nama"><?php echo"$ok4"; ?></td>
                        <td data-th="Ansguran Ke"><?php echo"$ok5"; ?></td>
                        <td data-th="Tanggal"><?php echo"$ok6"; ?></td>
                        <td data-th="Jumlah"><?php echo"$ok7"; ?></td>
                        <td data-th="Sisa Angsur"><?php echo"$ok8"; ?></td>
                        <td data-th="Sisa Waktu"><?php echo"$ok9"; ?></td>
                        <td data-th="Denda"><?php echo"$ok10"; ?></td>
                        <td data-th="Action"><a href="transaksi_angsuran?kr=<?php echo"$ok1"; ?>"><img src="image/ok.png"/></a> | <a href="delete?kr=<?php echo"$ok1"; ?>"><img src="image/ok1.png"/></a> </td>

                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>
    <ul class="button-group round">
        <li>    <a href="transaksi_angsuran.php" class="button">TRANSAKSI ANGSURAN</a> </li>
        <li><a href="print/print_angsuran.php" class="button">PRINT</a></li>
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
