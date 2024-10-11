<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Choco</title>
</head>
<body>
    <header">
        <h1>Listado de Chocos</h1>
    </header>

<main>
        {foreach $chocolates as $choco}
            <h3>{$choco->SABOR}</h3>
            <p>Relleno: {$choco->RELLENO}</p>
            <p>Empaque: {$choco->EMPAQUE}</p>
            <a href="index.php?action=combosporchocolate/{$choco->ID}">Ver todos los combos por chocolate</a>
        {/foreach}

</main>

    <footer>
        <p>&copy; 2024 ChocoAras</p>
    </footer>
</body>
</html>