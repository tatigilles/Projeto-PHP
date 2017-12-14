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
                  <li class="active">Tablet e Ipad</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/eletronicos/go-pro.webp">
                                </div>
                        </div>
                        
                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>Câmera De Ação Sport HD, Tela De LCD 2" 5MP + Cartão 16GB Prata Mirage</h3>
                        <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o">(0)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$149,90</h3>
			    	<h5>6x de R$ 24,98 s/ juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="320" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
			    </div>

			    <div class="col-md-6"><br><br><hr>
			    	
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
				<td >VOID</td>
				</tr>
				<tr>
				<td>Tipo, Encaixe, Estilo</td>
				<td>Circumaural</td>
				</tr>
				<tr class="tabela-cor">
				<td>Cor</td>
				<td>Prata</td>
				</tr>
				<tr>
				<td>Material das Almofadas</td>
				<td >Microfibra</td>
				</tr>
				<tr class="tabela-cor">
				<td>Impedância</td>
				<td>32 Ohms a 1 kHz</td>
				</tr>
				</table>

        	</div>
        </section>


        <!-- Ofertas tablets-->
        <section id="tablet">
            <div class="container">
                <div class="row"><br>
                    <div class="font-destaque col-md-12">
                        <span ><i class="fa fa-mobile fa-2x"></i> TABLETS E IPADS</span>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/eletronicos/ipad.jpg" class="img-responsive"><br>
                        <a href="ipad32.php"><p>Ipad 32GB Wi-Fi Tela 9,7" Câmera 8MP Prata - Apple</a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(2)</i>
                        </div>
                            <span class="preco-por"><h4>Por:  R$ 2.999,99</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/eletronicos/tablet-samsung.jpg" class="img-responsive img-tecl"><br>
                        <a href="tablet-samsung.php"><p>Tablet Samsung Galaxy Tab S3 32GB 4G Tela 9.7" Quad-Core 2.15 GHz - Prata</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 2.499,99</h4></span>
                        
                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/eletronicos/ipad-pro.jpg" class="img-responsive img-banner2"><br>
                        <a href="ipadpro.php"><p>iPad Pro Cellular 128GB Wi-Fi 4G Tela Retina 9,7" Dourado - Apple</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(1)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 5.999,99</h4></span>
                    </div>

                
                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/eletronicos/tablet-samsung-tab.jpg" class="img-responsive "><br>
                        <a href="tablet-tab.php"><p>Tablet Samsung Galaxy Tab E T560 8GB Wi-Fi Tela 9.6" Android 4.4 Quad-Core - Preto</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(10)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 779,00</h4></span>
                    </div>
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas tablets-->



        <!-- Footer -->
 <?php include('includes/footer.php'); ?>

</body>
</html>