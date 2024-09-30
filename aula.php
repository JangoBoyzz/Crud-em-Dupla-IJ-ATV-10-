</html>
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $sala = $_POST['sala'];

    $sql = "INSERT INTO aula (sala, titulo) VALUES ('$sala' , '$titulo')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD AULAS</title>
</head>
<body>
    
    <form method="POST" action="aula.php">
        <label for="titulo">Título/Matéria: </label>
        <input type="text" name="titulo" require>
        <label for="sala">Sala de Aula: </label>
        <input type="number" name="sala" require>
        <input  type="submit" value="Adicionar"> 

    </form> 
    <a href="Inicio.php">Ver banco.</a>
</body>
</html>