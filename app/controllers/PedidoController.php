<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\PedidoService;
use app\models\service\Service;
use app\util\UtilService;

class PedidoController extends Controller{
    public function __construct(){
        $this->usuario = UtilService::getUsuario();
        if(!$this->usuario){
           $this->redirect(URL_BASE ."login");
           exit;  
        }
     }
    private $tabela = 'pedido';
    private $campo  = 'id_pedido';
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = 'Pedido/Index';
        $this->load("template",$dados);

    }

    public function create(){
        $id_cliente = $this->usuario->id_cliente;
        $pedido = PedidoService::getPedidoNaoFinalizado($this->usuario->id_cliente);
        if(!$pedido){
            $id_pedido = Service::inserir(["id_cliente" =>$id_cliente,"data"=>hoje(),"hora"=>agora()], "pedido");
            $pedido = PedidoService::getPedido($id_pedido);
        }
        $dados['pedido'] = $pedido;
        //i($dados['pedido']);
        $dados['view'] = 'Pedido/Create';
        $this->load("template",$dados);
    }

    public function edit($id){
        
    }

    public function salvar(){
        
    }

    public function excluir($id){
        
    }
}