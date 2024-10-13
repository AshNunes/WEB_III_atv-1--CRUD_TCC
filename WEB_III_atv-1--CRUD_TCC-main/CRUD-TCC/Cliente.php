<?php 

class Cliente {
    private $conexao;
    private $id;
    private $nome;
    private $numero_de_matricula;
    private $email;
    private $curso;

    public function __construct ($db){
        $this->conexao = $db;
    }

    public function setNome ($nome){
        $this->nome = $nome;
    }

    public function setCPF ($curso){
        $this->curso = $curso;
    }

    public function setTelefone ($numero_de_matricula){
        $this->numero_de_matricula = $numero_de_matricula;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCPF(){
        return $this->curso;
    }

    public function getTelefone(){
        return $this->numero_de_matricula;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getid(){
        return $this->id;
    }

    public function create(){
        $query = "INSERT INTO cliente SET nome=:nome, numero_de_matricula=:numero_de_matricula, email=:email, curso=:curso";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero_de_matricula", $this->numero_de_matricula);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":curso", $this->curso);

        if($stmt->execute()){
            return true;

        }
        return false;

    }

    public function read(){
        $query="select*from cliente";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function delete(){
        $query = "DELETE FROM cliente WHERE id=:id";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update() {
        $query = "UPDATE cliente SET nome=:nome,
                    numero_de_matricula=:numero_de_matricula, email=:email,
                    curso=:curso WHERE id=:id";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero_de_matricula", $this->numero_de_matricula);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":curso", $this->curso);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function consultar() {
        $query = "SELECT * FROM cliente WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
    
        return $stmt;
    }
    
}
?>