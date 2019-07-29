<?php
class cliente
{

	private $pdo;

    public $id;
    public $Name;
    public $Lastname;
    public $Document;
    public $Genero;
    public $Telefono;
    public $Email;
	  public $Password;
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

			$stm = $this->pdo->prepare("SELECT * FROM users");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM users WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM users WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE users SET
						Name      		= ?,
						Lastname          = ?,
						Document        = ?,
                        Genero        = ?,
                        Telefono        = ?,
												    Email        = ?,
														    Password        = ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->Name,
							$data->Lastname,
							 $data->Document,
							$data->Genero,
							$data->Telefono,
							$data->Email,
							$data->Password,

                        $data->id
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
		$sql = "INSERT INTO users (Name,Lastname,Document,Genero,Telefono,Email,Password)
		        VALUES (?, ?, ?, ?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $data->Name,
                    $data->Lastname,
                    $data->Document,
                    $data->Genero,
                     $data->Telefono,
										 $data->Email,
										 $data->Password


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
