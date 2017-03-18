<?php
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php');
?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(no) from pinjaman_header");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">

    <?php
    if (isset($_GET['kp'])) {
        $queri1 = mysql_query("select * from pinjaman_header where id_pinjam='$_GET[kp]'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $k1 = $d1[1];
            $k2 = $d1[2];
            $k3 = $d1[3];
            $k4 = $d1[4];
            $k5 = $d1[5];
            $k6 = $d1[6];
            $k7 = $d1[7];
            $k8 = $d1[8];
            $k9 = $d1[9];
            $k10 = $d1[10];
            $k11 = $d1[11];
            $k12 = $d1[12];
            $k13 = $d1[13];
            $k14 = $d1[14];
        }
        ?>
        <form id="form2" name="form2" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Transaksi Peminjaman</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="1" id="textfield2"  required value="<?php echo$k1; ?>" readonly="true"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="2" value="<?php echo$k3; ?>"  readonly="true" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Pinjaman</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="13"  value="<?php echo$k4; ?>" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Lama Peminjaman</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="3"class="t2">
                        <option value="">Pilih Lama Peminjaman</option>
                        <option value="10">10 Bulan</option>
                        <option value="12">12 Bulan</option>
                        <option value="18">18 Bulan</option>
                        <option value="24">24 Bulan</option>

                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jasa Peminjaman</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="4"class="t2">
                        <option value="">Pilih Jasa Peminjaman</option>
                        <option value="1">1%</option>
                        <option value="2">2%</option>
                        <option value="3">3%</option>
                        <option value="4">4%</option>
                        <option value="5">5%</option>
                        <option value="6">6%</option>
                        <option value="7">7%</option>
                        <option value="8">8%</option>
                        <option value="9">9%</option>
                        <option value="10">10%</option>
                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Status Pinjaman</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="5"class="t2">
                        <option value="">Pilih Status</option>
                        <option value="BELUM LUNAS">Belum Lunas</option>
                        <option value="LUNAS">Lunas</option>
                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jaminan</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="6"class="t2">
                        <option value="">Pilih Jaminan</option>
                        <option value="BPKB MOTOR">BPKB Motor</option>
                        <option value="BPKB MOBIL">BPKB Mobil</option>
                        <option value="SERFITIKAT TANAH">Sertifikat Tanah</option>

                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nomor Polisi</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="7"  value="<?php echo$k9; ?>" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Masa Berlaku Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="8" value="<?php echo$k10; ?>" required /></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="9"  value="<?php echo$k11; ?>" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="10" value="<?php echo$k12; ?>"  required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. HP Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="11" value="<?php echo$k13; ?>"  required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Status Jaminan</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="12"class="t2">
                        <option value="">Pilih Status</option>
                        <option value="AKTIF">Aktif</option>
                        <option value="NON AKTIF">Tidak Aktif</option>
                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="update_pinjam" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {

        include '../koperasi/config/koneksi.php';
        $queri2 = mysql_query("select max(id_angsur) from pinjaman_detail");
        while ($d2 = mysql_fetch_array($queri2)) {
            $f1 = $d2[0];
            $w = $f1 + 1;
        }
        ?>

        <form id="form2" name="form2" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Transaksi Peminjaman</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="1" id="textfield2" placeholder="Kode Transaksi Peminjaman" required value="CP<?php echo$k; ?>" readonly="true"/></div>
            </div>
            <input type="hidden" name="kode_angsur" id="textfield2"  value="AS<?php echo$w; ?>" readonly="true"/>
            <input type="hidden" name="tgl_ok" id="textfield2" value="<?php print date('d-M-Y', strtotime('+30 days')); ?>"/>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode Anggota</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="2"  value="AN" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Jumlah Pinjaman</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="13"  placeholder="Jumlah Pinjaman" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Lama Peminjaman</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="3"class="t2">
                        <option value="">Pilih Lama Peminjaman</option>
                        <option value="10">10 Bulan</option>
                        <option value="12">12 Bulan</option>
                        <option value="18">18 Bulan</option>
                        <option value="24">24 Bulan</option>

                    </select></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jasa Peminjaman</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="4"class="t2">
                        <option value="">Pilih Jasa Peminjaman</option>
                        <option value="1">1%</option>
                        <option value="2">2%</option>
                        <option value="3">3%</option>
                        <option value="4">4%</option>
                        <option value="5">5%</option>
                        <option value="6">6%</option>
                        <option value="7">7%</option>
                        <option value="8">8%</option>
                        <option value="9">9%</option>
                        <option value="10">10%</option>
                    </select></div>
            </div>
            <div class="row">
                <input type="hidden" name="5" value="BELUM LUNAS" />

            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Jaminan</label></div>
                <div class="small-12 medium-7 column">
                    <select id="tjk" name="6">
                        <option value="">Pilih Jaminan</option>
                        <option value="BPKB MOTOR">BPKB Motor</option>
                        <option value="BPKB MOBIL">BPKB Mobil</option>
                        <option value="SERFITIKAT TANAH">Sertifikat Tanah</option>

                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nomor Polisi</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="7"  placeholder="Nomer Polisi" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Masa Berlaku Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="8"  placeholder="Nomer Polisi" required /></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="9"  placeholder="Nama Pemilik Jaminan" required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Alamat Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="10" placeholder="Alamat Pemilik Jaminan"  required /></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No. HP Pemilik Jaminan</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="11" placeholder="Alamat Pemilik Jaminan"  required /></div>
            </div>
            <div class="row">
                <input type="hidden" name="12" value="AKTIF" />

            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_pinjam" class="button" value="Add" /></div>

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