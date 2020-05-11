<?php
    include "../conexao.php";
    $tema = "Medieval";
    $numPerguntas = "10";
    $tempoTotal = "1800";
    $idQuizExcluir = "";

    $idDoAlterado = "16";
    $nomeTabela = "quiz";
    $valorAlterar = "LEgal";
    $colunaAlterar = "tema";
    
    //adcionarQuiz($conexao, $tema, $numPerguntas, $tempoTotal);
    //consultarQuiz($conexao);
    //excluirQuiz($conexao, $idQuizExcluir);
    //updateTabela($conexao, $nomeTabela, $idDoAlterado, $valorAlterar, $colunaAlterar);
?>





<?php

    function adcionarQuiz($conexao, $tema, $numPerguntas, $tempoTotal){
        $sql = "insert into quiz (tema, numPerguntas, tempoTotal) VALUES ('$tema', '$numPerguntas', '$tempoTotal')";
        mysqli_query($conexao, $sql) or die ("Falha ao inserir dados no banco");
    
    }
    function excluirQuiz($conexao, $idQuiz){
        $idQuiz;
        $sql = "DELETE from quiz WHERE idQuiz = '$idQuiz'";
        mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
    }

    function consultarQuiz($conexao){
        $sql = "SELECT * from quiz";
        $consulta = mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
        
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Tema</td>";
        echo "<td>Data inclusao</td>";
        echo "<td>Número de perguntas </td>";
        echo "<td>Tempo total</td>";
        echo"</tr>";

        while($dadosArray = mysqli_fetch_array($consulta)){
            echo "<tr>";
            echo "<td>" . $dadosArray['idQuiz'] . "</td>";
            echo "<td>" . $dadosArray['tema'] . "</td>";
            echo "<td>" . $dadosArray['dataInclusao'] . "</td>";
            echo "<td>" . $dadosArray['numPerguntas'] . "</td>";
            echo "<td>" . $dadosArray['tempoTotal'] . "</td>";
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

