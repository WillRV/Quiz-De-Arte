<?php
    include "../conexao.php";
    
    //Variaveis

    $idQuiz;
    $pergunta;
    $imagem;
    $tempoResposta;
    $idPergunta;

    $nomeTabela;
    $idDoAlterado;
    $valorAlterar;
    $colunaAlterar;

    consultarPergunta($conexao);
    //adicionarPergunta($conexao, '17', 'Quando nasceu neymar', '', '50');
    //excluirPergunta($conexao, '12');
?>





<?php

    function adicionarPergunta($conexao, $idQuiz, $pergunta, $imagem, $tempoResposta){
        $sql = "insert into perguntas (idQuiz, pergunta, imagem, tempoResposta) VALUES ('$idQuiz',
        '$pergunta', '$imagem', '$tempoResposta')";
        mysqli_query($conexao, $sql) or die ("Falha ao inserir dados no banco");
    
    }

    function excluirPergunta($conexao, $idPergunta){
        $sql = "DELETE from perguntas WHERE idPergunta = '$idPergunta'";
        mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
    }

    function consultarPergunta($conexao){
        $sql = "SELECT * from perguntas";
        $consulta = mysqli_query($conexao, $sql) or die ("Falha ao deletar dados no banco");
        
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Pergunta</td>";
        echo "<td>Imagem</td>";
        echo "<td>Tempo Resposta</td>";
        echo "<td>idQuiz</td>";
        echo "<td>Data inclusao</td>";
        echo"</tr>";

        while($dadosArray = mysqli_fetch_array($consulta)){
            echo "<tr>";
            echo "<td>" . $dadosArray['idPergunta'] . "</td>";
            echo "<td>" . $dadosArray['pergunta'] . "</td>";
            echo "<td>" . $dadosArray['imagem'] . "</td>";
            echo "<td>" . $dadosArray['tempoResposta'] . "</td>";
            echo "<td>" . $dadosArray['idQuiz'] . "</td>";
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

