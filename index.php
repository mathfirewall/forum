<?php 
include_once ("conexao/conexao.php");

        
        global $conn;
        $sql = "SELECT id, nome, descricao, assunto, date FROM users";
        $result = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" type="text/css" href="css/fontawesome-5.15/css/all.css">
    


    <script src="css/fontawesome-5.15/js/all.js"></script>

    <title>Forúm Dev</title>
</head>
<body>
<div id="interface">

    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Informações Gerais</h1>
                <a class="btn btn-dark" href="posts.php" role="button">Postar</a>

            </div>

            <?php while($consultas = $result->fetch_object()): ?>
            <hr class="subforum-devider">
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-user "></i>

                </div>

                <div class="subforum-descricao subforum-column">
                    <h1><a href="comentarios.php?id=<?=$consultas->id?>"> <?= $consultas->descricao?> </a></h1>
                    

                </div>

                <div class="subforum-status subforum-column center">
                    <span>24 Posts | 15 Topcs</span>

                </div>

                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> By <b><a href=""><?= $consultas->nome?></a></b>
                    
                    <br>

                    <p><?= $consultas->date ?></p>

                </div>

            </div>

            <?php endwhile ?>

        </div>    
        
      </div>

</div>

    <script src="js/main.js"></script>
</body>
</html>