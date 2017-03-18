<?php require_once ('../koperasi/loginOK.php'); ?>
<?php require_once ('../koperasi/header/header.php'); ?>

<!-- iki konten -->

<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <a class="th round" href="#">
        <img src="image/logo.JPG">
    </a>
    <h1>KOPERASI AYU INDAH GROUP</h1>

    <h3> WELCOME
        <?php
        $h = $_GET['k'];
        echo $h;
        ?>
    </h3>
    <h5>
        Ayu Indah Group adalah perusahaan yang melayani dibidang jasa, adapun jasa yang kami tawarkan ialah;
        -Biro Perjalanan Tour & Tavel;- PARIWISATA, Pengantaran ke BANdARA JUANDA, CHALTER, & CHALTER DROP, Calling Visa.
        -Tiket Pesawat;-Air Asia, Lion Air, Tiger Airways, Royal Brunei, Garuda Indonesia, Citilink, Sriwijaya Air, Dll.
        -Koperasi;-Simpan Pinjam, Perpanjangan STNK.
        <br>
        <br>
        Address          : Jl. Raya Deandles No. 35, Paciran, Jawa Timur, Indonesia
        <br>
        Email            : ayuindah_travel@yahoo.com
        <br>
        Customer Service : 031 - 8672617
        <br>
        Website          : www.ayuindahgroup.com 
    </h5>

</div>

<!-- entek-entekane konten -->

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
<?php require_once ('../koperasi/footer/footer.php'); ?>