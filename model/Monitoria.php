<?php

require_once 'config/Conexao.php';

class Monitoria extends Conexao
{
    private $table = 'monitoria';
    private $id;
    private $descricao;
    private $feedback;
    private $idUsuario;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @param mixed $feedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function inserir(){
        $sql = "INSERT INTO $this->table SET descricao = ?, feedback = ?, id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->descricao, $this->feedback, $this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;

    }

    public function deletar(){
        $sql = "DELETE  FROM $this->table WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function atualizar(){
        $sql = "UPDATE $this->table SET descricao = ?, feedback = ? WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->descricao, $this->feedback, $this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    public function buscar(){
        $sql = "SELECT id, descricao, feedback FROM $this->table WHERE id = ? AND id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->id,$this->idUsuario));
        if($stmt->rowCount() > 0)
            return $stmt->fetch();
        else
            return null;
    }

    public function listar(){
        $sql = "SELECT id, descricao, feedback FROM $this->table WHERE id_usuario = ?";
        $stmt = Conexao::prepare($sql);
        $stmt->execute(array($this->idUsuario));
        if($stmt->rowCount() > 0)
            return $stmt->fetchAll();
        else
            return null;
    }
}