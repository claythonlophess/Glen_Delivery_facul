<?php
/**
 *  $colunas -> array de titulos das coluna
 *  $linhas -> array de linhas das tabela
 *  $ajax   -> nome para campo de pesquisa usando ajax(util/ajax/ajax.php)
 *  $classe -> nome da classe de negocio atual, eh a  que eh usada para redimensionar
 *  $accao  -> aceita valores (listar, pesquisa)
 */
function tabela($colunas, $linhas, $ajax, $classe, $accao)
{
?><div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
    <div class="datatable-top">
      <div class="datatable-dropdown">
        <label>
          <select class="datatable-selector" onchange="rows('pesquisa','','<?php echo $ajax; ?>','pedido',value)" name="rows">
            <option value="5" selected="">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select> entradas por pagina
        </label>
      </div>
      <div class="datatable-search">
        <input class="datatable-input" onkeyup="pesquisa('<?php echo $accao; ?>',this.value,'<?php echo $ajax; ?>','<?php echo $classe; ?>')" placeholder="Search..." type="search" title="Search within table">
      </div>
    </div>
    <div class="datatable-container">
      <table class="table table-borderless datatable datatable-table">
        <thead>
          <tr>
            <?php
            for ($i = 0; $i < count($colunas); $i++) {
            ?>
              <th data-sortable="true"><a href="#" class="datatable-sorter"><?php echo $colunas[$i] ?></a></th>
            <?php
            }
            ?>
          </tr>
        </thead>
        <!-- ajax -->
        <tbody class="<?php echo $ajax; ?>">
          <?php
          echo $linhas;
          ?>
        </tbody>
      </table>
    </div>
    <div class="datatable-bottom">
      <div class="datatable-info">Mostrando 1 de 5 Paginas</div>
      <nav class="datatable-pagination">
        <ul class="datatable-pagination-list"></ul>
      </nav>
    </div>
  </div>
<?php
}
?>