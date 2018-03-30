<?php
function validar($v1, $v2){
    return is_numeric($v1) && is_numeric($v2);
}
function somar($v1, $v2){
    return $v1+$v2;
}
function subtrair($v1, $v2){
    return $v1-$v2;
}
function multiplicar($v1, $v2){
    return $v1*$v2;
}
function dividir($v1, $v2){
    return $v1/$v2;
}
if(isset($_POST['v1']) && isset($_POST['v2']) && isset($_POST['operacao'])){
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $op = $_POST['operacao'];  
    
    if(validar($v1, $v2)) {
        switch ($op) {
            case 'somar':
                echo(somar($v1, $v2));
                break;
            case 'subtrair':
                echo(subtrair($v1, $v2));
                break;
            case 'multiplicar':
                echo(multiplicar($v1, $v2));
                break;
            case 'dividir':
                echo(dividir($v1, $v2));
                break;
        }
    }else{
        echo('Valor inválido');
    }
}
?>