<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/posts.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-5.15/css/all.css">
    


    <script src="css/fontawesome-5.15/js/all.js"></script>

    <title>Forúm Dev</title>
</head>
<body>
<div id="interface">

    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Área de Postagens</h1>
                <a class="btn btn-dark" href="index.php" role="button">Forum</a>

            </div>
            <hr class="subforum-devider">
            
                <div class="subforum-descricao subforum-column">
                <h1 style="color: red;"><?php echo $_SESSION["mensagem"]; unset($_SESSION["mensagem"]);?></h1>
                  <form class="formulario" action="processa/processa.php" method="POST"><br>
                    <input name="nome" class="caixa" type="text" placeholder="Nome:" required><br>
                    <input name="descricao" class="caixa" placeholder="Titulo:" required><br>
                    <textarea name="assunto" class="caixa textarea" maxlength="200" required>
                    </textarea>
                    

                    <button name="post" class="formbtn btn-dark" type="submit" value="Postar">Postar</button>

                  </form>

                </div>

                

            </div>

        </div>    
        
      </div>

</div>

    <script src="js/main.js"></script>
</body>
</html>