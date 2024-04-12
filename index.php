<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <script src="code.js"></script>
    <img src="mentes_notveis_logo.jpeg" alt="Mentes notaveis logo">
    <div class="wrapper">
      <!-- Formulário -->
      <form action="cad.php" id="formulario" method="POST" name="formulario">
        <legend>
          Cadastro
        </legend>
        <div class="input-group">
          <label for="nome">Nome:</label>
          <input
            type="text"
            id="nome"
            name="nome"
            placeholder="Insira seu nome"
          />
        </div>
        <div class="input-group">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" placeholder="Insira seu e-mail" />
        </div>
        <div class="input-group">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Insira a senha" />
        </div>
        <div class="footer">
          <button type="submit" id="myButton" class="botao" onclick="validar()">
            Enviar
          </button>
        </div>
      </form>
  </body>