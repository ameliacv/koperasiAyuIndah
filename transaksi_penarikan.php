<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(id_simpanan) from simpanan");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">


    <form id="form1" name="form1" method="post" action="action.php">
         <div class="row">
                <div class="small-12 medium-5 column"><label>Kode</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="ib1" id="textfield2" readonly="true" placeholder="Kode" required value="CS<?php echo$k; ?>" class="t4"/></div>
            </div>
        <div class="row">
            <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
            <div class="small-12 medium-7 column"><input type="text" name="ib2" id="textfield2"  required value="AN"/></div>
        </div>         
        <div class="row">
            <div class="small-12 medium-5 column"><label>Jumlah Penarikan</label></div>
            <div class="small-12 medium-7 column"><input type="text" name="ib3" id="textfield2" placeholder="Jumlah Penarikan" required /></div>
        </div>
        <div class="row">
            <div class="small-12 medium-5 large-5 column"></div>
            <div class="small-12 medium-7 large-7 column"><input type="submit" name="add_tarik" class="button" value="Add" /></div>

        </div>
    </form>

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