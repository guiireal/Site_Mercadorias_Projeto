function validarDados() {
    var login = document.dados.login.value;
    var senha = document.dados.senha.value;

    if ((login == "admin") && (senha == "admin"))
        open("http://localhost/Negociacao%20de%20Mercadorias/varejo-servicos/gerenciador.php");
    else
        alert("Dados incorretos");
}