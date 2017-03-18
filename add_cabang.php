<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(id_cabang) from cabang");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <?php
    $ak = $_GET['kc'];
    if (isset($_GET['kc'])) {
        $queri1 = mysql_query("select * from cabang where kode='$ak'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $k1 = $d1[1];
            $k2 = $d1[2];
            $k3 = $d1[3];
            $k4 = $d1[4];
        }
        ?>

        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc"  id="textfield2" placeholder="Kode Cabang" required value="<?php echo$k1; ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tnc"  id="textfield2" placeholder="Nama Cabang" onkeyup="oke(this)" required value="<?php echo$k2; ?>" class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Cabang</label></div>
                <div class="small-12 medium-7 column"> <input type="text" name="tac" id="textfield2" placeholder="Alamat Cabang" onkeyup="oke(this)"required value="<?php echo$k3; ?>" class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Handphone Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="thc" id="textfield2" placeholder="No Handphone Cabang" onkeyup="oke(this)" required value="<?php echo$k4; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="update_cabang" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {
        ?>   
        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" placeholder="Kode Cabang" readonly="true" required value="CB<?php echo$k; ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tnc" id="textfield2" placeholder="Nama Cabang"  onkeyup="oke(this)" required class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tac" id="textfield2" placeholder="Alamat Cabang" onkeyup="oke(this)" required class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Handphone Cabang</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="thc" id="textfield2" placeholder="No Handphone Cabang" onkeyup="oke(this)" required class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_cabang" class="button" value="Add" /></div>

            </div>
        </form>
        <?php
    }
    ?>
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