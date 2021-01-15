<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Produto;


class HomeController extends Controller {

    public function index() {
        $produtos = Produto::select()->execute();
        $flash='';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('home',[
            'produtos'=> $produtos
        ]);
    }
}