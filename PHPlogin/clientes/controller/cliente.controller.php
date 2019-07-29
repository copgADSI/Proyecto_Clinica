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

        if(isset($_REQUEST['idcita'])){
            $cliente = $this->model->Obtener($_REQUEST['idcita']);
        }

        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';

    }

    public function Guardar(){
        $cliente = new cliente();

        $cliente->idcita = $_REQUEST['idcita'];
        $cliente->Tratamiento = $_REQUEST['Tratamiento'];
        $cliente->Estado = $_REQUEST['Estado'];
        $cliente->Hora = $_REQUEST['Hora'];
        $cliente->Fecha = $_REQUEST['Fecha'];
        $cliente->id = $_REQUEST['id'];
        $cliente->idDoctor = $_REQUEST['idDoctor'];
        $cliente->idMedico_Consultorio = $_REQUEST['idMedico_Consultorio'];
        $cliente->idcita > 0
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);

        header('Location: index0.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcita']);
        header('Location: index0.php');
    }
}
