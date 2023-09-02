<?php 

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    
    // conectar BD
    include_once('conectar.php');

    // variaveis de armazenamento

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //verofica tabela do BD]

    $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha' ";

    $verificar = $conexao -> query($sql);

    //verifica registro valido

    if(mysqli_num_rows ($verificar) < 1){
        //Destruir as variaveis
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);

        header('Location:entrar.php');
    }else{
        // criar variAVEIS DA SESSAO
        $_SESSION['email_cliente'] = $email;
        $_SESSION['senha_cliente'] = $semha;

        header('Location:usuario.php');
    }
}else{
    //campo vazio

    header('Location:entrar.php');
}
?>