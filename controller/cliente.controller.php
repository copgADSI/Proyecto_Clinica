<?php
require_once 'model/cliente.php';

class clienteController{

    private $model;

    public function __construct(){
        $this->model = new cliente();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';

    }

    public function Crud(){
        $cliente = new cliente();

        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';

    }

    public function Guardar(){
        $cliente = new cliente();

        $cliente->id = $_REQUEST['id'];
        $cliente->Name = $_REQUEST['Name'];
        $cliente->Lastname = $_REQUEST['Lastname'];
        $cliente->Document = $_REQUEST['Document'];
        $cliente->Genero = $_REQUEST['Genero'];
        $cliente->Telefono = $_REQUEST['Telefono'];
        $cliente->Email = $_REQUEST['Email'];
        $cliente->Password = $_REQUEST['Password'];


        $cliente->id > 0
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);

        header('Location: index6.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index6.php');
    }
}
