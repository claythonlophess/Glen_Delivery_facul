<?php
//inclui a partir do index
include('../util/db_funcoes.php');

$dao = new db_funcoes();

$acao = $_REQUEST['acao'];
$tabela = "config";
if ($acao == 'config') {
 include('configuacoes-gerais.php');
}
if ($acao == 'listar') {
    $tabela = array("viatura", "modelo", "marca_viatura", "funcionario", "tipo_viatura");
    $atributos  = "a.id,a.status, a.matricula, a.modelo, a.data_aquisicao,a.nr_chapa, d.id, d.nome as funcionario, b.descricao as modelo, e.descricao as tipo, d.nome";
    $condicoes = " a.funcionario = d.id and a.tipo =e.id and a.modelo = b.id and b.marca = c.id ";
    $dao->listar($tabela, $atributos, $condicoes, true);
    include('viatura.php');
}

if ($acao == 'gravar_incluir') {
    $dao->gravar($tabela, $tabela, array($_REQUEST['descricao'], $_REQUEST['regiao']));
    $tabela = array("viatura", "modelo", "marca_viatura", "funcionario");
    $atributos  = "a.*, b.descricao, c.descricao, d.nome";
    $condicoes = " a.funcionario = d.id and a.modelo = b.id and b.marca = c.id ";
    $dao->listar($tabela, $atributos, $condicoes, false);
    require('cidade_listar.php');
}


