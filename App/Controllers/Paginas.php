<?php
class Paginas extends Controller{
    public function index(){
        $dados = ['titulo'=>'Página Inicial',
                  'descricao'=>'Aula de PHP'
                 ];

        $this->view('pagina/home', $dados);
    }
    public function sobre($id){
        $dados = ['titulo'=>'sobre nos...',
        'descricao'=>'there are many 
        variantions of passeges of Lorem
        Ipsum available, but the majority
        have suffered alteration in some 
        form, by injected humour, or
        randomised words which dont look even
        '

        echo $id.'<hr>';
    }
    
}