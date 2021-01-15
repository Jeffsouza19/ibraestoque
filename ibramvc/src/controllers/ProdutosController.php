<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Produto;

class ProdutosController extends Controller {

    public function add(){
        $flash='';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('add',['flash'=>$flash]);
    }

    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $preco = filter_input(INPUT_POST, 'valor');
        $quant = filter_input(INPUT_POST, 'quantidade');
        $valor = number_format($preco, 2, '.', '');
        $quantidade = number_format($quant);

            if($nome && $valor && $quantidade){
                $data = Produto::select()->where('nome', $nome)->execute();

                if(count($data)===0){

                    Produto::insert([
                        'nome'=> $nome,
                        'valor'=> $valor,
                        'quantidade'=> $quantidade
                    ])->execute();
                    
                    $_SESSION['flash']='Produto adicionado com sucesso!';
                    $this->redirect('/novo');
                    

                }
                $_SESSION['flash']='Produto já existente em estoque';
                
                    $this->redirect('/novo');
            }

            $_SESSION['flash']='Todos os campos devem ser preenchidos';
            $this->redirect('/novo');
       
     }
       
    

    public function edit($args){
        $produto = Produto::select()->where('id', $args['id'])->one();


        $this->render('edit', [
            'produto' => $produto
        ]);
    }

    public function editAction($args){

        $nome = filter_input(INPUT_POST, 'nome');
        $valor = filter_input(INPUT_POST, 'valor');
        $quantidade = filter_input(INPUT_POST, 'quantidade');

        if($nome && $valor && $quantidade){

            Produto::update()
                ->set('nome', $nome)
                ->set('valor', $valor)
                ->set('quantidade', $quantidade)
                ->where('id', $args['id'])
            ->execute();

            
            $this->redirect('/');

        }

        $this->redirect('/produto/'.$args['id'].'/editar');

    }


    public function del($args){
        Produto::delete()
            ->where('id', $args['id'])
            ->execute();

            
        $this->redirect('/');
    }

}