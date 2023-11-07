<?php
class Empleado
{
	private $pdo;
    
    public $idempleado;
    public $nombre;
    public $app;
	public $apm;
    public $fecha_nmto;
    public $telefono;
    public $salario;
	public $turno;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM empleado");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idempleado)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM empleado WHERE idempleado = ?");
			          

			$stm->execute(array($idempleado));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idempleado)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM empleado WHERE idempleado = ?");			          

			$stm->execute(array($idempleado));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE empleado SET 
						nombre          = ?, 
						app        = ?,
						apm        = ?,
                        fecha_nmto        = ?,
						telefono            = ?, 
						salario        = ?,
						turno = ?
				    WHERE idempleado = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->app,
						$data->apm,
                        $data->fecha_nmto,
                        $data->telefono,
						$data->salario,
                        $data->turno,
                        $data->idempleado
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `empleado` (nombre,app,apm,fecha_nmto,telefono,salario,turno) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre, 
                    $data->app,
					$data->apm,
                    $data->fecha_nmto,
                    $data->telefono,
					$data->salario,
                    $data->turno                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
