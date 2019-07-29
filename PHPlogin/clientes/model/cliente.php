<?php
class cliente
{

	private $pdo;

    public $idcita;
    public $Tratamiento;
    public $Estado;
    public $Hora;
    public $Fecha;
    public $id;
		public $idDoctor;
		public $idMedico_Consultorio;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
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

			$stm = $this->pdo->prepare("SELECT * FROM cita");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idcita)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cita WHERE idcita = ?");


			$stm->execute(array($idcita));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcita)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cita WHERE idcita = ?");

			$stm->execute(array($idcita));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE cita SET
						Tratamiento      		= ?,
						Estado          = ?,
						Hora        = ?,
                        Fecha        = ?,
                        id        = ?,
												idDoctor        = ?,
												idMedico_Consultorio   = ?

				    WHERE idcita = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				     $data->Tratamiento,
                        $data->Estado,
                         $data->Hora,
                        $data->Fecha,
                        $data->id,
												$data->idDoctor,
												$data->idMedico_Consultorio

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cliente $data)
	{
		try
		{
		$sql = "INSERT INTO cita (Tratamiento,Estado,Hora,Fecha,id,idDoctor,idMedico_Consultorio)
		        VALUES (?, ?, ?, ?, ?, ? ,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $data->Tratamiento,
                    $data->Estado,
                    $data->Hora,
                    $data->Fecha,
                     $data->id,
										 $data->idDoctor,
										 $data->idMedico_Consultorio


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
