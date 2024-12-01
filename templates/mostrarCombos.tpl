
{include "header.tpl"}
    <header">
        <h1>Listado de Combos</h1>
    </header>

<main>
        {foreach $combos as $combo}
            <h3>{$combo->NOMBRE} <a href="combos/{$combo->ID}">Ver mas</a> </h3>
        {/foreach}

</main>

{include "footer.tpl"}
</body>
</html>