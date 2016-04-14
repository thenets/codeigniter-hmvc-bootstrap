<?php

class Users extends CI_Controller {
    public function index () {
        // Obtém os usuários do banco
        $users = $this->db->get('users')->result();
        
        // Exibe cada um dos usuários
        for ($i = 0; $i < count($users); $i++) {
            echo $users[$i]->first_name;
            echo "<br>";
        }
        
        
        // Adiciona um novo usuário ao banco de dados
        $this->first_name = "Kratos";
        $this->last_name  = "Asgard";
        $this->email      = "email@email";
        $this->db->insert('users', $this);
        
        
    }
    
    public function add () {
        echo "Bem vindo a pagina de cadastro!";
    }
}