<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <FORM METHOD="POST" ACTION="./PROCESSES/calculo.proc.php">
            Total de la cuenta...<br>
            <INPUT TYPE="NUMBER" NAME="cuenta" ID="" placeholder="Total de la cuenta" ><br><br>
            ¿Que tal el servicio?<br>
            <select NAME="service" id=""><br>
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1">10% Normal</option>
                <option value="0.05">5% Malo</option>
            </select><br>
            <br>Total de personas:<br>
            <INPUT TYPE="NUMBER" NAME="totalpers" id="" placeholder="¿Cuántas personas van a pagar?"><br><br>
            <INPUT TYPE="SUBMIT" value="CALCULAR" NAME="submit"> <!--Botón para enviar formulario-->
        </FORM>
            <?php
                if(isset($_REQUEST['calculo'])){
                    echo "<h3>".$_REQUEST['calculo']. "€ / Por persona </h3>";
                }
            ?>
    </body>
</html>