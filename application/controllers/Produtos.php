<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller 
{
    public function index()
    {
        $texto = "Você está usando o controller produto";
        $dados = array("mensagem" => $texto);
        $this->load->view("produtos/lista", $dados);
    }
}
