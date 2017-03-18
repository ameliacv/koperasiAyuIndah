<?php 
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php'); ?>

<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <h1>Data Cabang Koperasi</h1>
    <form id="form1" name="form1" method="post" action="action.php">

        <div class="row">

            <div class="large-12 columns">

                <div class="row collapse">

                    <div class="small-10 columns">
                        <input type="text" placeholder="Kode Cabang" name="j" onkeyup="oke(this)" />
                    </div>

                    <div class="small-2 columns">
                        <input type="submit" name="find_cabang" id="button1" class="button postfix" value="FIND" />
                    </div>

                </div>

            </div>

        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Kode Cabang</th>
                <th>Nama Cabang</th>
                <th>Alamat Cabang</th>
                <th>No Handphone Cabang</th>
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
                ?>
                <tr>
                    <td data-th="Kode Cabang"><?php if (isset($iy1)) echo"$iy1";?></td>
                    <td data-th="Nama Cabang"><?php if (isset($iy2)) echo"$iy2"; ?></td>
                    <td data-th="Alamat Cabang"><?php if (isset($iy3)) echo"$iy3"; ?></td>
                    <td data-th="No Handphone"><?php if (isset($iy4)) echo"$iy4";?></td>
                    <td data-th="Action"><a href="add_cabang.php?kc=<?php if (isset($iy1))echo"$iy1"; ?>"><img src="image/ok.png"/></a> | <a href="delete.php?kc=<?php if (isset($iy1)) echo"$iy1"; ?>"><img src="image/ok1.png"/></a> </td>
                </tr>
                <tr>
                    <?php
                } else {
                    ?>
                    <?php
                    require_once 'config/koneksi.php';
                    $queri = mysql_query("select * from cabang");
                    while ($d = mysql_fetch_array($queri)) {
                        $ok1 = $d[1];
                        $ok2 = $d[2];
                        $ok3 = $d[3];
                        $ok4 = $d[4];
                        ?>

                        <td data-th="Kode Cabang"><?php echo"$ok1"; ?></td>
                        <td data-th="Nama Cabang"><?php echo"$ok2"; ?></td>
                        <td data-th="Alamat Cabang"><?php echo"$ok3"; ?></td>
                        <td data-th="No Handphone"><?php echo"$ok4"; ?></td>
                        <td data-th="Action"><a href="add_cabang.php?kc=<?php echo"$ok1"; ?>"><img src="image/ok.png"/></a> | <a href="delete.php?kc=<?php echo"$ok1"; ?>"><img src="image/ok1.png"/></a> </td>

                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>
    <ul class="button-group round">
        <li>    <a href="add_cabang.php" class="button">ADD CABANG</a> </li>
        <li><a href="print/print_cabang.php" class="button">PRINT</a></li>
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

