<?php
    include "../conexao.php";
    
    //adicionarResposta($conexao, '11', '5 de fevereiro de 1992', '1');
    //excluirResposta($conexao, '1');
    consultarResposta($conexao);
    

?>





<?php

    function adicionarResposta($conexao, $idPergunta, $resposta, $respostaCerta){
        $sql = "insert into respostas (idPergunta, resposta, respostaCerta) VALUES ($idPergunta', 
        '$resposta', '$respostaCerta')";
        mysqli_query($conexao, $sql) or die ("Falha ao inserir dados no banco");
    
    }

    function excluirResposta($conexao, $idRespostas){
        $sql = "DELETE from respostas WHERE idRespostas = '$idRespostas'";
        mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
    }

    function consultarResposta($conexao){
        $sql = "SELECT * from respostas";
        $consulta = mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
        
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID Respostas</td>";
        echo "<td>ID Pergunta</td>";
        echo "<td>Resposta</td>";
        echo "<td>Resposta Certa</td>";
        echo "<td>Data inclusao</td>";
        echo"</tr>";

        while($dadosArray = mysqli_fetch_array($consulta)){
            echo "<tr>";
            echo "<td>" . $dadosArray['idRespostas'] . "</td>";
            echo "<td>" . $dadosArray['idPergunta'] . "</td>";
            echo "<td>" . $dadosArray['resposta'] . "</td>";
            echo "<td>" . $dadosArray['respostaCerta'] . "</td>";
            echo "<td>" . $dadosArray['dataInclusao'] . "</td>";
            echo "</tr>";
        }   
    }

    function updateTabela($conexao, $nomeTabela, $idDoAlterado, $valorAlterar, $colunaAlterar){
        $sql = "UPDATE $nomeTabela
        set $colunaAlterar = '$valorAlterar'
        where idQuiz = $idDoAlterado";

        mysqli_query($conexao, $sql) or die ("Falha ao alterar dado na tabela");
    }
?>

