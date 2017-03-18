<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>

<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <h1>Data Pinjaman Koperasi</h1>
    <form id="form1" name="form1" method="post" action="find.php">

        <div class="row">

            <div class="large-12 columns">

                <div class="row collapse">

                    <div class="small-10 columns">
                        <input type="text" placeholder="Kode Pinjaman" name="w" onkeyup="oke(this)" />
                    </div>

                    <div class="small-2 columns">
                        <input type="submit" name="find_pinjam" id="button1" class="button postfix" value="FIND" />
                    </div>

                </div>

            </div>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Kode Pinjaman</th>               
                <th>Kode Anggota</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Lama</th>
                <th>Bunga</th>
                <th>Status</th>
                <th>Jaminan</th>
                <th>NOPOL</th>
                <th>Masa</th>      
                <th>Nama Pemilik</th>
                <th>Alamat</th>
                <th>No HP.</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['f1'])) {
                $iy1 = $_GET['f1'];
                $iy2 = $_GET['f2'];
                $iy3 = $_GET['f3'];
                $iy4 = $_GET['f4'];
                $iy5 = $_GET['f5'];
                $iy6 = $_GET['f6'];
                $iy7 = $_GET['f7'];
                $iy8 = $_GET['f8'];
                $iy9 = $_GET['f9'];
                $iy10 = $_GET['f10'];
                $iy11 = $_GET['f11'];
                $iy12 = $_GET['f12'];
                $iy13 = $_GET['f13'];
                $iy14 = $_GET['f14'];
                ?>
                <tr>
                    <td data-th="Kode Pinjaman"><?php if (isset($iy1)) echo"$iy1"; ?></td>
                    <td data-th="Kode Anggota"><?php if (isset($iy2)) echo"$iy2"; ?></td>
                    <td data-th="Tanggal"><?php if (isset($iy3)) echo"$iy3"; ?></td>
                    <td data-th="Jumlah"><?php if (isset($iy4)) echo"$iy4"; ?></td>
                    <td data-th="Lama"><?php if (isset($iy5)) echo"$iy5"; ?></td>
                    <td data-th="Bunga"><?php if (isset($iy6)) echo"$iy6"; ?></td>
                    <td data-th="Status"><?php if (isset($iy7)) echo"$iy7"; ?></td>
                    <td data-th="Jaminan"><?php if (isset($iy8)) echo"$iy8"; ?></td>
                    <td data-th="NOPOL"><?php if (isset($iy9)) echo"$iy9"; ?></td>
                    <td data-th="Masa"><?php if (isset($iy10)) echo"$iy10"; ?></td>
                    <td data-th="Nama Pemilik"><?php if (isset($iy11)) echo"$iy11"; ?></td>
                    <td data-th="Alamat"><?php if (isset($iy12)) echo"$iy12"; ?></td>
                    <td data-th="No HP."><?php if (isset($iy13)) echo"$iy13"; ?></td>
                    <td data-th="Status"><?php if (isset($iy14)) echo"$iy14"; ?></td>
                    <td data-th="Action"><a href="transaksi_pinjam?kp=<?php if (isset($iy1)) echo"$iy1"; ?>"><img src="image/ok.png"/></a> | <a href="delete?kp=<?php if (isset($iy1)) echo"$iy1"; ?>"><img src="image/ok1.png"/></a> </td>
                </tr>
                <?php
            } else {
                ?>
                <tr>
                    <?php
                    require_once 'config/koneksi.php';

                    $queri = mysql_query("select * from pinjaman_header ");
                    while ($d = mysql_fetch_array($queri)) {
                        $ok1 = $d[1];
                        $ok2 = $d[2];
                        $ok3 = $d[3];
                        $ok4 = $d[4];
                        $ok5 = $d[5];
                        $ok6 = $d[6];
                        $ok7 = $d[7];
                        $ok8 = $d[8];
                        $ok9 = $d[9];
                        $ok10 = $d[10];
                        $ok11 = $d[11];
                        $ok12 = $d[12];
                        $ok13 = $d[13];
                        $ok14 = $d[14];
                        ?>

                        <td data-th="Kode Pinjaman"><?php echo"$ok1"; ?></td>
                        <td data-th="Kode Anggota"><?php echo"$ok3"; ?></td>
                        <td data-th="Tanggal"><?php echo"$ok2"; ?></td>
                        <td data-th="Jumlah"><?php echo"$ok4"; ?></td>
                        <td data-th="Lama"><?php echo"$ok5"; ?></td>
                        <td data-th="Bunga"><?php echo"$ok6"; ?></td>
                        <td data-th="Status"><?php echo"$ok7"; ?></td>
                        <td data-th="Jaminan"><?php echo"$ok8"; ?></td>
                        <td data-th="NOPOL"><?php echo"$ok9"; ?></td>
                        <td data-th="Masa"><?php echo"$ok10"; ?></td>
                        <td data-th="Nama Pemilik"><?php echo"$ok11"; ?></td>
                        <td data-th="Alamat"><?php echo"$ok12"; ?></td>
                        <td data-th="No HP."><?php echo"$ok13"; ?></td>
                        <td data-th="Status"><?php echo"$ok14"; ?></td>
                        <td data-th="Action"><a href="transaksi_pinjam?kp=<?php echo"$ok1"; ?>"><img src="image/ok.png"/></a> | <a href="delete?kp=<?php echo"$ok1"; ?>"><img src="image/ok1.png"/></a> </td>

                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>
     <ul class="button-group round">
         <li>    <a href="transaksi_pinjam.php" class="button">TRANSAKSI PINJAM</a> </li>
         <li><a href="print/print_pinjaman.php" class="button">PRINT</a></li>
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
