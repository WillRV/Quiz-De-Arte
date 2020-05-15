<?php
    include "../conexao.php";
    
    //adicionarResposta($conexao,'11', '5 de fevereiro de 1992', '0');
    //excluirResposta($conexao, 5);
    //consultarResposta($conexao, 11);
    listarRespostas($conexao);
    //updateTabela($conexao, 12, "Resposta", "Data Certa");
    

?>





<?php

    function adicionarResposta($conexao, $idPergunta, $resposta, $respostaCerta){
        $sql = "INSERT into respostas (idPergunta, resposta, respostaCerta) VALUES ($idPergunta, '$resposta', $respostaCerta)";
        mysqli_query($conexao, $sql) or die ("Falha ao inserir dados no banco");
        echo $idPergunta;
    
    }

    function excluirResposta($conexao, $idRespostas){
        $sql = "DELETE from respostas WHERE idRespostas = '$idRespostas'";
        mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
    }

    function consultarResposta($conexao, $idPergunta){
        $sql = "SELECT * from respostas where idPergunta = $idPergunta";
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

    function listarRespostas($conexao){
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

    function updateTabela($conexao, $id, $colunaAlterar, $valorAlterar){
        $sql = "UPDATE respostas
        set $colunaAlterar = '$valorAlterar'
        where idRespostas = $id";

        mysqli_query($conexao, $sql) or die ("Falha ao alterar dado na tabela");
    }
?>

