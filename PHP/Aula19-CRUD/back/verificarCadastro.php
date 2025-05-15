<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="">Lista Usuário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="verificarCadastro.php" method="post">
                <input type="email" placeholder="Informe seu E-mail:" name="email" id="email">
                <input type="submit" value="Buscar">
                
            </form>
        </section>
        <section>

            <?php
                // Verificar se o campo email esta preenchido
                if(isset($_POST["email"])){
                    // EXIBIR INFORMAÇÕES PASSADAS PELO FORM
                    // echo var_dump($_POST);

                    // Salvar a informação de e-mail enviado pelo form
                    $email = $_POST["email"];

                    // Recebe as informações de conexão com o DB
                    include("../conexao/conexao.php");

                    // Query ao banco de dados
                    $sql = "SELECT * FROM usuarios WHERE email = ?";

                    // Preparar a conexão junto a consulta
                    $stmt = $conn->prepare(($sql));

                    // validando se  a conexão foi feita com sucesso
                    if($stmt){
                        // Troca a informação de e-mail pela ? no $sql
                        $stmt->bind_param("s",$email);
                        // Executa o comando
                        $stmt->execute();
                        // salva o resultado da consulta
                        $resultado = $stmt->get_result();
                        // echo var_dump($resultado);

                        if($resultado->num_rows > 0){
                            echo" USUÁRIO EXISTE ";
                            // Armazenar as informações vinda do DB
                            $row =$resultado->fetch_assoc();
                            echo var_dump($row);
                        }
                        else {
                            echo" USUÁRIO INEXISTENTE ";
                        }
                    }

                }
            ?>

        </section>
    </main>


</body>
</html>