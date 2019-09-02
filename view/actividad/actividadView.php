<div style="padding-top: 15px">
    <h5>Actividades</h5>
</div>
<div>
    <a href="index.php?c=actividad&a=mostrar">Nueva actividad</a>
</div>
<div style="padding: 10px">
    <form action="index.php?c=actividad&a=buscar" method="POST">
        <input type="text" name="b" placeholder="buscar..."/>
        
        <input type="submit" class="btn btn-primary" name="bot" value="Buscar"/>
    </form>
</div>


<table class="table">
    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
       
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($resultados as $act){?>
        <tr>
            <td scope="row"><?php echo $act->act_nombre;?></td>
            <td scope="row"><a href="index.php?c=actividad&a=mostrar&id=<?php
            echo $act->act_idActividad;?>">Editar</a></td>
            <td scope="row"><a href="index.php?c=actividad&a=eliminar&id=<?php 
            echo $act->act_idActividad;?>" 
            onclick="javascript:return confirm('esta seguro?');">Eliminar</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table> 
