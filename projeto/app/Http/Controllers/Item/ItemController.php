<?php

use App\Http\Controllers\Controller;

    class ItemController extends Controller{
        
        public function cadastroDeItens(){
            return view('itens/cadastroDeItens1');
        }
    }
?>