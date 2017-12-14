<!DOCTYPE html>
<html lang="pt-br">
<?php include('includes/head.php'); ?>
<?php

    // Includes Classes
    include("../system/class.products.php");

    // Declare Classes
    $products = new Products("root", "", "loja");
?>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div class="container">
            <h3>Meu Carrinho</h3><hr>
                <?php  

                    // Trazer Produtos do carrinho
                    // verifica se existe valor na variavel onde guardamos todos os produtos selecionados.
                    if(isset($_SESSION['test'])):

                        // Chamando Metodo da classe onde temos o SELECT
                        $cart_products= $products->getAllInArray('"' . implode('","', array_keys($_SESSION['test'])) . '"');

                        // Verifica se contem produtos nessa resposta
                        if($cart_products->num_rows > 0):

                            // faz o laço para mostrar produtos
                            while($row = $cart_products->fetch_assoc()):
                            ?>

                            <table class="col-md-12 table-ficha" style="margin-bottom: 5px;">
                                <tr style="background-color: #ADD8E6;">
                                <td>Produto</td>
                                <td >Valor</td>
                                <td>Quantidade</td>
                                <td>Total do Produto</td>
                                </tr>

                                <tr style="background-color: #F0F8FF;">
                                <td><?php echo $row['nome'];?></td>
                                <td >R$<?php echo $row['valor'];?></td>
                                <td><?php echo $_SESSION['test'][$row['id']]['qtd_product'];?></td>
                                <td>R$<?php echo $row['valor'] * $_SESSION['test'][$row['id']]['qtd_product'];?></td>
                                </tr>

                                <tr style="background-color: #F0F8FF;">
                                <td> </td>
                                <td><a class='button-cart' href='../helpers/validate-cart.php' data-handler='add_product' data-id='<?php echo $row["id"] ?>'>Adicionar Mais</a></td>
                                <td ><a class='button-cart' href='../helpers/validate-cart.php' data-handler='remove_product' data-id='<?php echo $row["id"] ?>'>Retirar</a></td>
                                <td><a class='button-cart' href='../helpers/validate-cart.php' data-handler='del_product' data-id='<?php echo $row["id"] ?>'>Remover Produto</a></td>
                                </tr>
                            </table>                          
                                
                        <?php 
                            endwhile; 
                        ?>

                <?php
                        else:
                ?>
                        <h2>Seu Carrinho Esta Vazio.</h2>
                        <a href="<?php echo BASE_URL ?>views/index.php" >Continuar Comprando</a>
                <?php
                        endif;

                        // Trazer soma total de produtos no carrinho
                        $sql_total = $products->getSumTotalPricesInArray('"' . implode('","', array_keys($_SESSION['test'])) . '"');

                        // verifica se o resultado existe
                        if($sql_total->num_rows > 0):

                            // coloco a variavel final com um valor default
                            $total = 0;

                            // Realizo um loop para todos os valores de produtos
                            while($row_values = $sql_total->fetch_assoc()):
                                $total = $total + ($row_values['valor'] * $_SESSION['test'][$row_values['id']]['qtd_product']);
                            endwhile;
                ?>
                            
                            <table class="col-md-4 table-ficha" style="margin-left: 760px; margin-top: 15px; text-align: center;">
                            <tr style="background-color: #ADD8E6;">
                            <td>Total da Compra</td>
                            <td>R$ <?php echo $total ?></td>
                            </tr>
                            <tr class="table-ficha" style="background-color: #F0F8FF; text-align: center;">
                                <td><a class='button-cart--truncate' href='../helpers/validate-cart-truncate.php' data-handler='truncate_cart'>Limpar Todo o Carrinho</a></td>
                                <td><a href="<?php echo BASE_URL ?>views/index.php" >Continuar Comprando</a></td>
                            </tr>
                        </table>

                <?php
                        endif;
                    else:
                ?>
                        <h2>Seu Carrinho Esta Vazio.</h2><br><br>
                        <a  style="background-color: #F0F8FF; text-align: center; padding: 15px 100px; border-radius: 5px;" href="<?php echo BASE_URL ?>views/index.php" >Continuar Comprando</a><br><br><br>
                <?php
                    endif;
                ?>
                
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>