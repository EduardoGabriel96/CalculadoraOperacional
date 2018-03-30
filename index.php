<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Calculadora</title>
    </head>
    <body>
        <h1>Calculadora Operacional</h1>
        <form method="post" action="index.php">
            Valor 1:<br>
            <input type="text" step="0.001" name="v1"><br>
            Valor 2:<br>
            <input type="text" step="0.001" name="v2"><br>
            Operação:<br>
            <select name="operacao">
                <option value='somar'>Somar</option>
                <option value='subtrair'>Subtrair</option>
                <option value='multiplicar'>Multiplicar</option>
                <option value='dividir'>Dividir</option>
            </select><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        include ('calculo.php');
        ?>
    </body>
</html>