<?php
require_once '.\models\casino.model.php';
require_once '.\views\casino.view.php';

class CasinoController {
    private $casinoModel;
    private $casinoView;

    /* constructor*/
    function __construct() {
        $this->casinoModel = new CasinoModel();
        $this->casinoView = new CasinoView();
    }

    /*trae el tablero desde el model y lo envia a la vista*/
    public function getTablero() {
        $tablero = $this->casinoModel->getTablero();
        $this->casinoView->displayCasino($tablero);
    }
}