<?php

require_once "FunctionBank.php";

$conta =[
    "Pedro" => [
        "cpf" => "123.456.789-12",
        "agencia" => "12345",
        "dataDeNascimento" => "12/12/12",
        "saldo" => 5000
    ],
    "Maria" => [
        "cpf" => "123.456.890-23",
        "agencia" => "12356",
        "dataDeNascimento" => "01/01/11",
        "saldo" => 5000
    ],
    "Luan" => [
        "cpf" => "123.456.901-23",
        "agencia" => "12367",
        "dataDeNascimento" => "02/02/10",
        "saldo" => 5000
    ],
];

// unset($conta['Maria']);

$conta["Pedro"] = sacar($conta["Pedro"], 1000);

$conta["Pedro"] = deposito($conta["Pedro"], 500);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body>
    <h1>Contas Corrente</h1>
    <dl>
        <?php
        foreach($conta as $titular => $contas){ ?>
        <dt>
            <dd> Titular: <?php padraoDeMensagem($titular); ?> </dd>
            <dd> Saldo: <?php padraoDeMensagem($contas["saldo"]);?> <br></dd>
        </dt>
        <?php } ?>
    </dl>
</body>
</html>