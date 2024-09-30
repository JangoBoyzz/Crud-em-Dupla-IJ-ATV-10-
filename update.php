<?php 
include 'db.php';

$id = $_GET['id_aula'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sala_aula = $_POST['sala_aula'];
    $nome_professor_aula = $_POST['nome_professor_aula'];
    $professor_idade = $_POST['professor_idade'];
    $nome_aula = $_POST['nome_aula'];

    $sql = "UPDATE aulas SET sala_aula = '$sala_aula', nome_professor_aula = ' $nome_professor_aula', professor_idade = ' $professor_idade ', nome_aula '$nome_aula' =  WHERE id_aula = $id_aula";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn ->close();
    header ("Location: read.php");
    exit();
}

$sql = "SELECT * FROM aulas WHERE id_aula=$id_aula";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <form method="POST" action=" update.php?id=<?php echo $row['id_aula'];?>">
        Nome da aula: <input type="text" name="nome_aula" required>
        Nome do professor: <input type="text" name="nome_professor_aula" required>
        Idade do professor: <input type="number" name="professor_idade" required>
        Numero da sala: <input type="number" name="sala_aula" required>
        <input type="submit" value="Adicionar">

</body>
</html>