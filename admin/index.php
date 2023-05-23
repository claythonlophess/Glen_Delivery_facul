<?php
include('config/config.php');
session_start();
if (!isset($_SESSION['session_codigo'])) {
    include('../util/funcoes.php');
    direciona_Para('login_form.php');
    exit;
} else {
    include('componentes/teste.php');
    include('componentes/tabela.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    include('../util/conecta.php');
    if (!isset($_REQUEST['tabela'])) {
        $tabela = 'admin';
    } else {
        $tabela = $_REQUEST['tabela'];
    }
    $acao = $_REQUEST['acao'];
    if (($acao == "descricao" || $acao == "perfil" || $acao == "pesquisa" || $acao == "pesquisa-viatura") &&  $tabela == "funcionario") {
        include("usuario/controller.php");
    } else
    if (($acao == "descricao" || $acao == "pesquisa") &&  $tabela == "viatura") {
        include("viatura/controller.php");
    } else
    if (($acao == "descricao" || $acao == "pesquisa") &&  $tabela == "pedido") {
        include("usuario/pedido/controller.php");
    } else
    if (($acao == "descricao" || $acao == "pesquisa-cliente") &&  $tabela == "cliente") {
        include("usuario/controller.php");
    } else {
        require("html/head.php");
    ?>

        <body>
            <?php
            require("html/header.php");
            require("html/sidebar.php");
            ?>
            <div class="main">
                <?php
                if ($tabela == "funcionario" || $tabela == "cliente") {
                    include("usuario/controller.php");
                } else
                 if ($tabela == "viatura") {
                    include("viatura/controller.php");
                } else 
                 if ($tabela == "pedido") {
                    include("usuario/pedido/controller.php");
                } else 
                if ($tabela == "admin") {
                    include("usuario/admin_controller.php");
                } else 
                if ($tabela == "config") {
                    include("config/controller.php");
                } else
                    include("../pages-error-404.html");
                ?>
            </div>
        <?php

        require("html/script.php");
        import_ajax("../util/ajax/ajax.php");
    }
        ?>
        </body>

    </html>
<?php } ?>