<?php
$classe = "pedido";
$acao_pesqisa_ajax = "pesquisa";
$status = "Pendente";
$cor = "bg-primary";
$corErro = "bg-secondary";

function setColorStatus($status1)
{
  global $status, $cor, $corErro;

  if ($status1 == 0) {
    $status = "Pendente";
    $cor = "bg-primary";
    $corErro = "bg-secondary";
  } else {
    $status = "Entregue";
    $cor = "bg-success";
    $corErro = "bg-primary";
  }
};
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Pedidos</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-12">
        <?php
        $linha = "";
        $id_modal = "pedido-modal";
        $index = 0;
        $tatus;
        $cor;
        $colunas =  array("Pedido","titulo","cliente", "entregador", "Data in", "peso", "volume", "cor", "localizacao","status");

        while ($dao->registros = $dao->resultado->FetchNextObj()) {
          setColorStatus($dao->registros->status);
          // @important. no trecho ->  onclick="showDiscription(\'descricao\',' . $dao->registros->id . '&data=' . $dao->registros->data . ',\'pedido\') adicionei data por exigencia da regra de negocio
          $vv = $colunas[4];
          $linha .= '<tr data-index=' . $index . '>';
          $linha .= '<td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'pedido\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">#' . $dao->registros->id . '' . $dao->registros->$vv . '</a></td>';

          $linha .= ' <td>' . $dao->registros->titulo . '</td>';

          $linha .= '<td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id_cliente . ',\'cliente\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome_cliente . '</a></td>';

          $linha .= '<td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id_funcionario . ',\'funcionario\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome_funcionario . '</a></td>';

          //$i=3 pois os tres  primeiros  campos  desejei modificar
          //$ count($colunas)-1 pois o status (ultimo campo)  desejei modificar
          for ($i = 4; $i < count($colunas)-1 ; $i++) {
            $vv = $colunas[$i];
            $linha .= ' <td>' . $dao->registros->$vv . '</td>';
          }
          $linha .= ' <td><span class="badge ' . $cor . '">' . $status . '</span></td>
          </tr>';
          $index += 1;
        }

        card( "Pedidos", $colunas, $linha, "ajax-model", $classe, $acao_pesqisa_ajax);
        ?>
      </div>
      <div class="col-12">
        <!--  PHP -->
        <?php
      //  card("Funcionario", $colunas, $linha, "ajax-funcionario", $classe, $acao_pesqisa_ajax);
        ?>

      </div>
      

    </div>
  </section>

</main><!-- End #main -->