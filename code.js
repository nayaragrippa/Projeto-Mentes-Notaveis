/* Função Validar */
function validar() {
    // pegando o valor do nome pelos names
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");

    // verificar se o nome está vazio
    if (nome.value == "") {
      alert("Nome não informado");

      // Deixa o input com o focus
      nome.focus();
      // retorna a função e não olha as outras linhas
      return;
    }
    if (email.value == "") {
      alert("E-mail não informado");
      email.focus();
      return;
    }
    if (senha.value == "") {
      alert("Senha não informada");
      senha.focus();
      return;
    }
    
    // envia o formulário
    //formulario.submit();
}