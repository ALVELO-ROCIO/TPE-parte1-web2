{include "header.tpl"}





<main>
        {foreach $usuarios as $usuario}
            <h3>{$usuario->nombre} estas</h3>
            <p>Bienvenido a ChocoAras {$usuario->Nombre}</p>
            <a href="index.php?action=login/{$usuario->ID}">Ver todos los combos por chocolate</a>
        {/foreach}

</main>
{include "footer.tpl"}
</body>
</html>