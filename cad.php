<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmado!</title>
    <link rel="stylesheet" href="estilo2.css" />
</head>
<body>
    <script src="code.js"></script>
    <img src="mentes_notveis_logo.jpeg" alt="Mentes notaveis logo">
    <br>
    <br>
    <br>

    <?php 

    $conn = mysqli_connect("localhost", "root", "", "sampledb");
         
    // Checando conexão
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
 
    // Pegando três valores do formulário data(input)
    $nome =  $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha =  $_REQUEST['senha'];

    if($nome == "" or $email == "" or $senha == "") {
        echo "<h1>Dados incorretos ou faltantes, informe os dados corretamente.</h1>"
        .("<button onclick= \"location.href='index.php'\">Voltar</button>");
    }
    else {
    // Realizando o insert query 
    // Aqui o nome da nossa tabela é contactform_entries
    $sql = "INSERT INTO contactform_entries  VALUES ('$nome', 
    '$email','$senha')";

    if(mysqli_query($conn, $sql)){
        
        echo "<h1>Dados confirmados!</h1>"
            .("<button onclick= \"location.href='index.php'\">Voltar</button>");
        ; 


    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
        }

    // Fechando conexão
    mysqli_close($conn);
?>
</body>
</html>
