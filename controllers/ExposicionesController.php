<?php

class ExposicionesController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Exposiciones();
    }

    public function listado_exposiciones() {
        $exposiciones = $this->modelo->getExposiciones();
        require_once 'views/exposiciones/listado_exposiciones.php';
    }

    public function crear_expo() {
        $expo = $_POST;
        $this->modelo->createExposicion($expo);
        require_once 'views/exposiciones/crear_expo.php';
    }

    public function editar_expo($id) {
        $expo = $this->modelo->getExposicionById($id);
        require_once 'views/exposiciones/editar_expo.php';
    }

    public function update($id) {
        $expo = $_POST;
        $this->modelo->updateExposicion($id, $expo);
        header('Location: index.php?controller=Exposiciones&action=index');
    }
}
?>
