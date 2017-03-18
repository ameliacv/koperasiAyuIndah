<?php 
include '../koperasi/loginOK.php';
include('../koperasi/header/header.php'); ?>
<?php
include '../koperasi/config/koneksi.php';
$queri = mysql_query("select max(id_people) from people");
while ($d = mysql_fetch_array($queri)) {
    $ok1 = $d[0];
    $k = $ok1 + 1;
}
?>
<div class="small-12 medium-8 medium-push-4 large-10 large-push-2 columns">
    <?php
    if (isset($_GET['ku'])) {
        $queri1 = mysql_query("select * from people where kode='$_GET[ku]'");
        while ($d1 = mysql_fetch_array($queri1)) {
            $ok1 = $d1[1];
            $ok2 = $d1[2];
            $ok3 = $d1[3];
            $ok4 = $d1[4];
            $ok5 = $d1[5];
            $ok6 = $d1[6];         
        }
        ?>

        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode User</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a"  id="textfield2" placeholder="Kode User" readonly="true" required value="<?php echo$ok1; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama User</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="b"  id="textfield2" placeholder="Nama User" onkeyup="oke(this)" value="<?php echo$ok2; ?>" required  class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Username</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="c" id="textfield2" placeholder="Username" onkeyup="oke(this)" value="<?php echo$ok3; ?>" required  class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Password</label></div>
                <div class="small-12 medium-7 column"><input type="password" name="d" id="textfield2" placeholder="Password" onkeyup="oke(this)" value="<?php echo$ok4; ?>"required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Email</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="e" id="textfield2" placeholder="Email" onkeyup="oke(this)" required value="<?php echo$ok5; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No Handphone</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="f" id="textfield2" placeholder="No Handphone Cabang" onkeyup="oke(this)" value="<?php echo$ok6; ?>" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Level User</label></div>
                <div class="small-12 medium-7 column">
                    <select  name="g"class="t2">
                        <option value="">Pilih Level User</option>
                        <option value="TELLER">Teller</option>
                        <option value="PIMPINAN">Pimpinan</option>
                        <option value="CUSTOMER SERVICE">Customer Service</option>

                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Cabang Koperasi</label></div>
                <div class="small-12 medium-7 column">
                    <select name="h"class="t2">
                        <option value="">Pilih Cabang</option>
                        <?php
                        require 'config/koneksi.php';
                        $queri2 = mysql_query("select kode,nama from cabang");
                        while ($d2 = mysql_fetch_array($queri2)) {
                            $c1 = $d2[0];
                            $c2 = $d2[1];
                            ?>
                            <option value="<?php echo$c1; ?>"><?php echo$c2; ?></option>
                            <?php
                        }
                        ?>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Image</label></div>
                <div class="small-12 medium-7 column">
                    <input type="file" name="i" class="button postfix">
                    <h6>Max Image : 2Mb</h6>                    
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-4 column"></div>
                <div class="small-12 medium-6 large-8 column"><input type="submit" name="update_people" class="button" value="Update" /></div>

            </div>
        </form>
        <?php
    } else {
        ?>   
        <!--MUlai sisniiii.............................................................................................................-->
        <form id="form1" name="form1" method="post" action="action.php">
            <div class="row">
                <div class="small-12 medium-5 column"><label>Kode User</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="a"  id="textfield2" placeholder="Kode User" readonly="true" required value="KU<?php echo$k; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Nama User</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="b"  id="textfield2" placeholder="Nama User" onkeyup="oke(this)" required  class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Username</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="c" id="textfield2" placeholder="Username" onkeyup="oke(this)"required  class="t4"/></div>
            </div>

            <div class="row">
                <div class="small-12 medium-5 column"><label>Password</label></div>
                <div class="small-12 medium-7 column"><input type="password" name="d" id="textfield2" placeholder="Password" onkeyup="oke(this)" required  class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Email</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="e" id="textfield2" placeholder="Email" onkeyup="oke(this)" required value="<?php echo$k4; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>No Handphone</label></div>
                <div class="small-12 medium-7 column"><input type="text" name="f" id="textfield2" placeholder="No Handphone Cabang" onkeyup="oke(this)" required value="<?php echo$k4; ?>" class="t4"/></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Level User</label></div>
                <div class="small-12 medium-7 column">
                    <select  name="g"class="t2">
                        <option value="">Pilih Level User</option>
                        <option value="TELLER">Teller</option>
                        <option value="PIMPINAN">Pimpinan</option>
                        <option value="CUSTOMER SERVICE">Customer Service</option>

                    </select></div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Cabang Koperasi</label></div>
                <div class="small-12 medium-7 column">
                    <select name="h"class="t2">
                        <option value="">Pilih Cabang</option>
                        <?php
                        require 'config/koneksi.php';
                        $queri2 = mysql_query("select kode,nama from cabang");
                        while ($d2 = mysql_fetch_array($queri2)) {
                            $c1 = $d2[0];
                            $c2 = $d2[1];
                            ?>
                            <option value="<?php echo$c1; ?>"><?php echo$c2; ?></option>
                            <?php
                        }
                        ?>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-5 column"><label>Image</label></div>
                <div class="small-12 medium-7 column">
                    <input type="file" name="i" class="button postfix">
                    <h6>Max Image : 2Mb</h6>                    
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-5 column"></div>
                <div class="small-12 medium-6 large-7 column"><input type="submit" name="add_people" class="button" value="Add" /></div>

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