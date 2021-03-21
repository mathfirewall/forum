<?php 

include_once ("conexao/conexao.php");
        $id = $_GET['id'];
        global $conn;
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $consultas = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/coment.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-5.15/css/all.css">
    


    <script src="css/fontawesome-5.15/js/all.js"></script>

    <title>Forúm Dev</title>
</head>
<body>
<div id="interface">

    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1><?= $consultas->descricao ?></h1>
                <a class="btn btn-dark" href="index.php" role="button">Forum</a>

                

            </div>
            <hr class="subforum-devider">

                
            
                <div class="subforum-descricao subforum-column">

                <p><?= $consultas->assunto ?></p>
               
                  <form class="formulario" action="processa/processa.php" method="POST"><br>
                    <input name="nome" class="caixa" type="text" placeholder="Nome:" required><br>
                   
                    <textarea name="assunto" class="caixa textareacm" maxlength="200" required>
                    </textarea>
                    

                    <button name="post" class="formbtn btn-dark" type="submit" value="Postar">Comentar</button>

                  </form>

                </div>

                

            </div>

        </div>    
        
      </div>

</div>

    <script src="js/main.js"></script>
</body>
</html>