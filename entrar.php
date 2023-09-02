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
    <!--inicio do formulario entrar-->   

    <div class="login">
        <div class="logar">
            <h1>LOGIN</h1>
            <form action="login.php"  method="post">
                <input type="email" name="email" id="email_usuario" placeholder="E-mail"><br>
                <input type="password" name="senha" id="senha_usuario" placeholder="Senha"><br>
                <input type="submit" name="submit" id="btn_logar" value="ENTRAR">
            </form>
        </div>

        <div class="logar" id="logar1">
            <h3 id="id_hoje">TÊNIS ADIDAS</h3>
            <p id="p_hoje">R$ 249,90</p>
            <img src="img/adidas.png" alt="Tênis Adidas">
            <a href="#">COMPRAR</a>
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
</body>
</html>