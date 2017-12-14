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
                  <li class="active">Placa de Video e Placa Mãe</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/hardware/placa-mae.jpg" width="100%">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/hardware/placa-mae2.jpg" width="100%">
                                </div>
                        </div>

                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>Placa Mae Gigabyte Micro Atx (1151) Ddr4 - Ga-h110m-h - 6ª Ger</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$ 1.184,99</h3>
			    	<h5>6x de R$ 197,49 s/ juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="367" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
        		<div class="font-destaque col-md-12">
        			<h3>INFORMAÇÕES DO PRODUTO</h3>
        		</div>

        		<div class="col-md-12">
        			<p>Placa mae gigabyte micro atx (1151) ddr4 - ga-h110m-h - 6ª ger</p>
					<br><hr>
        		</div>
         </section>


        <!-- Ofertas placas-->
        <section id="#placas-de-video">
            <div class="container">
                <div class="row"><br>
                    <div class="font-destaque col-md-12">
                        <span ><a href="#">PLACAS DE VIDEO, PLACA MÃE</span></a>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/hardware/placa-video-asus.jpg" class="img-responsive">
                        <a href="placa-de-video-asus.php"><p>Placa De Vídeo Asus Geforce Gtx 1060 Dual-Gtx1060-O3g, 3gb, Gddr5, 192 Bits</p></a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 1.184,99</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/hardware/placa-mae.jpg" class="img-responsive img-tecl">
                        <a href="placa-mae-giga.php"><p>Placa Mae Gigabyte Micro Atx (1151) Ddr4 - Ga-h110m-h - 6ª Ger</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 2.649,99</h4></span>
                        
                    </div>
                
                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/hardware/placa-video.jpg" class="img-responsive ">
                        <a href="placa-video.php"><p>Placa de Video GTX970 4GB G1 Gaming DDR5 PCI-E Gigabyte GV-N970G1 GAMING-4GD"</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$2.800,00</h4></span>
                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/hardware/placa-mae-am4.jpg" class="img-responsive img-tecl">
                        <a href="placa-mae.php"><p>Placa mãe AM4 - AsRock AB350M-HDV (Micro ATX)</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>R$ 409,00</h4></span>
                        
                    </div>
                </div>
            </div>
        </section><!-- Fim ofertas placas-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>