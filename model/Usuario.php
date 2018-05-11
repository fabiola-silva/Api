<?php

require_once 'config/Conexao.php';

class Usuario extends Conexao
{
    private $table = "usuario";
    private $id;
    private $email;
    private $nome;
    private $senha;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function inserir(){

    }

    public function alterar(){

    }

    public function logar(){
        $sql = "SELECT id, nome, email FROM $this->table WHERE email = ? AND senha = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->email,$this->senha));
        if($stmt->rowCount() > 0)
            return $stmt->fetch();
        else
            return null;
    }

}