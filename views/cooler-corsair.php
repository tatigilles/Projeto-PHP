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
                  <li class="active">Coolers e Fontes</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/hardware/cooler-corair.jpg" width="100%">
                                </div>
                        </div>

                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>WATER COOLER CORSAIR HYDRO SERIES H75, CW-9060015-WW - BOX</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(3)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$407,95</h3>
			    	<h5>10x de R$40,80 </h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="375" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
                <td>H75</td>
                </tr>
                <tr class="tabela-cor">
                <td>P/N</td>
                <td>CW-9060015-WW</td>
                </tr>
                <tr>
                <td>Material da placa fria</td>
                <td >Cobre</td>
                </tr>
                <tr class="tabela-cor">
                <td>Ventoinha</td>
                <td>120mm (x2) PWM SP120L</td>
                </tr>
                <tr>
                <td>Fluxo de ar da ventoinha</td>
                <td>54 CFM</td>
                </tr>
                </table>
            </div>
         </section>


        <!-- Ofertas cooler e fontes-->
        <section id="coolers">
            <div class="container">
                <div class="row">
                    <div class="font-destaque col-md-12">
                        <span > COLLER E FONTE</span>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/hardware/FONTE-CORSAIR.jpg" class="img-responsive">
                        <a href="fonte-cosair.php">FONTE CORSAIR CX430 430W 80 PLUS BRONZE, CP-9020046-WW/a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$233,98</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/hardware/cooler-corair.jpg" class="img-responsive img-banner2">
                        <a href="cooler-corsair.php">WATER COOLER CORSAIR HYDRO SERIES H75, CW-9060015-WW - BOX</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(7)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 407,95</h4></span>
                    </div>

                <div class="tecl-banner-infor col-md-3">
                        <img src="img/hardware/cooler-master.jpg" class="img-responsive">
                        <a href="cooler-master.php">COOLER PARA PROCESSADOR COOLER MASTER BLIZZARD T2, RR-T2-22FP-R1</a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 65,79</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/hardware/font-modular.jpg" class="img-responsive ">
                        <a href="fonte-modular.php">FONTE CORSAIR RM550 550W MODULAR, CERTIFICADO 80PLUS GOLD, PFC ATIVO - BOX</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 726,16</h4></span>
                    </div>
                    
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas coolers-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>