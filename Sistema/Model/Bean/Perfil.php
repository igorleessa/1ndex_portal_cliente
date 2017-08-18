<?php
    class Perfil{
        private $id;
        private $nome;
        private $descricao;
        
        //set get 
        public function SetId($id){ $this->id = $id;}
        public function GetId($id){ return $this->id;}

        public function SetNome($nome){ $this->nome = $nome;}
        public function GetNome($nome){ return $this->nome;}

        public function SetDescricao($descricao){ $this->descricao = $descricao;}
        public function GetDescricao($descricao){ return $this->descricao;}
    }
?>