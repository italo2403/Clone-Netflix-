<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Usuários</title>
</head>
<body>
    
    <div class="nome text-left">
        <h1 class="filmes">NETFLIX</h1>
    </div>
    
    
    <div class="container"><?php echo $_SESSION['login'];?>
        <div class="row d-flex justify-content-center">
		<h2 class="text-center">Quem está assistindo?</h2>
            <div class="col-md-3">
                <img src="img/avatar1.png" class="img-fluid"  alt="...">
                <figcaption class="figure-caption" >Lorem Ipsum </figcaption>
            </div>
            <div class="col-md-3">
                <img src="img/avatar2.png" class="img-fluid"   alt="...">
                <figcaption class="figure-caption">Lorem Ipsum </figcaption>
            </div>
            <div class="col-md-3">
                <img src="img/avatar3.jpg" class="img-fluid"   alt="...">
                <figcaption class="figure-caption">Lorem Ipsum </figcaption>
            </div>
           <div class="col-md-3">
                <img src="img/perfil.png" class="img-fluid" alt="...">
                <figcaption class="figure-caption">Lorem Ipsum </figcaption>
            </div>
       </div>
    </div>
    
<div class="d-flex justify-content-center">
  <button type="button" class="btn bg-transparent">Gerenciar perfis</button>
</div>
    </div>
    </div>
       <script src="JS/script.js"></script>
    
</body>
</html>