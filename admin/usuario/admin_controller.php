<?php
//inclui a partir do index
include('../util/db_funcoes.php');

$dao = new db_funcoes();

$acao = $_REQUEST['acao'];
$tabela = "usuario";

function pedidos()
{ 
   global $dao;
    // tabelas na base de dados
    $tabela = array('pedido');
    // atributos a serem retornados
    $atributos  = "count(*) as total,((select COUNT(*) from pedido where status = 1)/COUNT(*)*100) as percentagem";
    // condicoes de selecao
    $condicoes = "id like '%'";
    // execucao de sql
  $dao->con->debug(false);

    $dao->listar($tabela ,$atributos ,$condicoes , false);
    
    return  $dao;
}
function last_day_user()
{ 
   global $dao;
    // tabelas na base de dados
    $tabela = array('cliente');
    // atributos a serem retornados
    $atributos  = "count(*) as 'count',(select COUNT(*) from cliente) as total";
    // condicoes de selecao
    $condicoes = "data_entrada > CURRENT_DATE";
    // execucao de sql
  $dao->con->debug(false);

    $dao->listar($tabela ,$atributos ,$condicoes , false);
    
    return  $dao;
}

if ($acao == 'dashboard') {
     // tabelas na base de dados
     $tabela = array('usuario', "funcionario", "viatura");
     // atributos a serem retornados
     $atributos  = "a.status, a.nivel, b.*, c.funcionario ,c.matricula as viatura, c.id as id_viatura";
     // condicoes de selecao
     $condicoes ="a.id = b.id and c.funcionario = a.id";
    $dao->listar($tabela ,$atributos ,$condicoes , true);
    include('admin.php');
}

if ($acao == 'gravar_incluir') {
    $dao->gravar($tabela, array('descricao', "regiao"), array($_REQUEST['descricao'], $_REQUEST['regiao']));
    $dao->listar($tabela, "descricao", $_REQUEST['pesquisa'], $_REQUEST['ordem'], false);
    require('cidade_listar.php');
}

if ($acao == 'gravar_alterar') {
    $dao->alterar($tabela, array('descricao', "regiao"), array($_REQUEST['descricao'], $_REQUEST['regiao']), $_REQUEST['codigo']);
    $dao->listar($tabela, "descricao", $_REQUEST['pesquisa'], $_REQUEST['ordem'], false);
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
    $dao->selecionaPorId(array('usuario', "funcionario"),  "a.id", $_REQUEST['codigo'], true);
    if ($dao->registros = $dao->resultado->FetchNextObj()) {
        $id_modal = "motoristas-modal";
        $titulo = "Detalhes do Motorista";
        $nome_atributos = array("usuario", "email", "nivel", "status");
        $atributos = array($dao->registros->usuario, $dao->registros->email, $dao->registros->nivel, $dao->registros->status);

        echo modal($id_modal, $titulo, $nome_atributos, $atributos);
    } else {
        echo "Nao encontado";
    }
}
if ($acao == 'pesquisa') {
    $tabela = array('usuario', "funcionario", "viatura");
    $condicoes = "a.id = b.id and b.nome like '%". $_REQUEST['codigo']."%'";
    $colunasRetornadas = "a.status, a.nivel, b.*, c.funcionario ,c.matricula as viatura, c.id as id_viatura ";
    $dao->listar($tabela, $colunasRetornadas ,$condicoes , true);
    $linha = "";
    $id_modal = "motoristas-modal";
    $index = 0;
    $tatus;
    $cor;
    $linha="";
    
         $erro ="";
         $colunas =  array("Motorista", "Viatura", "Cidade", "satatus");
         while ($dao->registros = $dao->resultado->FetchNextObj()) {
           if ($dao->registros->status == 1) {
             $status = "Ativo";
             $cor = "bg-primary";
             $corErro = "bg-secondary";
           }else{
            $status = "Inativo";
            $cor = "bg-secondary";
            $corErro = "bg-primary";
           }
           $linha .= '<tr data-index=' . $index . '>
                        <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'funcionario\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome . '</a></td>
 
                        ';
                        if($dao->registros->id ==$dao->registros->funcionario ){
                          $linha .= ' <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros-> id_viatura . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->viatura . '</a></td>';
                        } else{
                          $linha .= ' <td class="badge ' . $corErro . '"><i class="bi bi-exclamation-triangle"></i>' . $erro . '</td>';
                        }
                          $linha .= '
                        <td>' . $dao->registros->nivel . '</td>
                        <td><span class="badge ' . $cor . '">' . $status . '</span></td>
                     </tr>';
           $index += 1;
         }
    echo $linha;
}
if ($acao == 'pesquisa-viatura') {
    $tabela = array('usuario', "funcionario", "viatura");
    $condicoes = "a.id = b.id and c.funcionario = a.id and b.nome like '%". $_REQUEST['codigo']."%'";
    $dao->listar($tabela, $colunasRetornadas ,$condicoes , true);
    $colunasRetornadas = "a.status, a.nivel, b.*, c.funcionario ,c.matricula as viatura, c.id as id_viatura ";

    $linha = "";
    $id_modal = "motoristas-modal";
    $index = 0;
    $tatus;
    $cor;
    $linha="";
    $erro ="";
    $colunas =  array("Motorista", "Viatura", "Cidade", "satatus");
    while ($dao->registros = $dao->resultado->FetchNextObj()) {
      if ($dao->registros->status == 1) {
        $status = "Ativo";
        $cor = "bg-primary";
        $corErro = "bg-secondary";
      }else{
       $status = "Inativo";
       $cor = "bg-secondary";
       $corErro = "bg-primary";
      }
      $linha .= '<tr data-index=' . $index . '>
                   <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'funcionario\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome . '</a></td>

                   ';
                   if($dao->registros->id ==$dao->registros->funcionario ){
                     $linha .= ' <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros-> id_viatura . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->viatura . '</a></td>';
                   } else{
                     $linha .= ' <td class="badge ' . $corErro . '"><i class="bi bi-exclamation-triangle"></i>' . $erro . '</td>';
                   }
                     $linha .= '
                   <td>' . $dao->registros->nivel . '</td>
                   <td><span class="badge ' . $cor . '">' . $status . '</span></td>
                </tr>';
      $index += 1;
    }
    echo $linha;
}

if ($acao == 'excluir') {
    $dao->excluir($tabela, "id", $_REQUEST['codigo']);
    $dao->listar($tabela, "descricao", $_REQUEST['pesquisa'], $_REQUEST['ordem'], false);
    require('cidade_listar.php');
}
