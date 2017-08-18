<?php
    class Usuario{

        private $id;
        private $nome;
        private $sobrenome;
        private $login;
        private $senha;
        private $email;
        private $ativo;
        private $data_nascimento;
        private $data_cadastro;
        private $telefone1;
        private $telefone2;
        private $celular1;
        private $celular2;
        private $endereco;
        private $numero;
        private $complemento;
        private $cep;
        private $cpf_cnpj;
        private $rg;
        private $sexo;

        //set get 
        public function SetId($id){ $this->id = $id;}
        public function GetId($id){ return $this->id;}

        public function SetNome($nome){ $this->nome = $nome;}
        public function GetNome($nome){ return $this->nome;}

        public function SetSobrenome($sobrenome){ $this->sobrenome = $sobrenome;}
        public function GetSobrenome($sobrenome){ return $this->sobrenome;}

        public function SetLogin($login){ $this->login = $login;}
        public function GetLogin($login){ return $this->login;}

        //Continuar...
    }
?>