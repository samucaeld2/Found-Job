<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO 8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="../Itens/Icons/logoSitePrincipal.png" type="image/x-icon">
    <title>FoundJOB</title>
</head>

<body>
<header>
        <div class="topo" >
            <img src="../Itens/Icons/acordo1.png" alt="logo" class="logotipo">
        </div>
        <div class="lateral">
            <a href="./landingPage.html">
                <img src="../Itens/Icons/botao-quadrado 1.png" alt="menu Inicial" class="imgs">
            </a>

            <a href="../php/visualizar_estagios.php">
                <img src="../Itens/Icons/pasta 1.png" alt="Pagina Estagios" class="imgs">
            </a>

            <a href="#">
                <img src="../Itens/Icons/marca-paginas 1.png" alt="estagios Favoritos" class="imgs">
            </a>

            <a href="#">
                <img src="../Itens/Icons/curriculo-e-cv 1.png" alt="curriculo-e-cv" class="imgs">
            </a>

            <a href="../php/perfil_empresa.php">
                <img src="../Itens/Icons/do-utilizador 1.png" alt="Usuario" class="imgs">
            </a>
        </div>
    </header>
    

    <div class="boderBodyEscopo">
        <form class="formIndex" action="processa_login.php" method="POST">
            <h1 class=" titulo">LOGIN</h1>
            <div class="subir">
            <input type="text" id="cnpjLogin" placeholder="CNPJ" name="login" class="espaco">
            <input type="password" id="senhaLogin" placeholder="senha" name="senha" class="espaco">
            <button type="submit" value="entrar"class="espaco">LOGIN</button>
            </div>
        </form>
    </div>

    <footer>
        <h3>Não tem conta ainda? <a href="../html/cadastroEmpresa.html">CADASTRE-SE</a></h3>
    </footer>

    <script>
        <?php
        if (isset($_GET["msg"]) && $_GET["msg"] != "") {
        ?>
            alert("<?php echo $_GET["msg"]; ?>");
        <?php
        }
        ?>
    </script>


    <script src="../js/script.js"></script>
</body>

</html>