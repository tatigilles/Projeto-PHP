<!DOCTYPE html>
<html lang="pt-br">

<?php include('includes/headp.php'); 
include("../system/class.products.php");?>

<body>

    <?php include('includes/header.php'); ?>

	<!-- *** HOMEPAGE CAROUSEL ***-->
        <section class="container">
        	 <div class="home-carousel col-md-6">
        	 	<ol class="breadcrumb">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="hardware.php">Hardware</a></li>
                  <li class="active">Processadores e Memoria</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/hardware/memoria-corsair.jpg" width="100%">
                                </div>
                        </div>

                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>MEMORIA CORSAIR VENGEANCE LPX PRETO 4GB (1X4) 2400MHZ DDR4, CMK4GX4M1A2400C14</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(3)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$351,14</h3>
			    	<h5>10x de R$35,11</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="371" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
			    </div>

			    <div class="col-md-6"><br><hr>
			    	
			    	<h5><i class="fa fa-truck"></i> Calcule o valor do frete e o prazo de entrega estimado</h5>

                <form class="hidden-xs" role="search">
                    <input type="text" class="cep-frete" placeholder="Informe seu CEP" style="min-width:300px;">
                	<button class="btn-template-main btn-frete">OK</button>  
                </form>    
				</div>
            
        </section><!-- *** HOMEPAGE CAROUSEL END *** -->
        <hr>

		<!-- descrição do produto -->
        <section>
        	<div class="container">
                        
        		<div class="col-md-12 font-destaque">
                    <h3>FICHA TÉCNICA</h3>
                </div>
                
                <table class="col-md-12 table-ficha">
                <tr class="tabela-cor">
                <td>Marca</td>
                <td >Corsair</td>
                </tr>
                <tr>
                <td>Modelo</td>
                <td>CMK4GX4M1A2400C14</td>
                </tr>
                <tr class="tabela-cor">
                <td>Dissipador de calor</td>
                <td>Vengeance LPX</td>
                </tr>
                <tr>
                <td>Configuração da memória</td>
                <td >Dual / Quad Channel</td>
                </tr>
                <tr class="tabela-cor">
                <td>Frequência</td>
                <td>2400MHz</td>
                </tr>
                <tr>
                <td>Tipo de memória</td>
                <td>DDR4</td>
                </tr>
                <tr class="tabela-cor">
                <td>Formato da memória</td>
                <td >DIMM</td>
                </tr>
                <tr>
                <td>Perfil de desempenho</td>
                <td>XMP 2.0</td>
                </tr>
                <tr class="tabela-cor">
                <td>Cor</td>
                <td>Preta</td>
                </tr>
                <tr>
                <td>Tamanho da memória</td>
                <td >4GB Kit (1 x 4GB)</td>
                </tr>
                <tr class="tabela-cor">
                <td>Latência</td>
                <td>14-16-16-31</td>
                </tr>
                  <tr>
                <td>Voltagem</td>
                <td>1.2V</td>
                </tr>
                </table>
            </div>
         </section>


        <!-- Ofertas processadores-->
        <section id="processadores">
            <div class="container">
                <div class="row"><br>
                    <div class="font-destaque col-md-12">
                        <span ><i class="fa fa-desktop fa-2x"></i> PROCESSADORES E MEMORIA</span><br><br>
                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/hardware/processador-i7.jpg" class="img-responsive img-tecl"><br>
                        <a href="processadori7.php"><p>Prcessador Intel Core i7-7700k Kaby Lake LGA 1151 4.2GHZ 8MB cache, BX80677177700k</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 1.520,44</h4></span>
                        
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/hardware/memoria-corsair.jpg" class="img-responsive"><br>
                        <a href="memoria-corsair.php"><p>MEMORIA CORSAIR VENGEANCE LPX PRETO 4GB (1X4) 2400MHZ DDR4, CMK4GX4M1A2400C14</p></a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$351,14</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/hardware/processador-amd.webp" class="img-responsive "><br>
                        <a href="processador-amd.php"><p>PROCESSADOR AMD FX-8300 BLACK EDITION 3.3GHZ SOCKET AM3+ OCTA-CORE</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$454,43</h4></span>
                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/hardware/memoria-king.jpg" class="img-responsive "><br>
                        <a href="memoria-king.php"><p>MEMORIA KINGSTON HYPERX FURY 4GB (1X4) 1600MHZ WHITE, HX316C10FW/4 - BOX</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$204,44</h4></span>
                    </div>
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas processadores-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>