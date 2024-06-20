<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$valor) {
    $valor = $valor * 2;
}
print_r($arr);
?>