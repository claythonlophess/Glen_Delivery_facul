<?php
session_start();
if(isset($_SESSION['session_codigo'])){
    include('../util/funcoes.php');
    direciona_Para('pages-login.php');
    exit;
}else{
    include('../pages-login.php');
} ?>