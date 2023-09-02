<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Novo</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/cicle.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logotipo Mercado Novo">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="celular.html">Celular</a></li>
                <li><a href="roupa.html">Roupa</a></li>
                <li><a href="tenis.html">Tênis</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="entrar.php">Entrar</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!--inicio do formulario cadastro-->
    
    <div class="cadastro">
        <div class="cad" id="cadastro">
            <h1>Cadastro de Cliente</h1>
            <form action="#" method="post">
                <input type="text" id="nome" name="nome" placeholder="Nome completo"><br>
                <input type="email" id="email" name="email" placeholder="E-mail"><br>
                <input type="password" id="senha" name="senha" placeholder="Senha"><br>
                <input type="radio" id="feminino" name="sexo" value="F" name="sexo">Feminino
                <input type="radio" id="masculino" name="sexo" value="M" name="sexo">Masculino <br>
                <input type="submit" id="b-cadastro" name="submit" value="CADASTRAR">
            </form>
        </div>

        <div class="cad">
            <img src="img/compras-virtuais.png" alt="Mercado Novo">
        </div>
    </div>

    
    <!--Inserir dados do redapé-->

    <footer>
        <div class="rodape">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="roupa.html">ROUPA</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="contato.php">CONTATO</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
            </ul>
        </div>

        <div class="rodape">
            <p>Avenida Planeta Forró n° 99 - Barro Preto</p>
            <p>BH/MG 30309-243</p>
        </div>

        <div class="rodape">
            <p>Siga nossas redes sociais</p>
            <a href="#"><img src="img/facebook.png" alt="facebook Mercado Novo"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Mercado Novo"></a>
            <a href="#"><img src="img/youtube.png" alt="Youtube Mercado Novo"></a>
        </div>
    </footer>
    
    <?php
    if(isset($_POST['submit'])){
        include_once('conectar.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome', '$email', '$senha', '$sexo')");
        
        header('Location:entrar.php');
    }
    ?>
</body>
</html>