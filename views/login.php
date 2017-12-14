<!DOCTYPE html>
<html lang="pt-br">
<?php include('includes/head.php'); ?>
<?php 
    if(!empty($_SESSION["username"])){
        echo "Usuário já esta logado. Direcionando para a página inicial.";
        header("Location:" . BASE_URL . "views/index.php");
    }
?>
<body>
    <?php include('includes/header.php'); ?>
    <section>
        <div class="container">
                <div class="login-adm text-center">
                    <h3><i class="fa fa-user " style="color: #7bcaee; font-weight: normal; font-size: 35px;"> 
                            Identificação</i></h3>
                </div>

                <div class="col-md-12">
                    <form id="form-login" action="<?php echo BASE_URL ?>helpers/validate-login.php" method="POST">
                        <p style="margin-left: 402px;">Usuário:</p>
                        <input type="text" name="username" placeholder="Digite o seu usuário" style="min-width:300px; height: 45px; border-radius: 5px; border-color:#7bcaee; margin-left: 400px; padding: 5px; ">
                        <p style="margin-left: 402px; margin-top: 10px;">Senha:</p>
                        <input type="password" name="pass" placeholder="Digite sua senha" style="min-width:300px; height: 45px; border-radius: 5px; border-color:#7bcaee; margin-left: 400px; padding: 5px;">
                        <input type="submit" name="submit" value="Continuar" style="min-width:300px; height: 45px; border-radius: 5px; background-color:#7bcaee; border-color:#7bcaee;  color: #fff; margin-left: 400px; margin-top: 10px; padding: 5px;">
                    </form>

                </div>
            </div>
    </section>
    



 <?php include('includes/footer.php'); ?>   
</body>
</html>