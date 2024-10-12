<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Combos</title>
</head>
<body>
    <header">
        <h1>Listado de Chocos</h1>
    </header>

<main>
        {foreach $combos as $combo}
            <h3>{$combo->NOMBRE}</h3>
            <p>Cantidad: {$combo->CANTIDAD}</p>
        {/foreach}

</main>

    <footer>
        <p>&copy; 2024 ChocoAras</p>
    </footer>
</body>
</html>