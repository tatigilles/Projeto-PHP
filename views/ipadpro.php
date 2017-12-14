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
                  <li><a href="eletronicos.php">Eletrônicos</a></li>
                  <li class="active">Tablet e Ipad</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/eletronicos/ipad-pro.jpg">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/eletronicos/ipad-pro2.jpg" width="100%">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/eletronicos/ipad5.jpg" alt="">
                                </div>
                        </div>
                        
                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>iPad Pro Cellular 128GB Wi-Fi 4G Tela Retina 9,7" Dourado - Apple</h3>
                        <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o">(0)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$ 5.999,99</h3>
			    	<h5>6x de R$ 999,99 s/ juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="382" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
                        <p>O iPad Pro é mais do que a próxima geração do iPad. Ele é uma visão audaciosa para a computação pessoal no mundo moderno. Seu desempenho supera a maioria dos computadores. E ele transforma tarefas complexas em algo tão simples quanto tocar, deslizar o dedo ou usar um lápis. </p>

                        <p>Esse modelo de 9,7 polegadas é muito mais portátil e versátil do que tudo o que já se viu antes. Descubra tudo que o iPad Pro é capaz. Você vai ver que o seu próximo computador não precisa ser um computador.</p>

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
				<td>Modelo</td>
				<td>MLQ52BZ/A</td>
				</tr>
				<tr class="tabela-cor">
				<td>Cor</td>
				<td>Dourado</td>
				</tr>
				<tr>
				<td>Processador</td>
				<td >M9</td>
				</tr>
				<tr class="tabela-cor">
				<td>Tamanho do Display</td>
				<td>9.7"</td>
				</tr>
				<tr>
				<td>Resolução</td>
				<td>Resolução de 2048x1536 pixels, 264 pixels por polegada (ppp)</td>
				</tr>
				<tr class="tabela-cor">
				<td>Conexão</td>
				<td>Wi-Fi</td>
				</tr>
                <tr>
                <td>Memória Interna </td>
                <td>128GB</td>
                </tr>
                <tr class="tabela-cor">
                <td>Memória RAM</td>
                <td>4GB</td>
                </tr>
                 <tr>
                <td>Câmera traseira</td>
                <td>12MP</td>
                </tr>
                <tr class="tabela-cor">
                <td>Câmera frontal</td>
                <td>5MP</td>
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