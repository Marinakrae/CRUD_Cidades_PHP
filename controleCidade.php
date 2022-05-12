<?php
    include 'crudCidade.php';
    $opcao = $_POST["opcao"];

    switch ($opcao) {
        case 'Cadastrar':
            cadastrarCidade($_POST["nome"], $_POST["cep"]);
            header("Location: cadastrarCidade.php");
            break;
        case 'Editar':
            alterarCidade($_POST["codigo"], $_POST["nome"], $_POST["cep"]);
            header("Location: visualizarCidade.php");
            break;
        case 'Excluir':
            excluirCidade($_POST["codigo"]);
            header("Location: visualizarCidade.php");
            break;    
            
    }

?>