<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>
<?php
include '../koperasi/config/koneksi.php';
$queri2 = mysql_query("select max(id_angsur) from pinjaman_detail");
while ($d2 = mysql_fetch_array($queri2)) {
    $f1 = $d2[0];
    $w = $f1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">

    <form id="form1" name="form1" method="post" action="action.php">

        <div class="row">

            <div class="large-12 columns">

                <div class="row collapse">

                    <div class="small-10 columns">
                        <input type="text" placeholder="Nomer Anggota" name="k" onkeyup="oke(this)" />
                    </div>

                    <div class="small-2 columns">
                        <input type="submit" name="angsur" id="button1" class="button postfix" value="ADD" />
                    </div>

                </div>

            </div>

        </div>
    </form>

    <?php
    if (isset($_GET['t'])) {
        $iy1 = $_GET['t'];
        $iy2 = $_GET['p'];
        $iy3 = $_GET['n'];
        $iy4 = $_GET['l'];
        $iy6 = $_GET['m'];
        $iy5 = $_GET['h'];
        $iy7 = $_GET['o'];
        ?>
        <form id="form2" name="form2" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Angsur</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="r" id="textfield2" required value="AS<?php echo $w; ?>" readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="z" id="textfield2" required value="<?php if (isset($iy1)) echo $iy1; ?>" readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Saldo Awal</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="y" id="textfield2" required value="<?php if (isset($iy2)) echo $iy2; ?>" readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Sisa Saldo</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="x" id="textfield2" required value="<?php if (isset($iy3)) echo $iy3; ?>" readonly="true" /></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Pinjam</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="w" id="textfield2" required value="<?php if (isset($iy4)) echo $iy4 ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Angsuran Ke-</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="v" id="textfield2"  require value="<?php if (isset($iy5)) echo $iy5 + 1 ?>" readonly="true"/></div>
            </div>
            <input type="hidden" name="tgl_ok" id="textfield2" value="<?php print date('d-M-Y', strtotime('+30 days')); ?>"/>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Angsuran</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="u" id="textfield2" placeholder="Jumlah Angsuran" required class="t4"/></div>
            </div>
            <input type="hidden" name="t"  value="<?php echo $iy6 ?>" />
            <input type="hidden" name="s"  value="<?php echo $iy7 ?>" />
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_angsur" class="button" value="Add" /></div>

            </div>
        </form>
        <?php
    }else if ($_GET['la']) {
        $queri1 = mysql_query("select anggota.namaanggota, pinjaman_header.jumlah, pinjaman_detail.sisa_angsuran, pinjaman_header.id_pinjam , pinjaman_detail.jumlah_bayar from anggota,pinjaman_detail, pinjaman_header where anggota.kode_anggota = pinjaman_detail.anggota && anggota.kode_anggota= pinjaman_header.noanggota and kode_angsur='$_GET[la]'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $ok1 = $d1[0];
            $ok2 = $d1[1];
            $ok3 = $d1[2];
            $ok4 = $d1[3];
            $ok5 = $d1[4];
        }
        $ki = mysql_query("select max(angsuran) from pinjaman_detail where kode_angsur='$_GET[la]'");
        while ($q = mysql_fetch_array($ki)) {
            $h = $q[0];
        }
        ?>
        <form id="form2" name="form2" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required value="<?php echo $ok1; ?>" readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Saldo Awal</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required value="<?php echo $ok2; ?>" readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Sisa Saldo</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required value="<?php echo $ok3; ?>" readonly="true" /></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Pinjam</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required value="<?php echo $ok4 ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Angsuran Ke-</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tnc" id="textfield2"  require value="<?php echo $h5 + 1 ?>" readonly="true"/></div>
            </div>

            <div class="small-12 medium-7 column"><input type="text" name="tgl_ok" id="textfield2" value="<?php print date('d-M-Y', strtotime('+30 days')); ?>"/></div>


            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Angsuran</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tac" id="textfield2"  required value="<?php echo $ok5 ?>"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_cabang" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {
        ?>
        <form id="form2" name="form2" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required  readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Saldo Awal</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required  readonly="true" /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Sisa Saldo</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required  readonly="true" /></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Pinjam</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tkc" id="textfield2" required  readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Angsuran Ke-</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tnc" id="textfield2"  require  readonly="true"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Angsuran</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="tac" id="textfield2" placeholder="Jumlah Angsuran"  required /></div>
            </div>


            <div class="small-12 medium-7 column"><input type="hidden" name="tgl_ok" id="textfield2" value="<?php print date('d-M-Y', strtotime('+30 days')); ?>"/></div>

            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_angsur"  class="button" value="Add" /></div>

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