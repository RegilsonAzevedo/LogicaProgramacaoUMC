<?php

    if(isset($_POST['id'])){
        include("..//conexao/conexao.php");

        $id = $_POST['id'];

        //  prepara consulta sql  para excluir o cadastro
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn->prepare($sql);

        if($stmt){
            $stmt->bind_param("i", $id);
            // executar a query
            $stmt->execute();

            // redirecionar o usuario
            header("Location: verificarCadastro.php");
            $stmt->close();
        } else {
            echo"<div class='mensagem erro'> erro consulta </div>";
        }
    
        $conn->close();
    }
?>