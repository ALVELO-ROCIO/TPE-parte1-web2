<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver combo</title>
</head>
<body>
    <header">
        <h1>Listado de Chocolate por combo</h1>
    </header>

<main>
        {foreach $combo as $chocolate}
            <h3>Nombre: {$chocolate->NOMBRE}</h3>
            <p>Relleno: {$chocolate->RELLENO}</p>
            <p>Empaque: {$chocolate->EMPAQUE}</p>
        {/foreach}

</main>

    <footer>
        <p>&copy; 2024 ChocoAras</p>
    </footer>
</body>
</html>