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
                  <li class="active">Monitores</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/monitores/monitor23.webp">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/monitores/monitor23.1.webp" width="100%">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/monitores/monitor23.2.webp" alt="">
                                </div>
                        </div>

                         <div class="item">
                            <div class="col-md-12">
                                <img class="img-responsive" src="img/monitores/monitor23.3.webp" width="100%">
                            </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/monitores/monitor23.4.webp" alt="">
                                </div>
                        </div>

                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>Monitor LED 23,5" AOC Full HD Widescreen M2470SWD2</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: 625,00</h3>
			    	<h5>8x de R$ 78,12 sem juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="350" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
        			<p>O monitor AOC M2470SWD proporciona imagens com excelente definição. Com o monitor M2470SWD você assiste vídeos, filmes e visualiza imagens com resolução Full HD e cores nítidas! Ele conta com tela de 23,5" e tecnologia LED backlight, que economiza até 50% de energia em relação a um LCD comum! Compre o seu monitor AOC M2470SWD e pague em até 10x sem juros.</p>
					<br><hr>
        		</div>

				<div class="col-md-12 font-destaque">
					<h3>FICHA TÉCNICA</h3>
				</div>
				
				<table class="col-md-12 table-ficha">
				<tr class="tabela-cor">
				<td>Marca</td>
				<td >AOC</td>
				</tr>
				<tr>
				<td>Tipo de Monitor</td>
				<td>LCD</td>
				</tr>
				<tr class="tabela-cor">
				<td>Cor</td>
				<td>Preto</td>
				</tr>
				<tr>
				<td>Polegadas da Tela</td>
				<td >34"</td>
				</tr>
				<tr class="tabela-cor">
				<td>Resolução Máxima</td>
				<td>1920 x 1080 @ 60 Hz</td>
				</tr>
				<tr>
				<td>Resolução</td>
				<td>Full HD</td>
				</tr>
				</table>

        	</div>
        </section>


        <!-- Ofertas monitores-->
        <section id="monitores">
            <div class="container">
                <div class="row">
                    <div class="font-destaque col-md-12">
                        <span ><i class="fa fa-desktop fa-2x"></i> PRODUTOS RELACIONADOS</span>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/monitores/monitor-aoc.webp" class="img-responsive">
                        <a href="monitor-gamer.php">Monitor Gamer LED 21,5" AOC 75Hz 1ms Full HD G2260VWQ6</a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 699,00</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/monitores/monitor29.jpg" class="img-responsive img-banner2">
                        <a href="monitor-29.php">Monitor LED 29" Gamer LG 29UM69G Full HD</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(7)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 1.249,99</h4></span>
                    </div>

                <div class="tecl-banner-infor col-md-3">
                        <img src="img/monitores/monitor-curvo.jpg" class="img-responsive">
                        <a href="monitor-curvo.php">Monitor Curvo LED 34" Gamer LG 34UC79-G IPS Ultrawide Full HD</a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 3.229,00</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/monitores/monitor23.webp" class="img-responsive ">
                        <a href="monitor-23.php">Monitor LED 23,5" AOC Full HD Widescreen M2470SWD2</a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 625,00</h4></span>
                    </div>
                    
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas monitores-->



        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>