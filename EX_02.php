<?php
$shopping_cart = "12";
$tipo = 'periférico';
$shipping_price = 0;
$total_import = 0;

    if($tipo == 'cables' && $shopping_cart < 20 ){
        echo 'no se puede enviar :(';

    }elseif($tipo == 'periférico' && $shopping_cart < 20){
        $shipping_price += 4.99;
        echo 'Los gastos de envio son de ', $shipping_price,' euros.';
    }

    if ($shopping_cart > 20 && $shopping_cart < 50) {
        $shipping_price += 4.99;
        echo 'Los gastos de envio son ', $shipping_price,' euros.';

    }elseif ($shopping_cart > 50 && $shopping_cart < 150){
        $shipping_price += 0;
        echo 'Los gastos de envio es de ', $shipping_price,' euros.';

    }elseif($shopping_cart > 150){
        $shipping_price +=0;
        echo 'El envio es de ', $shipping_price,' euros y además tiene un codigo descuento: GIMBERNAT_20%';
    }

    echo '<br />';
    echo '<br />';
    echo 'El coste del producto es de: ', $shopping_cart,' euros.';
    echo '<br />';
    echo '<br />';
    $total_import = $shopping_cart + $shipping_price;
    echo 'El total del pedido es de ', $total_import,' euros.';
?>
