{include "header.tpl"}
    <header">
        <h1>Listado de combos por chocolate</h1>
    </header>

<main>
        {foreach $combos as $combo} <!-- recorro el arreglo-->
            <h3>{$combo->NOMBRE}</h3>
             <p>Categoria: {$combo->SABOR}</p>
            <a href="combos/{$combo->ID}">Ver Detalles</a>
        {/foreach}

</main>

{include "footer.tpl"}
</body>
</html>