<?php
include('admin/config/config.php');

session_start();
if (!isset($_SESSION['session_codigo'])) {
    include('util/funcoes.php');
    direciona_Para('admin/login_form.php');
    exit;
} else {
    include('admin/componentes/teste.php');
    include('admin/componentes/tabela.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    include('util/conecta.php');
    if (!filter_has_var(INPUT_GET, "tabela")) {
        $tabela = "home";
    } else {
        $tabela =  $_REQUEST['tabela'];
    }
    if (!filter_has_var(INPUT_GET, "acao")) {
        $acao = "home";
    } else {
        $acao = $_REQUEST['acao'];
    }

    if ($acao == "perfil") {
             include("cliente/controller.php");
             exit;
    }
    require("admin/html/head.php");
    ?>

    <body>
        <?php
        require("admin/html/header.php");
        require("admin/html/sidebar-cliente.php");
        ?>
        <div class="main">
            <?php
            if ($tabela == "home" || $tabela == "pacote-1" || $tabela == "pacote" || $tabela == "pacote-2"
                || $tabela == "pacote-3" || $tabela == "localizacao" || $tabela == "pagamento" || $tabela == "pedido"|| $acao == "faq"
            ) {
                include("cliente/controller.php");
            } else
                include("pages-error-404.html");

            ?>
        </div>
    <?php
    require("util/funcoes.php");
    require("admin/html/script.php");
    import_ajax("util/ajax/ajax.php");
}
    ?>
    </body>

    </html>