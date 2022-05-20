<?php 

    class Cadastro{
        private $usuario;
        private $conexao;

        public function __construct(Conexao $conexao, Usuario $usuario){
            $this->conexao = $conexao->conectar();
            $this->usuario = $usuario;
        }

        public function verificarEmail($email){
            $email = $this->usuario->__get('email');
            $query = "
                SELECT email
                FROM tb_usuarios
                WHERE email = '$email'
            ";

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function cadastrarUsuario(){
            $query = '
                insert into tb_usuarios(nome, email, senha)values(:nome, :email, :senha)
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->usuario->__get('nome'));
            $stmt->bindValue(':email', $this->usuario->__get('email'));
            $stmt->bindValue(':senha', $this->usuario->__get('senha'));
            $stmt->execute();
        }
        
        public function verificaLogin($email, $senha){
            $email = $this->usuario->__get('email');
            $senha = $this->usuario->__get('senha');
            
            $query = "
                SELECT *
                FROM tb_usuarios
                WHERE email = '$email'
                AND senha = '$senha'
            ";

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            
        }
    }

?>