</html>
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO professor (nome, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM professor;";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome Professor </th>
            <th> Email </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['id']} </td>
                    <td> {$row['nome']} </td>
                    <td> {$row['email']} </td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Editar</a> |
                        <a href='delete.php?id={$row['id']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PROF</title>
</head>
<body>
    
    <form method="POST" action="prof.php">
        <label for="name">Nome: </label>
        <input type="text" name="name" require>
        <label for="email">Email: </label>
        <input type="email" name="email" require>
        <input  type="submit" value="Adicionar"> 

    </form> 
    <a href="Inicio.php">Ver 
    </a>
</body>
</html>