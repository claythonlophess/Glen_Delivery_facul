<?php
session_start();
if ($_POST['login'] != '' && $_POST['senha'] != '') {
    include('../util/conecta.php');
    include('../util/funcoes.php');

    $sql = "select * from usuario where usuario='" . $_POST['login'] . "' and senha='" . $_POST['senha'] . "'";
    $resultado = $con->banco->Execute($sql);

    if ($registro = $resultado->FetchNextObj()) {

        $_SESSION['session_codigo'] = $registro->id;
        $_SESSION['session_usuario'] = $registro->usuario;
        $_SESSION['session_nivel'] = $registro->nivel;
        if (isset($_SESSION["session_codigo"])) {
            if ($_SESSION['session_nivel'] == 0) {
                $sql = "select * from usuario u join cliente c on u.id = c.id where u.id=" . $_SESSION['session_codigo'];
                $resultado = $con->banco->Execute($sql);
                if ($registro = $resultado->FetchNextObj()) {
                    $_SESSION['session_nome'] = $registro->nome;
                    $_SESSION['session_cidade'] = $registro->cidade;
                    $_SESSION['session_apelido'] = $registro->apelido;
                }
                header("Location:../index.php?acao=home&pesquisa=&ordem=&tabela=home#");
            } else  if ($_SESSION['session_nivel'] == 1) {
                $sql = "select * from usuario u join funcionario c on u.id = c.id where u.id=" . $_SESSION['session_codigo'];
                $resultado = $con->banco->Execute($sql);
                if ($registro = $resultado->FetchNextObj()) {
                    $_SESSION['session_nome'] = $registro->nome;
                    $_SESSION['session_cidade'] = $registro->cidade;
                    $_SESSION['session_apelido'] = $registro->apelido;
                }
                header("Location:index.php?acao=listar&pesquisa=&ordem=&tabela=funcionario#");
            } else  if ($_SESSION['session_nivel'] == 2) {
                $sql = "select * from usuario u join funcionario c on u.id = c.id where u.id=" . $_SESSION['session_codigo'];
                $resultado = $con->banco->Execute($sql);
                if ($registro = $resultado->FetchNextObj()) {
                    $_SESSION['session_nome'] = $registro->nome;
                    $_SESSION['session_cidade'] = $registro->cidade;
                    $_SESSION['session_apelido'] = $registro->apelido;
                }
                header("Location:index.php?acao=dashboard&pesquisa=&ordem=&tabela=admin#");
            }
        }
        exit;
    }

    alerta("usario nao valido");
    voltar();
    exit;
} else
    echo "vc precisa digitar usuario e senha";
