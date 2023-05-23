<?php
//inclui a partir do index
include('util/db_funcoes.php');
include('admin/componentes/modal.php');

$dao = new db_funcoes();

$pedido = array();
$localizacao_r = array(); //recolha
$localizacao_e = array(); //entrega

if (!filter_has_var(INPUT_GET, "acao")) {
  $acao = "home";
} else {
  $acao = $_REQUEST['acao'];
}
$tabela = "pedido";


if ($acao == 'home') {
 
  include('home.php');
}
if ($acao == 'pacote') {
  include('order.php');
}
if ($acao == 'pacote-1') {
  array_push($pedido, $_REQUEST['altura'], $_REQUEST['largura'], $_REQUEST['peso'], $_REQUEST['m-l'], $_REQUEST['m-a'], $_REQUEST['m-p'], $_REQUEST['quantidade']);
  $_SESSION['pedido'] =  $pedido;
  include('order 1.php');
}

if ($acao == 'localizacao') {
  $pedido = $_SESSION['pedido'];
  array_push($pedido, $_REQUEST['titulo'], $_REQUEST['descricao'], "LOCALTIMESTAMP", "#id " . $_SESSION["session_codigo"]);
  $_SESSION['pedido'] =  $pedido;
  $atributos =  array("altura", "largura", "peso", "m_l", "m_a", "m_p", "quantidade", "titulo", "descricao", "data_entrada", "cliente");
  $dao->gravar("pedido", $atributos, $pedido);

  $_SESSION['id_pedido']  = $dao->con->banco->insert_id();
  //  echo '<script>alert("' . $dao->registros->id . '")</script>';
  //   $dao->gravar_img("pedido", $dao->registros->id);

  include('localizacao.php');
}
if ($acao == 'pagamento') {
  array_push($localizacao_r, $_REQUEST['tipo_estrutura_r'], $_REQUEST['apart_r'], $_REQUEST["andar_r"], "#id " . $_SESSION["session_codigo"], "#id " . $_SESSION["id_pedido"], "RECOLHA");
  array_push($localizacao_e,  $_REQUEST['tipo_estrutura_e'], $_REQUEST['apart_e'], $_REQUEST["andar_e"], "#id " . $_SESSION["session_codigo"], "#id " . $_SESSION["id_pedido"], "ENTREGA");
  $_SESSION['local_r'] =  $localizacao_r;
  $_SESSION['local_e'] =  $localizacao_e;

  $atributos =  array("estrutura", "apartamento", "andar", "usuario", "pedido", "tipo");
  $dao->gravar("localizacao", $atributos, $localizacao_r);
  $dao->gravar("localizacao", $atributos, $localizacao_e);

  include('payment.php');
}
if ($acao == 'listar') {
  include('pedido.php');
}
if ($acao == 'faq') {
  include('pages-faq.php');
}
if ($acao == 'contacto') {
  include('pages-contact.php');
}

if ($acao == 'perfil') {
  $dao->selecionaPorId(array('usuario', "cliente"),  "a.id", $_SESSION['session_codigo'], true);
  if ($dao->registros = $dao->resultado->FetchNextObj()) {
      $id_modal = "perfil";
      $titulo = "Perfil";
      $nome_atributos = array("usuario", "email", "nivel", "status");
      $atributos = array($dao->registros->usuario, $dao->registros->email, $dao->registros->nivel, $dao->registros->status);

      echo modal($id_modal, $titulo, $nome_atributos, $atributos);

  } else {
      echo "Nao encontado";
  }
}