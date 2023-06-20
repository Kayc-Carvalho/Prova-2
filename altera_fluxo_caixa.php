<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM fluxo_caixa WHERE id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de fluxo</h1>
    <form action="cadastrar_fluxo_caixa.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Data: </label>
            <input type="date" name="data" id="data">
        </div>
        <p>Tipo: </p>
        <input type="radio" name="opcao" value = "entrada"> Entrada
        <input type="radio" name="opcao" value = "saida"> Saída
        <div>
            <label for="valor">Valor: </label>
            <input type="number" name="valor" id="valor" step="0.01">
        </div>
        <div>
            <label for="hist">Histórico: </label>
            <input type="text" name="hist" id="hist">
        </div>
        <div>
            <p>Cheque:</p>
            <select name = "cheque">
                <option value="Não">Não</option>
                <option value="Sim">Sim</option>
            </select>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>