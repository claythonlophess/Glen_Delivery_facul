
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                <a class="nav-link collapsed " href="<?php echo $link ?>/NiceAdmin/admin/index.php?acao=dashboard&pesquisa=&ordem=&tabela=admin#">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                <a class="nav-link collapsed " href="<?php echo $link ?>/NiceAdmin/admin/index.php?acao=listar&pesquisa=&ordem=&tabela=pedido#">
                        <i class="bi bi-menu-button-wide"></i><span>Pedidos</span></i>
                    </a>
                </li>
                <a class="nav-link collapsed " href="<?php echo $link ?>/NiceAdmin/admin/index.php?acao=listar-cliente&pesquisa=&ordem=&tabela=cliente#">
                        <i class="bi bi-menu-button-wide"></i><span>Clientes</span></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed " href="<?php echo $link ?>/NiceAdmin/admin/index.php?acao=listar&pesquisa=&ordem=&tabela=funcionario#">
                        <i class="bi bi-menu-button-wide"></i><span>Motoristas</span></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo $link ?>/NiceAdmin/admin/index.php?acao=listar&pesquisa=&ordem=&tabela=viatura">
                        <i class="bi bi-menu-button-wide"></i><span>Viaturas</span></i>
                    </a>
                </li>
                
        <li class="nav-heading">Paginas</li>

<li class="nav-item">
<a  class="nav-link collapsed"  data-bs-toggle="modal" onclick="showDiscription('perfil',
    <?php if ($_SESSION['session_nivel']==0){echo $_SESSION['session_codigo'].',\'cliente\',\'NiceAdmin/index.php\''; }else {echo $_SESSION['session_codigo'].',\'funcionario\',\'NiceAdmin/admin/index.php\'';}?>
    )" data-bs-target="#perfil" class="btn-ajax text-primary" href="#">
        <i class="bi bi-person"></i>
        <span>Perfil</span>
    </a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo $link ?>/NiceAdmin/admin/logoff.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Sair</span>
    </a>
</li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->