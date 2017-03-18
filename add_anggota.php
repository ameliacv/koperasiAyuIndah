<?php 
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php'); ?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(no) from anggota");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <?php
    if (isset($_GET['ka'])) {
        $queri1 = mysql_query("select * from anggota where kode_anggota='$_GET[ka]'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $k1 = $d1[1];
            $k2 = $d1[3];
            $k3 = $d1[4];
            $k4 = $d1[5];
            $k5 = $d1[6];
            $k6 = $d1[7];
            $k7 = $d1[8];
            $k8 = $d1[9];
            $k9 = $d1[10];
        }
        ?>

        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tka" id="textfield2" onkeyup="oke(this)" placeholder="Kode Anggota" required readonly="true" value="<?php echo$k1; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tna" id="textfield2" onkeyup="oke(this)" placeholder="Nama Anggota" required value="<?php echo$k2; ?>" class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jenis Kelamin</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="tjk"class="t2">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Male</option>
                        <option value="P">Female</option>
                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Tempat Lahir</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="ttla" id="textfield2" onkeyup="oke(this)" placeholder="Tempat lahir" required value="<?php echo$k4; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Tanggal Lahir</label></div>
                <div class="small-12 medium-7 column"><input type="date" name="tta" id="textfield2" onkeyup="oke(this)" placeholder="Tanggal Lahir" required value="<?php echo$k5; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="taa" id="textfield2" onkeyup="oke(this)" placeholder="Alamat Lengkap Sesuai Identitas" required value="<?php echo$k6; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Handphone</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tha" id="textfield2" onkeyup="oke(this)" placeholder="No Handphone Anggota" required value="<?php echo$k7; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Identitas Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tia" id="textfield2" onkeyup="oke(this)" placeholder="No Identitas KTP" required value="<?php echo$k8; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Pekerjaan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tp" id="textfield2" onkeyup="oke(this)" placeholder="Pekerjaan" required value="<?php echo$k9; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="update_anggota" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {
        ?>   
        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tka" id="textfield2" placeholder="Kode Anggota" required value="AN<?php echo$k; ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tna" id="textfield2" placeholder="Nama Anggota" required  onkeyup="oke(this)" class="t4" onBlur="javascript:{
                                this.value = this.value.toUpperCase();
                            }"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jenis Kelamin</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="tjk"class="t2">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Male</option>
                        <option value="P">Female</option>
                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Tempat Lahir</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="ttla" id="textfield2" placeholder="Tempat lahir" onkeyup="oke(this)" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Tanggal Lahir</label></div>
                <div class="small-12 medium-7 column"><input type="date" name="tta" onkeyup="oke(this)" required class="datepicker"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="taa" id="textfield2" onkeyup="oke(this)" placeholder="Alamat Lengkap Sesuai Identitas" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Handphone</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tha" id="textfield2" onkeyup="oke(this)" placeholder="No Handphone Anggota" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. Identitas Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tia" id="textfield2" onkeyup="oke(this)" placeholder="No Identitas KTP" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Pekerjaan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tp" id="textfield2" onkeyup="oke(this)" placeholder="Pekerjaan" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Cabang Koperasi</label></div>
                <div class="small-12 medium-7 column">
                    <select name="tc"class="t2">
                        <option value="">Pilih Cabang</option>
                        <?php
                        require '../koperasi/config/koneksi.php';
                        $queri2 = mysql_query("select id_cabang,nama from cabang");
                        while ($d2 = mysql_fetch_array($queri2)) {
                            $c1 = $d2[0];
                            $c2 = $d2[1];
                            ?>

                            <option value="<?php echo$c1; ?>"><?php echo$c2; ?></option>
                            <?php
                        }
                        ?>
                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_anggota" class="button" value="Add" /></div>

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