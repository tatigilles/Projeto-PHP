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
                  <li class="active">Notebook</li>
                </ol>

        	 	 <div class="homepage owl-carousel">
                        <div class="item">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/notebook/dell-ispiron.png">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/notebook/dell-ispiron2.jpg" width="100%">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/notebook/dell-ispiron3.jpg" alt="">
                                </div>
                        </div>

                        <div class="item">

                                <div class="col-md-12">
                                    <img class="img-responsive" src="img/notebook/dell-ispiron4.jpg" width="100%">
                                </div>
                        </div>

                        <div class="item col-md-12">
                                    <img class="img-responsive" src="img/notebook/dell-ispiron5.jpg" alt="">
                                </div>
                        </div>
					</div>
                    <!-- /.project owl-slider -->

			
				<div class="titulo-prod col-md-6">

			    	<h3>Notebook Dell Inspiron i15-5567-A30B Intel Core i5 8GB (AMD Radeon R7 M445 de 2GB) 1TB Tela LED 15,6" Windows 10 - Branco</h3>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i><br><hr>
			    	
			    </div>

			    <div class="col-md-3 caixa-compra">
					<h5>Vendido e entregue por Primmer Dev</h5>
			    	<h3>Por: R$2.800,00</h3>
			    	<h5>10x de R$ 279,99 s/ juros</h5>
			    </div>

			    <div class="col-md-3">
			    	<a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="322" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px; margin-top: 60px; padding: 15px;">Comprar</a>
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
        			<p>Sistema operacional: com Windows 10 Home, você conta com a melhor combinação de recursos do Windows que já conhece, além de novas melhorias que o deixarão muito satisfeito.</p>
        			<p>Performance indiscutível
					Reprodução eficiente: páginas da Web, jogos e aplicativos são executados rapidamente com opções até a 7ª geração de processadores Intel ® Core™

					Armazenamento ajustável: escolha um disco rígido com até 1 TB de espaço para rápida resposta e muita capacidade para armazenar fotos, arquivos e muito mais.

					Permaneça conectado por mais tempo: a autonomia não será mais um problema. Com a impressionante duração da bateria, você pode passar mais tempo sem precisar carregar seu notebook6
					Escolha a melhor opção que combina com o seu estilo.</p>
					<br><hr>
        		</div>

				<div class="col-md-12 font-destaque">
					<h3>FICHA TÉCNICA</h3>
				</div>
				
				<table class="col-md-12 table-ficha">
				<tr class="tabela-cor">
				<td>Marca</td>
				<td >Dell</td>
				</tr>
				<tr>
				<td>Modelo</td>
				<td>i15-5567-A30C</td>
				</tr>
				<tr class="tabela-cor">
				<td>Cor</td>
				<td>Branco</td>
				</tr>
				<tr>
				<td>Polegadas da Tela</td>
				<td >15.6"</td>
				</tr>
				<tr class="tabela-cor">
				<td>Sistema Operacional</td>
				<td>Windows 10</td>
				</tr>
				<tr>
				<td>Processador</td>
				<td>Intel Core i5</td>
				</tr>
				<tr class="tabela-cor">
				<td>Modelo Processador</td>
				<td >7ª Geração Intel Core i5-7200U Processor</td>
				</tr>
				<tr>
				<td>Memória RAM</td>
				<td>8GB</td>
				</tr>
				<tr class="tabela-cor">
				<td>HD</td>
				<td>1TB</td>
				</tr>
				<tr>
				<td>Conteúdo da Embalagem</td>
				<td >Computador, adaptador AC, cabo de força e manuais</td>
				</tr>
				<tr class="tabela-cor">
				<td>Garantia do Fornecedor</td>
				<td>12 Meses</td>
				</tr>
				</table>

        	</div>
        </section>


        <!-- Ofertas notebooks-->
        <section id="notebooks">
            <div class="container">
                <div class="row"><br>
                    <div class="font-destaque col-md-12">
                        <span ><a href="#notebooks"><i class="fa fa-laptop fa-2x"></i> PRODUTOS RELACIONADOS</span></a>
                    </div>

                    <div class="tecl-banner-infor col-md-3">
                        <img src="img/notebook/dell-corei7.jpg" class="img-responsive">
                        <a href="notebook-dell-i7.php"><p>Notebook Dell Inspiron i14-7460-A40S 7ª Geração Intel Core i7 16GB 1TB+128SSD Placa vídeo 4GB Win10</p></a>

                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>
                            <span class="preco-por"><h4>Por: R$ 4.389,00</h4></span>

                    </div>

                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/notebook/samsung-expert.jpg" class="img-responsive img-tecl">
                        <a href="notebook-samsung-expert.php"><p>Notebook Samsung Expert X22s Intel Core i5 8GB 1TB Tela LED HD 14" Windows 10 - Cinza</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$ 2.594,90</h4></span>
                        
                    </div>
                
                    <div class="col-md-3 tecl-banner-infor">
                        <img src="img/notebook/dell-ispiron.png" class="img-responsive ">
                        <a href="notebook-dell-i5.php"><p>Notebook Dell Inspiron Intel Core i5 8GB 1TB Tela LED 15,6"</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                        </div>

                            <span class="preco-por"><h4>Por: R$2.800,00</h4></span>
                    </div>

                    <div class="col-md-3 tecl-banner-infor2">
                        <img src="img/notebook/macbook.jpg" class="img-responsive img-tecl">
                        <a href="notebook-macbook.php"><p>MacBook Pro Retina Apple 13,3", 8GB, Prata, SSD 256GB, Intel Core i5 Dual Core</p></a>
                        <div>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                        </div>

                            <span class="preco-por"><h4>R$ 12.509,10</h4></span>
                        
                    </div>
                </div>
            </div>
        </section><!-- Fim ofertas notebooks-->


        <!-- Footer -->
        
 <?php include('includes/footer.php'); ?>


</body>
</html>