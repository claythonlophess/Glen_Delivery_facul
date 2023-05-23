<?php
$classe = "cliente";
$acao_pesqisa_ajax = "pesquisa-cliente";
$status = "Ativo";
$cor = "bg-primary";
$corErro = "bg-secondary";

function setColorStatus($status1)
{
  global $status, $cor, $corErro;

  if ($status1 == 1) {
    $status = "Ativo";
    $cor = "bg-primary";
    $corErro = "bg-secondary";
  } else {
    $status = "Inativo";
    $cor = "bg-secondary";
    $corErro = "bg-primary";
  }
};
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Clientes</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-12">
        <?php
        $linha = "";
        $id_modal = "cliente-modal";
        $index = 0;
        $tatus;
        $cor;
        $colunas =  array("Nome", "apelido",  "data_entrada","status");
        while ($dao->registros = $dao->resultado->FetchNextObj()) {
          setColorStatus($dao->registros->status);
          $linha .= '<tr data-index=' . $index . '>
            <td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'cliente\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome . '</a></td>';
          //count($nome_atributos)-1 pois o ultimo eh o status que desejei modificar
          for ($i = 1; $i < count($colunas)-1; $i++) {
            $vv = $colunas[$i];
            $linha .= ' <td>' . $dao->registros->$vv . '</td>';
          }
          
          $linha .= ' <td><span class="badge ' . $cor . '">' . $status . '</span></td>
          </tr>';

          $index += 1;
        }

        card("Clientes", $colunas, $linha, "ajax-model", $classe, $acao_pesqisa_ajax . "");
        ?>
      </div>
      <div class="col-12">
        <!--  PHP -->
        <?php
        
        ?>

      </div>
      <!-- model -->
      <div class="modal fade" id="<?php echo $id_modal ?>" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <!-- model ajax -->
          <div class="ajax-modal modal-content">

          </div>
        </div>
      </div><!-- End Vertically centered Modal-->


    </div>
  </section>

</main><!-- End #main -->