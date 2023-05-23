<?php
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
?><main id="main" class="main">

  <div class="pagetitle">
    <h1>Viatura</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-12">
            <?php
            $nome_atributos = array("matricula", "modelo", "data_aquisicao", "tipo", "nr_chapa", "funcionario", "status");

            $linha = "";
            $id_modal = "viatura-modal";
            $index = 0;
            $tatus;
            $cor;
            while ($dao->registros = $dao->resultado->FetchNextObj()) {
              setColorStatus($dao->registros->status);
              $linha .= '<tr data-index=' . $index . '>
                <td><a href="" data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->matricula . '</a></td>';
              //count($nome_atributos)-1 pois o ultimo eh o status que desejei modificar
              for ($i = 1; $i < count($nome_atributos)-1; $i++) {
                $vv = $nome_atributos[$i];
                $linha .= ' <td>' . $dao->registros->$vv . '</td>';
              }
              
              $linha .= ' <td><span class="badge ' . $cor . '">' . $status . '</span></td>
              </tr>';

              $index += 1;
            }
            card("Viaturas", $nome_atributos, $linha,  'ajax-viatura-1', "viatura", "pesquisa");
            ?>
      </div>
      <div class="col-12">

            <?php
        //    card("Viaturas", $nome_atributos, $linha,  'ajax-viatura', "viatura", "pesquisa");
            ?>

        <!-- model -->
        <div class="modal fade" id="<?php echo $id_modal ?>" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <!-- model-ajax
            ajax usa essa div para apresentar um modal -->
            <div class="ajax-modal modal-content"></div>
          </div>
        </div><!-- End Vertically centered Modal-->


      </div>

    </div>
  </section>

</main><!-- End #main -->