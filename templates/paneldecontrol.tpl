{include "header.tpl"}

<main>

    <a href="logout"> Cerrar Sesion</a>

<a href="formnuevochocolate">Agregar chocolate</a>
{foreach $chocolates as $choco}
    <h2>{$choco->SABOR}</h2>
    <a href="borrarchocolate/{$choco->ID}">Eliminar</a>
    <a href="formeditarchocolate/{$choco->ID}">Editar</a>
    
{/foreach}

</main>
{include "footer.tpl"}
</body>
</html>