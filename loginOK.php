<?php


session_start();

if ($_SESSION['login_user']) {
 
} else {
    header("Location:index");
}
?> 