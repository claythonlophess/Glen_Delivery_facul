<?php
function card($titulo, $colunas,$linhas,$ajax, $classe, $accao)
{
?>
  <div class="card recent-sales overflow-auto">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title"><?php echo $titulo ?> <span>| hoje</span></h5>
      <?php  tabela($colunas, $linhas, $ajax, $classe, $accao)?> 
    </div>
  </div>
<?php
}
function modnkal($titulo, $colunas,$linhas,$ajax, $classe, $accao)
{
?>

<?php
}
?>
