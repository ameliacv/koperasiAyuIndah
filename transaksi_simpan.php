<?php 
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php'); ?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(id_simpanan) from simpanan");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <?php
    if (isset($_GET['ks'])) {
        $queri1 = mysql_query("select * from simpanan where kode='$_GET[ks]'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $k1 = $d1[0];
            $k2 = $d1[3];
            $k3 = $d1[5];
        }
        ?>
        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Simpan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a1" id="textfield2" readonly="true" required value="<?php echo$k1; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a2" id="textfield2" readonly="true" required value="<?php echo$k2; ?>" class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jenis Simpanan</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="a3"class="t2">
                        <option value="">Pilih Jenis Simpanan</option>
                        <option value="1">Simpanan Pokok</option>
                        <option value="2">Simpanan Wajib</option>
                        <option value="3">Simpanan Sukarela</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Simpanan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a4" id="textfield2" placeholder="Jumlah Simpanan" required value="<?php echo$k3; ?>"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 large-5 column"></div>
                <div class="small-12 medium-7 large-7 column"><input type="submit" name="update_simpan" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {
        ?>   
        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Simpan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a1" id="textfield2" readonly="true" placeholder="Kode Simpan" required value="CS<?php echo$k; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a2" id="textfield2"   required value="AN" class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jenis Simpanan</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="a3"class="t2">
                        <option value="">Pilih Jenis Simpanan</option>
                        <option value="1">Simpanan Pokok</option>
                        <option value="2">Simpanan Wajib</option>
                        <option value="3">Simpanan Sukarela</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Simpanan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a4" id="textfield2" placeholder="Jumlah Simpanan" required class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 large-5 column"></div>
                <div class="small-12 medium-7 large-7 column"><input type="submit" name="add_simpan" class="button" value="Add" /></div>

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