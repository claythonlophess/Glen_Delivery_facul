<?php
$classe = "funcionario";
$acao_pesqisa_ajax = "pesquisa";
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
    <h1>Motoristas</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-12">
        <?php
        $linha = "";
        $id_modal = "motoristas-modal";
        $index = 0;
        $tatus;
        $cor;
        $colunas =  array("Motorista", "Viatura", "Cidade", "satatus");
        while ($dao->registros = $dao->resultado->FetchNextObj()) {
          setColorStatus($dao->registros->status);
          $linha .= '<tr data-index=' . $index . '>
                       <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'funcionario\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome . '</a></td>

                       <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id_viatura . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->viatura . '</a></td>

                       <td>' . $dao->registros->nivel . '</td>
                       <td><span class="badge ' . $cor . '">' . $status . '</span></td>
                    </tr>';
          $index += 1;
        }

        card("Funcionario", $colunas, $linha, "ajax-model", $classe, $acao_pesqisa_ajax . "-viatura");
        ?>
      </div>
      <div class="col-12">
        <!--  PHP -->
        <?php
        $dao = listar();
        $linha = "";
        $erro = "";
        $colunas =  array("Motorista", "Viatura", "Cidade", "satatus");
        while ($dao->registros = $dao->resultado->FetchNextObj()) {
          setColorStatus($dao->registros->status);
           
          $linha .= '<tr data-index=' . $index . '>
                        <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id . ',\'funcionario\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->nome . '</a></td>
 
                        ';
          if ($dao->registros->id == $dao->registros->funcionario) {
            $linha .= ' <td><a data-bs-toggle="modal" onclick="showDiscription(\'descricao\',' . $dao->registros->id_viatura . ',\'viatura\')" data-bs-target="#' . $id_modal . '" class="btn-ajax text-primary">' . $dao->registros->viatura . '</a></td>';
          } else {
            $linha .= ' <td class="badge ' . $corErro . '"><i class="bi bi-exclamation-triangle"></i>' . $erro . '</td>';
          }
          $linha .= '
                        <td>' . $dao->registros->nivel . '</td>
                        <td><span class="badge ' . $cor . '">' . $status . '</span></td>
                     </tr>';
          $index += 1;
        }
        card("Funcionario", $colunas, $linha, "ajax-funcionario", $classe, $acao_pesqisa_ajax);
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