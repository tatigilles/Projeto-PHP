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
        	 	  <li class="active">Computador</li>
        	 	</ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/computadores/computador5.jpg" width="100%">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/computadores/computador5.1.jpg" width="100%">
                                </div>
                        </div>

                    </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>IMac MMQA2BZ/A com Intel Core i5 Dual Core 8GB 1TB 21.5'' Prata - Apple</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(7)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por:R$ 6.299,99</h3>
			    	<h5>10x de R$ 629,99 s/ juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="340" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
        		<div class="font-destaque col-md-12">
        			<h3>INFORMAÇÕES DO PRODUTO</h3>
        		</div>

        		<div class="col-md-12">
        			<p>Mais importante do que criar uma experiência que chame sua atenção é criar uma que conquiste você. Este é o conceito do iMac. E essa ideia acabou de ficar ainda mais poderosa. O novo iMac vem com processadores potentes, chips gráficos com tecnologia de última geração, armazenamento inovador e conectividade de banda mais larga. E sabe como você vai ver tudo isso? Na tela Retina mais brilhante já feita para um iMac.</p>

					<br><hr>
        		</div>

				<div class="col-md-12 font-destaque">
					<h3>FICHA TÉCNICA</h3>
				</div>
				
				<table class="col-md-12 table-ficha">
				<tr class="tabela-cor">
				<td>Marca</td>
				<td >Apple</td>
				</tr>
				<tr>
				<td>Tamanho da Tela</td>
				<td>21.5"</td>
				</tr>
				<tr class="tabela-cor">
				<td>Cor</td>
				<td>Prata</td>
				</tr>
				<tr>
				<td>Memória Ram</td>
				<td >8GB</td>
				</tr>
				<tr class="tabela-cor">
				<td>Sistema Operacional</td>
				<td>Mac OS Sierra</td>
				</tr>
				<tr>
				<td>Processador</td>
				<td>Intel Core i5</td>
				</tr>
				<tr class="tabela-cor">
				<td>HD</td>
				<td>1TB</td>
				</tr>
				<tr>
				<td>Teclado</td>
				<td >Magic Keyboard</td>
				</tr>
                <tr class="tabela-cor">
                <td>Mouse</td>
                <td>Magic Mouse 2</td>
                </tr>
				</table>

        	</div>
        </section>


        <!-- Ofertas computadores-->
        <section id="computadores">
            <div class="container">
                <div class="row"><br>
                    <div class="font-destaque col-md-12">
                        <span ><i class="fa fa-desktop fa-2x"></i> PRODUTOS RELACIONADOS</span>
                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/computadores/computador2.webp" class="img-responsive img-tecl"><br>
                        <a href="pc-ubuntu.php"><p>Computador Intel Core i3 4GB 1TB Meu PC Ubuntu</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 1.498,00</h4></span>
                        
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/computadores/computador5.jpg" class="img-responsive"><br>
                        <a href="imac.php"><p>IMac MMQA2BZ/A com Intel Core i5 Dual Core 8GB 1TB 21.5'' Prata - Apple</p></a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 6.459,99</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/computadores/computador4.jpg" class="img-responsive "><br>
                        <a href="pc-gamer-neo.php"><p>Computador Gamer Neologic NLI68705 Intel Core i5-7400 8GB (Gtx 1050Ti 4GB) 1TB + Monitor 21,5"</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 3.549,00</h4></span>
                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/computadores/computador6.jpg" class="img-responsive "><br>
                        <a href="pc-dell.php"><p>All in One Dell 7ª Geração Intel Core i3 4GB 1TB LED 23.8 Full HD Linux Branco</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 3.063,00</h4></span>
                    </div>
                </div>
                <br>
            </div>
        </section><!-- Fim ofertas computadores-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>