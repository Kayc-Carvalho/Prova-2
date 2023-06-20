<?php
    include("conexao.php");
    $data = $_POST['data'];
    $tipo = $_POST['opcao'];
    $valor = $_POST['valor'];
    $hist = $_POST['hist'];
    $cheque = $_POST['cheque'];


    echo "<h1>Dados do Usuário</h1>";
    echo "Data: $data <br>";
    echo "Tipo: $tipo <br>";
    echo "Histórico: $hist <br>";
    echo "Cheque: $cheque <br>";
    
    $sql = "INSERT into fluxo_caixa (data, tipo, valor, historico, cheque)";

    $sql .= "values ('".$data."','".$tipo."', '".$valor."', '".$hist."','".$cheque."')";

    //echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>
<a href="index.php">Voltar</a>