<?php
    class Usuario {
        private $nome;
        private $email;
        private $user;
        private $senha;
        
        function __construct(string $nome, string $email,string $user,string $senha){
            $this ->nome = $nome;
            $this ->email = $email;
            $this ->user = $user;
            $this  ->senha = $senha;
             
        }
        
        public function __get($campo){
            return $this ->$campo;
        }
        
        public function __set($campo,$valor){
            return $this ->$campo = $valor;
        }
    
        public function compara(string $user,string $senha){
            return $this->user == $user  &&  $this->senha == $senha;
        }
    }

    
?>