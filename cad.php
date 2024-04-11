<?php
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $sexo = $_POST['sexo'];
    }


    // dados database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sampledb";

    // criando uma conexão
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Garantia que a conexão seja feita
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // Usando SQL para entrada de dados
    $sql = "INSERT INTO contactform_entries (id, nome, sobrenome, email, senha, telefone, cep, sexo) VALUES ('0', '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$cep', '$sexo')";
  
    // Confirmando se o envio foi bem sucedido
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // Fechando conexão
    mysqli_close($con);
    header('Location: confirmed.html');
?>