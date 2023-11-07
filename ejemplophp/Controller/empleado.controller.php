<?php
require_once 'Model/empleado.php';

class EmpleadoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Empleado();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/empleado.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Empleado();
        
        if(isset($_REQUEST['idempleado'])){
            $alm = $this->model->getting($_REQUEST['idempleado']);
        }
        
        require_once 'View/header.php';
        require_once 'View/empleado-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Empleado();
        
        $alm->idempleado = $_REQUEST['idempleado'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->app = $_REQUEST['app'];
        $alm->apm = $_REQUEST['apm'];
        $alm->fecha_nmto = $_REQUEST['FechaNacimiento'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->salario = $_REQUEST['salario'];
        $alm->turno = $_REQUEST['turno'];

        // SI ID EMPELADO ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA EMPLEADO, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idempleado > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idempleado > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idempleado']);
        header('Location: index.php');
    }
}
