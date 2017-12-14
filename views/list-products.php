<!DOCTYPE html>
<html lang="pt-br">

<?php
// Includes Classes
include("includes/head.php");
include("../system/class.products.php");


// Declare Classes
$products = new Products("root", "", "loja");
$all_products = $products->getAll();

?>
<body>
<?php
include("includes/header.php");?>

<ul class="row" style="padding: 10px; margin: 10px;">
    <?php
        while($row = $all_products->fetch_assoc()):
    ?>
        <li class="card col-sm-3">
            <div class="card-body"><br><hr>
                <p class="card-text"><?php echo $row['nome']; ?></p>
                <h5 class="card-price">R$ <?php echo $row['valor']; ?></h5>
                <a href="<?php echo BASE_URL ?>views/update-products.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-lg btn-block">Editar</a>
                <a href="<?php echo BASE_URL ?>helpers/validate-admin-delete.php" data-id="<?php echo $row['id']; ?>" class="btn btn-danger btn-lg btn-block delete-product">Excluir</a>
                <a href="<?php echo BASE_URL ?>helpers/validate-cart.php" data-id="<?php echo $row['id']; ?>" data-handler="new_product" class="button-cart btn btn-info btn-lg btn-block">Adiciona no carrinho</a>
            </div>
        </li>
    <?php
        endwhile;
    ?>
</ul>
</body>
</html>