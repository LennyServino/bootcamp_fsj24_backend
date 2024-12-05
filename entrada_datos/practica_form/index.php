<h1>Datos FSJ24</h1>
    <form action="" method="POST">
        <label for="">cantidad</label>
        <input type="number" name="cantidad">

        <label for="">Correo</label>
        <select name="forma_pago" id="">
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="vale">Vale</option>
        </select>

        <button type="submit">Enviar Datos</button>
    </form>

    <?php
        require_once './main.php';

        /*
            -include: evalua el codigo y si esta mal devuelve un warning y se sigue ejecutando
            -require
            -include_once
            -require_once
        */

        //isset => verifica si algo esta definido o vacio

        if (isset($_POST['cantidad']) || isset($_POST['forma_pago'])) {
            $cantidad = $_POST['cantidad'];
            $forma_pago = $_POST['forma_pago'];
    
            detalleImpresoras($forma_pago, $cantidad);
        }
    ?>