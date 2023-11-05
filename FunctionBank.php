<?php

function padraoDeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function sacar($saldo,$valorSacado)
{
    if($valorSacado > $saldo["saldo"]){
        padraoDeMensagem("Você não pode sacar");
    } else {
        $saldo["saldo"] -= $valorSacado;
    }
    return $saldo;
}

function deposito($saldo, $deposito)
{
    if($deposito > 0){
        $saldo["saldo"] += $deposito;
    } else {
        padraoDeMensagem("Não foi possível realizar o deposito");
    }
    return $saldo;
}