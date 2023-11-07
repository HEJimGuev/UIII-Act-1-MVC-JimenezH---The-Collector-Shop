<h1 class="page-header">EMPLEADOS - THE COLLECTOR SHOP</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Empleado&a=Crud">Agregar empleado</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >ID Empleado</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de Nacimiento</th>
            <th >Telefono</th>
            <th >Salario</th>
            <th>Turno</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idempleado; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->app; ?></td>
            <td><?php echo $r->apm; ?></td>
            <td><?php echo $r->fecha_nmto; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->salario; ?></td>
            <td><?php echo $r->turno; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Empleado&a=Crud&idempleado=<?php echo $r->idempleado; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Empleado&a=Eliminar&idempleado=<?php echo $r->idempleado; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
