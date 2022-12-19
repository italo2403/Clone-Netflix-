<?php
include('conexao.php');

if(isset($_POST['email'])|| isset($_POST['senha'])){

    if(strlen($_POST['email'])==0){
        echo "Preencha seu E-mail";
    }else if(strlen($_POST['senha'])==0){
        echo "Preencha sua Senha";
    }else{

        $email = $mysqli->real_escape_string($_POST['email']); 
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code= "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $sql_query= $mysqli->query($sql_code) or die("Falha" .$mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade==1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['login'] = $usuario['login'];
            
            header("Location: usuario.php");    
        }else{
            echo "Email ou Senha incorretos";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Netflix</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="assets/img/netflixlogo.png" alt="">
            </a>
        </div>
    </div>

    <div class="login_body">
        <div class="login_box">
            <h2>Entrar</h2>
            <form action=" " method="POST">
                <div class="input_box">
                    <input required type="email" name="email" placeholder="Email ou número de telefone">
                </div>

                <div class="input_box">
                    <input required type="password" name="senha" placeholder="Senha">
                </div>

                <div>
                    <button class="submit">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="support">
                <div class="remember">
                    <span><input type="checkbox" style="margin: 0;padding: 0; height: 13px;"></span>
                    <span>Lembre-se de mim</span>
                </div>
                <div class="help">
                    <a href="#">
                        Precisa de ajuda?
                    </a>
                </div>
            </div>

            <div class="login_footer">
                <div class="login_facebook">
                    <span><img height="20px" src="assets/img/Facebook_logo.png" alt="facebook"></span>
                    <span><a href="#">Conectar com Facebook</a></span>
                </div>

                <div class="sign_up">
                    <p>Novo por aqui? <a href="#">Assine agora.</a></p>
                </div>

                <div class="terms">
                    <p>Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="#">Saiba mais</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>