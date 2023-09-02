
<!-- configuracao do php -->
<?php
//iniciar uma sesso
session_start();

if((!isset($_SESSION['email_cliente'])==true) and (!isset($_SESSION['senha_cliente'])==true)){
    //destruir variaveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    
    header('Location:entrar.php');
}else{
    //criar uma variavel de acesso
    $logado=$_SESSION['email_cliente'];
}
?>

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
    <!--inicio da construcao da sessao do usuario-->
    
    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>

        <div class="barra">
            <a href="sair.php">Sair</a>
        </div>
    </section>

    <section class="usuario">
        <?php
            echo"<h2>Olá,$logado</h2>"
        ?>
        <p>Seja bem-vindo ao Mercado Novo</p>
    </section>
        
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
    }
    ?>
</body>
</html>