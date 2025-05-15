<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Alunos</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Lista Usuário</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="cadastro.php" method=post>
            <h2>Cadrastro Aluno</h2>
            
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id= "nome" required>
            
            <label for="sobrenome">Sobrenome: </label>
            <input type="text" name="sobrenome" id= "sobrenome" required>
            
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="exemplo@email.com" id= "email" required>

            <label for="curso">Selecione o Curso:</label>
            <select name="curso" id="curso">
                <option value=" ">Selecione o Curso</option>
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="engenharia_software">Engenharia de Software</option>
                <option value="sistema_informacao">Sistema da Informação</option>
                <option value="ciencia_computacao">Ciência da Computação</option>
            </select>
            <input type="submit" value="cadastrar">
        </form>

        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                try{

                    // capturar um arquivo externo
                    include("../conexao/conexao.php");

                    // Variáveis usuário
                    $nome = $_POST["nome"];
                    $sobrenome = $_POST["sobrenome"];
                    $email = $_POST["email"];
                    $curso = $_POST["curso"];
                    $prefixo = "1124";
                    $id = $prefixo . rand(100,999);
                
                    // Consulta SQL
                    $sql = "INSERT INTO usuarios (id,nome,sobrenome,email,curso) VALUES(?,?,?,?,?)";
                
                    // PREPARAR A CONSULTA
                    $stmt = $conn->prepare($sql);

                    // Vincular as variaveis do usuário com o sql
                    $stmt->bind_param("sssss" , $id,$nome,$sobrenome,$email,$curso);

                    // Executar a consulta
                    $stmt->execute();

                    // Exibindo a mensagem de sucesso
                    echo "<div class = 'mensagem sucesso'> Usuário cadastrado com sucesso!!! </div>";

                    // Encerramento a consulta sql e conexão com o banco de dados
                    $stmt->close();
                    $conn->close();
                }
                catch(mysqli_sql_exception $e){
                    echo "<div class = 'mensagem erro'> Erro ao cadastrar! " . $e->getMessage(). "</div>";

                    }
            }            
        
        
        // echo var_dump($_POST);

        ?>



    </main>

</body>
</html>