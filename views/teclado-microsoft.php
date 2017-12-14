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
                  <li><a href="informatica.php">Informática</a></li>
                  <li class="active">Teclado</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/teclados/teclado2.jpg" width="100%">
                                </div>
                        </div>

                    </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>Teclado - Usb - Microsoft Natural Ergonomic Keyboard 4000 - Preto - B2m-00012</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$ 489,99</h3>
			    	<h5>10x de R$ 49,99 sem juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="360" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
        			<p>Especificações

                <P>Teclado com interface USB v2.0, layout Americano (Inglês), 104 teclas 19 extras, interface USB v2.0, pezinho retrátil para ajuste de altura / inclinação.</p>



        </section>


        <!-- ofertas teclados e mouses -->
        <section id="teclados-mouses">
            <div class="container">
                <div class="row">
                    <div class="font-destaque col-md-12">
                        <span ><i class="fa fa-keyboard-o fa-2x"></i>OFERTAS RELACIONADAS</span>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/teclados/teclado-gamer.webp" class="img-responsive">
                        <a href="teclado-gamer.php">Teclado Gamer Multimídia Pcyes Ark USB 7 Cores de LED Abnt2</a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 169,00</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/teclados/teclado1.jpg" class="img-responsive img-tecl">
                        <a href="teclado-red.php">Teclado Gaming ABNT LED Mecânico USB 700K Cherry Red Cougar</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 589,00</h4></span>
                        
                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/teclados/teclado2.jpg" class="img-responsive img-banner2">
                        <a href="teclado-microsoft.php">Teclado - Usb - Microsoft Natural Ergonomic Keyboard 4000 - Preto - B2m-00012</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(7)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 489,99</h4></span>
                    </div>

                
                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/teclados/teclado3.jpg" class="img-responsive ">
                        <a href="teclado-combo.php">Combo Mouse e Teclado Wireless Logitech MK220</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 88,75</h4></span>
                    </div>
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas teclados e mouses-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>