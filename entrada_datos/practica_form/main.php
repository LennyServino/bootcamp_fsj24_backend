<?php
    function detalleImpresoras($pay_method, $cantidad) {
        $precio_unitario = 70;
        $descuento = 0;

        switch ($pay_method) {
            case 'efectivo':
                $descuento = 0.10;
                break;
            
            case 'tarjeta':
                $descuento = 0.05;
                break;

            case 'vale':
                $descuento = 0.15;
                break;
            default:
                break;
        }

        $subtotal = $cantidad * $precio_unitario;
        $total_descuento = $subtotal * $descuento;
        $total = $subtotal - $total_descuento;

        echo "Subtotal: $subtotal <br>";
        echo "Descuento: $total_descuento <br>";
        echo "Total: $total <br>";
        echo "Forma de pago: $pay_method <br>";
    }
?>