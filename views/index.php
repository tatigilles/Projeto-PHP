<!DOCTYPE html>
<html lang="pt-br">
<?php include('includes/head.php'); 
include("../system/class.products.php");
// Declare Classes
$products = new Products("root", "", "loja");
$all_products = $products->getAll();

?>
<body>
    <?php include('includes/header.php'); ?>


<!-- *** HOMEPAGE CAROUSEL ***-->
        <section>

            <div class="home-carousel hidden-xs">

                <div class="dark-mask"></div>

                
                    <div class="homepage owl-carousel" style="width: 100%">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-responsive img-banner" src="img/banner-dell.webp">
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">

                                <div class="col-md-12 text-center">
                                    <img class="img-responsive" src="img/banners/banner-philips.png" width="100%">
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="row">

                                <div class="col-md-12 text-center">
                                    <img class="img-responsive" src="img/banner.webp" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="row">

                                <div class="col-md-12 text-center">
                                    <img class="img-responsive" src="img/banners/banner-processador.webp" width="100%">
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img class="img-responsive" src="img/banner-t.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.project owl-slider -->
            
        </section><!-- *** HOMEPAGE CAROUSEL END *** -->
    
    <!-- Ofertas -->
    <section>
        <div class="container">
            <div class="row">
                <div class="font-destaque col-md-12">
                    <span ><i class="fa fa-star fa-2x"></i> OFERTAS EM DESTAQUE!</span>
                </div>

                <div class="info-banner1 col-md-3">
                    <a href="informatica.php"><img src="img/info-02.webp" class="img-responsive"></a>
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/teclados/teclado-gamer.webp" class="img-responsive img-tecl">
                    <a href="teclado-gamer.php"><p>Teclado Gamer Multimídia Pcyes Ark USB Abnt2</p></a>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(3)</i>
                    </div>
                        <h6><strike>De: R$210,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$169,00</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="319" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                    
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/fones/headset-void.webp" class="img-responsive img-banner2">
                    <a href="fone.php"><p>Headset VOID Stereo Preto P2 para PC e PS4 CORSAIR</p></a>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(7)</i>
                    </div>

                    <h6><strike>De: R$510,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$300,00</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="320" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/monitores/monitor.webp" class="img-responsive ">
                    <a href="monitor-gamer.php"><p>Monitor Gamer LED 21,5" AOC 75Hz 1ms Full HD</p></a>
                    <div class="star-margin">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(10)</i>
                    </div>
                    <h6><strike>De: R$980,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$650,00</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="321" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>

                </div>

                <div class="col-md-2 tecl-banner2">
                    <a href="notebook-dell-i5.php"><img src="img/notebook/dell-ispiron.png" class="img-responsive ">
                    <a href="notebook-dell-i5.php"><p>Notebook Dell Inspiron Intel Core i5 8GB 1TB Tela LED 15,6"</p></a>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o">(6)</i>
                    </div>

                    <h6><strike>De: R$3.050,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$2.800,00</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="322" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                </div>
            </div>
            
        </div>
    </section><hr><br><!-- Fim ofertas -->
    
    <!-- banners samsung -->
    <div class="container hidden-xs">
        <a href="notebook-samsung-expert.html"><div class="col-md-6">
        <img src="img/banner-samsung.png" width="500px" style="margin-left: 30px;" class="img-responsive">
        </div>
        <div class="col-md-6">
        <img src="img/banner-samsung2.png" width="500px" class="img-responsive">
        </div></a>
    </div><br><hr><!-- fim banners samsung -->


    <!-- ofertas eletronicos -->
    <section>
        <div class="container">
            <div class="row">

                <div class="info-banner1 col-md-3">
                    <img src="img/banner-eletronico.webp" class="img-responsive">
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/eletronicos/go-pro.webp" class="img-responsive ">
                    <a href=""><p>Câmera De Ação Sport HD, Tela De LCD 2" 5MP + Cartão 16GB Prata Mirage</p></a>
                    <div class="star-margin">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o">(30)</i>
                    </div>

                    <h6><strike>De: R$ 249,90</strike></h6>

                        <span class="preco-por"><h4>Por: R$ 149,90</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="323" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/eletronicos/tv43.png" class="img-responsive img-tecl">
                    <a href=""><p>Smart TV LED 43" AOC Ultra HD 4k com Conversor Digital Wi-Fi Sleep timer 60hz Preta</p></a>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(5)</i>
                    </div>
                        <h6><strike>De: R$4.200,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$ 1.849,90</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="324" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                    
                </div>

                <div class="col-md-2 tecl-banner">
                    <img src="img/eletronicos/camera-seg.webp" class="img-responsive ">
                    <a href=""><p>Câmera de Segurança Infravermelho Interna e Externa Elgin Bullet AHD Branca</p></a>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star">(10)</i>
                    </div>
                    <h6><strike>De: R$ 217,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$ 209,00</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="325" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>

                </div>

                <div class="col-md-2 tecl-banner2">
                    <img src="img/eletronicos/tv75.jpg" class="img-responsive img-banner2">
                    <a href=""><p>Smart TV LED 75" Samsung 4K Premium com Conversor Digital</p></a>
                    <div class="star-margin">
                        <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o">(0)</i>
                    </div>

                    <h6><strike>De: R$14.403,00</strike></h6>

                        <span class="preco-por"><h4>Por: R$12.299,99</h4></span>

                        <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="326" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block" style="border-radius: 5px;">Comprar</a>
                </div>  
            </div>
            
        </div>
       <br> <hr>
    </section><!--Fim ofertas eletronicos -->

        <!-- banners diversos -->
    <section>
        <div class="container hidden-xs">
            <div class="row">
                <div class="col-md-3 imgs-banners">
                    <img src="img/banners/banner-motox.jpg" class="img-responsive" width="100%">
                </div>
                <div class="col-md-9  imgs-banners2 ">
                    <img src="img/banners/banner-impressora-hp.jpg" class="img-responsive">
                </div>
                <img src="img/banners/banner-caixas-jbl.jpg" class="imgs-banners2 img-responsive"">
            </div>
        </div>
    </section><!-- Fim banners diversos -->



 <?php include('includes/footer.php'); ?>
</body>
</html>