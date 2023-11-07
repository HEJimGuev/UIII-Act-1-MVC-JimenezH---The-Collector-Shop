<h1 class="page-header">
    <?php echo $alm->idempleado != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Empleado">EMPLEADOS</a></li>
  <li class="active"><?php echo $alm->idempleado != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Empleado&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idempleado" value="<?php echo $alm->idempleado; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su(s) Nombre(s)" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido Paterno</label>
        <input type="text" name="app" value="<?php echo $alm->app; ?>" class="form-control" placeholder="Ingrese su Apellido Paterno" data-validacion-tipo="requerido|min:7" />
    </div>

    <div class="form-group">
        <label>Apellido Materno</label>
        <input type="text" name="apm" value="<?php echo $alm->apm; ?>" class="form-control" placeholder="Ingrese su Apellido Materno" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="FechaNacimiento" value="<?php echo $alm->fecha_nmto; ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su Numero de Telefono" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Salario</label>
        <input type="text" name="salario" value="<?php echo $alm->salario; ?>" class="form-control" placeholder="Ingrese su Salario" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Turno</label>
        <input type="text" name="turno" value="<?php echo $alm->turno; ?>" class="form-control" placeholder="Ingrese su Turno" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
