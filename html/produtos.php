<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "projeto_banco_dados";

    //criando conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    //verificando a conexão

    if(!$conn){
        die("Não foi possível conectar" .mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" type="text/css" href="..//css/estilos.css">
<meta charset="UTF-8">
    <title>Produtos Pink Store</title>
</head>
            <!--categorias-->
<body>
            <!--menu-->
        <?php
            include 'menu.html'
        ?>

        <div id="coluna1">
            <p id="categoria"> CATEGORIAS </p>
            <ul id="lista">
                <li onclick="todos()">TODOS</li>
                <li onclick="exibircategoria('Notebook')">NOTEBOOK</li>
                <li onclick="exibircategoria('Celular')">CELULAR</li>
                <li onclick="exibircategoria('Impressora')">IMPRESSORA</li>
            </ul>
            <hr id="posicaocoluna">
        </div>

            <!--início dos produtos-->

        <?php
            $sql = "select * from produtos";
            $result = $conn->query($sql);
        
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){          
        ?>

    

<form action="#" method="post" name="enviarpedido">
    <div class="colunaprodutos" id="<?php echo $rows["nome"]; ?>" style='display: block;'>
        <div class="imgproduto">
            <img src="<?php echo $rows["nome_img"]; ?>" width="200px" onclick="destaque(this)">
        </div>
        <div class="texto-produto">
            <h3><?php echo $rows["descricao"]; ?></h3>
            <hr>
            <h4 class="strike">R$<?php echo $rows["preco"]; ?></h4>
            <p class="preco">R$<?php echo $rows["preco_venda"]; ?></p><br>
            
            <input type="button" nome="pedidos" id="input" value="Realizar pedido"> 
        </form>
            </div>
        </div>
    </div>

        <?php
                }
            } else {
                echo "Nenhum produto cadastrado";
            }
        ?>
    
        <div class="rodape"><br><br><br>
        <span>
            <h4 class="texto-pagamento">Formas de Pagamento <br> &copy;PinkStore</h4>
            <img class="imgpagamento" src="..//Imagens/imagemdecartao.png" width="15%" alt="Formas de pagamento.">
        </span>
        </div>
    </div>

    <script src="..//javascript/projeto.js"></script>
</body>
</html> 