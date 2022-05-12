<?php
    include 'crudCidade.php';
    $pesquisa = $_POST["palavra"];

    switch ( $pesquisa ) {
        case 'tudo':
            $resultado=mostrarCidades();
            break;
        default:
            $resultado=mostrarCidadesPesquisar($pesquisa);
            break;
    }

    if(mysqli_num_rows($resultado)<=0){
        echo 'Nenhuma cidade encontrada';
    } else {
        while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
            echo "
                  <tr>
                      <td>$resultadoSeparado[nome]</td>
                      <td>$resultadoSeparado[cep]</td>
                      <td><a class='btn btn-success' href='editarCidade.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
                  </tr>
                            
            ";
        }
    }
?>
