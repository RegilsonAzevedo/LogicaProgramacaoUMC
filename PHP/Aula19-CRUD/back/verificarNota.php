<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verficar Nota</title>
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
            <form action="verificarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">

                    <option value=" ">Selecione o Curso</option>
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="engenharia_software">Engenharia de Software</option>
                    <option value="sistema_informacao">Sistema da Informação</option>
                    <option value="ciencia_computacao">Ciência da Computação</option>
                </select>
                <input type="submit" value="buscar">
            </form>
        </section>
        <section>

            <?php
                // verificar se o $_POST['CURSO]
                if(isset($_POST["curso"])){
                    include("../conexao/conexao.php");

                    //CONSULTA SQL
                    $curso = $_POST["curso"];
                    
                    //salvar a informação do curso selecionado
                    $sql = "SELECT * FROM usuarios WHERE curso = ?";

                    //preparar a consulta sql junto a conexão
                    $stmt = $conn->prepare($sql);
                
                // chamar

                    //// verificar se a conexão foi bem-sucedida
                    if($stmt){
                        $stmt->bind_param("s", $curso);
                        $stmt->execute();
                        $resultado = $stmt->get_result();

                        if($resultado->num_rows > 0) {
                            echo"
                                <table>
                                    <thead>
                                        <tr>
                                        <td>ID</td>
                                        <td>Nome</td>
                                        <td>Sobrenme</td>
                                        <td>Nota Prova</td>
                                        <td>Nota Final</td>
                                        </tr>
                                        </thead>
                                    <tbody>";
                                        while($row = $resultado->fetch_assoc()){
                                        echo" 
                                            <tr>
                                                <td>{$row['ID']}</td>
                                                <td>{$row['NOME']}</td>
                                                <td>{$row['SOBRENOME']}</td>
                                                <td>{$row['NOTA_PROVA']}</td>
                                                <td>{$row['NOTA_FINAL']}</td>
                                            </tr>";
                                        
                                        }
                            echo"
                                    </tbody>
                                </table>
                            ";
                        } else {
                            echo"<div class = 'mensagem erro'>Esse curso $curso não possui registros de usuários</div>";
                        }
                        $stmt->close();
                    }
                    $conn->close();
                }
            ?>

        </section>

    </main>
    
</body>
</html>