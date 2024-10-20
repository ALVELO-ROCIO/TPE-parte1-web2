{include 'header.tpl'}

<div class="container">

    <h3> Editar un chocolate </h3>
    <form action="editarchocolate" method="PUT">
        
        <label>Sabor</label>
        <input name="sabor" type="text" required value="{$chocolate->SABOR}">
        <label>Relleno</label>
        <input name="relleno" type="text" required value="{$chocolate->RELLENO}" >
        <label>Empaque</label>
        <input name="empaque" type="text" required value="{$chocolate->EMPAQUE}" >

        <button type="submit">Editar</button>
        <a href="paneldecontrol" type="button">Cancelar</a>         
        
    </form>    
    </div> 
    
       
    
    