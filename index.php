<!DOCTYPE html>
<html lang="es" dir="ltrs">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>

<body>
    <header>
        <h1>Test Index [<?php echo date('Y-m-d') ?>]</h1>
    </header>
    <main role="main">
        <details>
            <summary>Datos del Servidor [PHP]</summary>
            <p>
                <?php
                foreach ($_SERVER  as $key)
                    echo "&emsp;[server ~]$&emsp;" . $key . "<br>";
                ?>
            </p>
        </details>
    </main>
</body>

</html>