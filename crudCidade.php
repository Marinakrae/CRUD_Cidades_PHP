<?php

    include 'conexaoBD.php';

    function cadastrarCidade($nome, $cep){
        connect();
        query("INSERT INTO cidade (nome, cep) VALUES ('$nome', '$cep')");
        close();
    }

    function mostrarCidades(){
        connect();
        $resultado = query("SELECT * FROM cidade");
        close();
        return $resultado;
    }

    function buscarCidade($codigo){
        connect();
        $resultado = query("SELECT * FROM cidade WHERE codigo=$codigo");
        close();
        return $resultado;
    }

    function alterarCidade($codigo, $nome, $cep){
        connect();
        query("UPDATE cidade SET nome='$nome', cep='$cep' WHERE codigo=$codigo");
        close();
    }

    function excluirCidade($codigo){
        connect();
        query("DELETE FROM cidade WHERE codigo=$codigo");
        close();
    }

    function mostrarCidadesPesquisar($pesquisa){
        connect();
        $resultado = query("SELECT * FROM cidade WHERE nome LIKE '%$pesquisa%' OR cep LIKE '%$pesquisa%'");
        close();
        return $resultado;
    }

?>