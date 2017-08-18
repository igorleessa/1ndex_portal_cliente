<?php
    class Empresa{
        private $id;
        private $nome;
        private $cpf_cnpj;
        private $login;
        private $descricao;
        private $ativo;
        private $data_nascimento;
        private $endereco_site;
        private $telefone1;
        private $telefone2;
        
        //set get 
        public function SetId($id){ $this->id = $id;}
        public function GetId($id){ return $this->id;}

        public function SetNome($nome){ $this->nome = $nome;}
        public function GetNome($nome){ return $this->nome;}

        public function SetCpfCnpj($cpf_cnpj){ $this->cpf_cnpj = $cpf_cnpj;}
        public function GetCpfCnpj($cpf_cnpj){ return $this->cpf_cnpj;}

        public function SetLogin($login){ $this->login = $login;}
        public function GetLogin($login){ return $this->login;}

        public function SetDescricao($descricao){ $this->descricao = $descricao;}
        public function GetDescricao($descricao){ return $this->descricao;}

        public function SetAtivo($ativo){ $this->ativo = $ativo;}
        public function GetAtivo($ativo){ return $this->ativo;}

        public function SetDataNascimento($data_nascimento){ $this->data_nascimento = $data_nascimento;}
        public function GetDataNascimento($data_nascimento){ return $this->data_nascimento;}

        public function SetEnderecoSite($endereco_site){ $this->endereco_site = $endereco_site;}
        public function GetEnderecoSite($endereco_site){ return $this->endereco_site;}

        public function SetTelefone1($telefone1){ $this->telefone1 = $telefone1;}
        public function GetTelefone1($telefone1){ return $this->telefone1;}

        public function SetTelefone2($telefone2){ $this->telefone2 = $telefone2;}
        public function GetTelefone2($telefone2){ return $this->telefone2;}

    }
?>