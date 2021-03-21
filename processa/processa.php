<?php
session_start();
include_once ("../conexao/conexao.php");


$cadastrar = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_STRING);

//verifica se o botão foi clicado se sim ele passa para a seguinte verificação
if ($cadastrar){

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $assun = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);



    //verifica se os campos estão em brancos se não estiver passa para proxima etapa
    if((!empty($nome)) || (!empty($desc)) || (!empty($assun))) {

        global $conn;

        $result_usuario = "INSERT INTO users (nome, descricao, assunto) VALUES ('$nome', '$desc', '$assun')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $_SESSION['mensagem'] = "inserido com sucesso!";
        header("Location: ../posts.php");


    }else{
        $_SESSION['mensagem'] = "falha ao inserir";
        header("Location: ../posts.php");
    }


}else{

    header("Location: ../posts.php");
}


?>