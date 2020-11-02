<?php
    include_once '../include/connect.php';
?>

<?php

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
        $nome       = $_POST['nome'];
        $email      = $_POST['email'];
        $mensagem   = $_POST['mensagem'];

        $sql = "insert into comentarios (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";

        mysqli_query($connect, $sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<meta charset="UTF-8">
    <title>Contatos</title>
</head>

    <body>
        <!--menu-->
        <?php
            include 'menu.html'
        ?>
        
        <div class="coluna">
            <a href="https://twitter.com/" target="_blank"><img class="logo" src= "../Imagens/23931.png"></a>
            <a href="https://facebook.com/" target="_blank"><img class="logo" src="..//Imagens/61045.png"></a>
            <a href="https://instagram.com/" target="_blank"><img class="logo" src="..//Imagens/87390.png"></a>
            <a href="https://gmail.com/" target="_blank"><img class="logo" src="..//Imagens/logogmail.png"></a>
        <div>
        
        <form action="" method="post">
            <input class="input" type="text" name="nome" id="nome" placeholder="Digite seu nome"><br><br>
            <input class="input" type="email" name="email" id="email" placeholder="Digite seu email"><br><br>
            <textarea name="mensagem" id="mensagem" cols="50" rows="10" placeholder="Digite aqui sua mensagem"></textarea><div>
            <input class="submit" name="enviar" type="submit" value="ENVIAR">
        </form><br>

        <footer class="pagamentos"><hr><br>
            <p class="texto-pagamento">Formas de Pagamento <br> &copy;PinkStore</p>
            <img class="imgpagamento" src="..//Imagens/imagemdecartao.png" width="15%" alt="Formas de pagamento.">
        </footer><hr>
    
    </body>
</html>