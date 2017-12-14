<?php

        if(!empty($_SESSION["username"])):

    ?>
<header>
    <div id="all">

        <header>
        <!-- *** TOP ***-->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 contact">
                            <p class="hidden-sm hidden-xs">Bem-vindo administrador!</p>
                        </div>
                        <div class="col-md-6">

                            <div class="login">
                                <a href="<?php echo BASE_URL ?>views/add-products.php">Adicionar produto</a>
                                <a href="<?php echo BASE_URL ?>views/list-products.php">Todos os Produtos</a>
                                
                                <?php else: ?> 
                                <a href="<?php echo BASE_URL ?>views/login.php"><i class="fa fa-sign-in"></i> <span class=" text-uppercase">Login Administrativo</span></a>
                                <?php endif; ?>
                                <a id="logout" href="<?php echo BASE_URL ?>helpers/logout.php">SAIR</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***-->
            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo BASE_URL ?>views/index.php">
                                <img src="img/logo.png" alt="Primme logo" class="img img-responsive">
                            </a>

                            <form class="navbar-left hidden-xs" role="search">
                              <div class="pesq">
                                <input type="text" class="form-pesq" placeholder="O que você deseja pesquisar?" style="min-width:550px; padding-left: 10px;">
                                <a href="#"><i class="fa fa-search fa-2x " style="margin-top: 5px;"></i></a>
                              </div>
                            </form>

                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>

                        <!--/.navbar-header -->
                         <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo BASE_URL ?>views/index.php" style="margin: 5px 50px 0px;">Inicio</a></li>
                                <a  href="<?php echo BASE_URL ?>views/cart.php"><i class="fa fa-shopping-cart fa-3x" style="padding-top: 17px;"></i></a>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div><!-- /#navbar -->
            </div><!-- *** NAVBAR END *** -->

            <!-- *** BARRA MENU *** -->
            <section class="bar-menu hidden-xs">
                <section class="container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown use-yamm yamm-fw">
                                    <a style="margin-left: 180px;" href="#" class="dropdown-toggle menu-drop" data-toggle="dropdown">INFORMÁTICA<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                                <li>
                                                    <div class="yamm-content">
                                                       <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="informatica.php"><img src="img/computador.png" class="hidden-xs"></a>
                                                             <ul>
                                                                <li><a href="informatica.php#notebooks"><i class="fa fa-laptop"></i>Notebook</a></li>
                                                                <li><a href="informatica.php#computadores"><i class="fa fa-desktop"></i>Computadores</a></li>
                                                                 <li><a href="informatica.php#monitores"><i class="fa fa-desktop"></i>Monitores</a></li>
                                                                <li><a href="informatica.php#roteadores"><i class="fa fa-wifi"></i>Roteadores</a></li>
                                                                 <li><a href="informatica.php#roteadores"><i class="fa fa-keyboard-o"></i>Teclados e Mouses</a></li>
                                                            </ul>
                                                        </div>
                                                       </div>
                                                   </div>
                                                </li>
                                        </ul>
                                        </li>

                                        <li class="dropdown use-yamm yamm-fw">
                                            <a href="#" class="dropdown-toggle menu-drop" data-toggle="dropdown">HARDWARE<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="yamm-content">
                                                               <div class="row">
                                                                <div class="col-md-12">
                                                                    <a href="hardware.php"><img src="img/banners/melhor-do-hardware.webp" class="hidden-xs" style="padding: 10px;"></a>
                                                                     <ul>
                                                                        <li><a href="hardware.php#placas-de-video">Placas de Vídeo</a></li>
                                                                        <li><a href="hardware.php#placas-de-video">Placas Mãe</a></li>
                                                                         <li><a href="hardware.php#processadores">Processadores</a></li>
                                                                        <li><a href="hardware.php#processadores">Memória</a></li>
                                                                         <li><a href="hardware.php#coolers">Fontes</a></li>
                                                                         <li><a href="hardware.php#coolers">Coolers</a></li>
                                                                    </ul>
                                                                </div>
                                                               </div>
                                                           </div>
                                                        </li>
                                                </ul>
                                                </li>
                                       

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle menu-drop" data-toggle="dropdown">ELETRÔNICOS<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="yamm-content">
                                                       <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="eletronicos.php"><img src="img/banners/bannertv.webp" class="hidden-xs"></a>
                                                             <ul>
                                                                <li><a href="eletronicos.php#tv">Televisores</a></li>
                                                                <li><a href="eletronicos.php#tv">Home Theater</a></li>
                                                                 <li><a href="eletronicos.php#tablet">Tablet e Ipad</a></li>
                                                            </ul>
                                                        </div>
                                                       </div>
                                                   </div>
                                                </li>
                                                
                                            </ul>
                                        </li>
                            </ul>
                </section>
        </section><!--/FIM BARRA MENU -->


</header>