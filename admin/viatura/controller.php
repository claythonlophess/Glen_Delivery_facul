<?php
//inclui a partir do index
include('../util/db_funcoes.php');

$dao = new db_funcoes();

$acao = $_REQUEST['acao'];
$tabela = "viatura";

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

if ($acao == 'gravar_alterar') {
    $dao->alterar($tabela, array('descricao', "regiao"), array($_REQUEST['descricao'], $_REQUEST['regiao']), $_REQUEST['codigo']);
    $tabela = array("viatura", "modelo", "marca_viatura", "funcionario");
    $atributos  = "a.*, b.descricao, c.descricao, d.nome";
    $condicoes = " a.funcionario = d.id and a.modelo = b.id and b.marca = c.id ";
    $dao->listar($tabela, $atributos, $condicoes, false);
    require('cidade_listar.php');
}

if ($acao == 'incluir') {
    $dao->selecionaPorId($tabela,  "id", $_REQUEST['codigo'], false);
    require('cidade_form.php');
}

if ($acao == 'alterar') {
    $dao->selecionaPorId($tabela,  "id", $_REQUEST['codigo'], false);
    require('cidade_form.php');
}

if ($acao == 'descricao') {
    include('componentes/modal.php');
    $dao->selecionaPorId(array('usuario', "viatura"),  "b.id", "a.id", true);
    if ($dao->registros = $dao->resultado->FetchNextObj()) {
        $id_modal = "motoristas-modal";
        $titulo = "Detalhes da Viatura";
        $nome_atributos = array("matricula", "modelo", "data_aquisicao", "tipo", "nr_chapa", "funcionario", "status");
        $atributos = array($dao->registros->matricula, $dao->registros->modelo, $dao->registros->data_aquisicao, $dao->registros->tipo, $dao->registros->nr_chapa, $dao->registros->funcionario, $dao->registros->status);

        echo modal($id_modal, $titulo, $nome_atributos, $atributos);
    } else {
        echo "Nao encontado";
    }
}

if ($acao == 'pesquisa') {
    // tabelas na base de dados
    $tabela = array("viatura", "modelo", "marca_viatura", "funcionario", "tipo_viatura");
    // atributos a serem retornados
    $atributos  = "a.id, a.status , a.matricula, a.modelo, a.data_aquisicao,a.nr_chapa, d.id, d.nome as funcionario, b.descricao as modelo, e.descricao as tipo, d.nome";
    // condicoes de selecao
    $condicoes = " a.funcionario = d.id and a.tipo =e.id and a.modelo = b.id and b.marca = c.id and a.matricula like '%" . $_REQUEST['codigo'] . "%'";
    // execucao de sql
    $dao->listar($tabela, $atributos, $condicoes, true);
    // Titulos das colunas
    $nome_atributos = array("matricula", "modelo", "data_aquisicao", "tipo", "nr_chapa", "funcionario", "status");

    $linha = "";
    $id_modal = "motoristas-modal";
    $index = 0;
    $tatus;
    $cor;
    while ($dao->registros = $dao->resultado->FetchNextObj()) {
        if ($dao->registros->status == 1) {
            $status = "Ativo";
            $cor = "bg-primary";
            $corErro = "bg-secondary";
        } else {
            $status = "Inativo";
            $cor = "bg-secondary";
            $corErro = "bg-primary";
        }
        $linha .= '<tr data-index=' . $index . '>
          <td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->matricula . '</a></td>';
        //count($nome_atributos)-1 pois o ultimo eh o status que desejei modificar
        for ($i = 1; $i < count($nome_atributos) - 1; $i++) {
            $vv = $nome_atributos[$i];
            $linha .= ' <td>' . $dao->registros->$vv . '</td>';
        }

        $linha .= ' <td><span class="badge ' . $cor . '">' . $status . '</span></td>
        </tr>';

        $index += 1;
    }
    echo $linha;
}

if ($acao == 'excluir') {
    $dao->excluir($tabela, "id", $_REQUEST['codigo']);
    $tabela = array("viatura", "modelo", "marca_viatura", "funcionario");
    $atributos  = "a.*, b.descricao, c.descricao, d.nome";
    $condicoes = " a.funcionario = d.id and a.modelo = b.id and b.marca = c.id ";
    $dao->listar($tabela, $atributos, $condicoes, false);
    require('cidade_listar.php');
}
