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
                <li><a href="">Início</a></li>
                <li><a href="">Cadastrar Usuário</a></li>
                <li><a href="">Lista Usuário</a></li>
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
        
            echo var_dump($_POST);



        ?>



    </main>

</body>
</html>