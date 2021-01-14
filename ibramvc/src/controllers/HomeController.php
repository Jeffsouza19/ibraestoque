<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Produto;

class HomeController extends Controller {

    public function index() {
        $produtos = Produto::select()->execute();


        $this->render('home',[
            'produtos'=> $produtos
        ]);
    }
}