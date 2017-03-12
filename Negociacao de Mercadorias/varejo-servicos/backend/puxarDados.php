<?php
    function listarDados() {
        $host = "localhost";
        $banco = "varejo";
        $login = "root";
        $senha = "";

        $conexao = new mysqli($host, $login, $senha, $banco);
        $sql = "SELECT mn.nome_mercadoria,
                       mn.preco_mercadoria,
                       mn.tipo_negociacao
                FROM mercadoria_negociacao AS mn;";

        return $conexao->query($sql);
    }
?>