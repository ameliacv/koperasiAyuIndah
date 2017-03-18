<?php

include 'config/koneksi.php';
session_start();
$error = '';
if (isset($_POST['submit']) == "Login") {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:index");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $query = mysql_query("select * from people where password='$password' AND username='$username'");
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username;
            $query1 = mysql_query("select nama , levell from people where username='$username'");
            $d = mysql_fetch_array($query1);
            $ok = $d['nama'];
            if ($d['levell'] == "PIMPINAN") {
                header("location: single?k=$d[nama]");
            } else if ($d['levell'] == "TELLER") {
                header("location: single?k=$d[nama]");
            } else if ($d['levell'] == "CUSTOMER SERVICE") {
                header("location:single?k=$d[nama]");
            }
        } else {
            header("location:index?kk=error");
        }
    }
}
echo $error;
?>