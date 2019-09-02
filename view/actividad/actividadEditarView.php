<div class="breadcrumb" style="margin-top: 20px; width: 80%">
    <a href="index.php?c=actividad&a=buscar">Actividad</a>->
    <?php echo isset($actividad)?$actividad->act_nombre:''; ?>
 </div>

<form action="index.php?c=actividad&a=guardar" method="post" style="width: 60%">
    <input type="hidden" name="id" value="<?php echo 
    isset($actividad)?$actividad->act_idActividad:''; ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Act_nombre" value="<?php echo
        isset($actividad)?$actividad->act_nombre:''; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>
<!--
    <div class="form-group">
        <label>Tipo</label>
        <select name="tipo" class="form-control">
            <option value="0" >seleccionar</option>
            <?php foreach ($tipos as $ti) {?>
                 <option value="<?php echo $ti['tipo_act_id']; ?>"
                      <?php 
                            if(isset($actividad)){
                             if($ti['tipo_act_id'] ==$actividad->act_idTipo){
                                 echo 'selected';
                             }
                            }
                        ?>    
                         >
                 <?php echo $ti['tipo_act_nombre']; ?></option>
            <?php }?>
        </select>
    </div>
-->
    <div class="text-right">
        <input type="submit" value="Guardar">

    </div>
</form>