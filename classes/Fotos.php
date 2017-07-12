<?php

require_once 'Crud.php';

class Fotos extends Crud{
	
	protected $table = 'fotos';
        private $id_foto;
	private $nome_foto;
	private $email;
        private $imagem;

        public function setIdFoto($id_foto){
		$this->id_foto = $id_foto;                  
	}
        public function getIdFoto(){
		return $this->id_foto;
	}
	public function setNomeFoto($nome_foto){
		$this->nome_foto = $nome_foto;
	}
	public function getNomeFoto(){
		return $this->nome_foto;
	}
        function getEmail() {
            return $this->email;
        }

        function getImagem() {
            return $this->imagem;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setImagem($imagem) {
            $this->imagem = $imagem;
        }

               
	public function insert(){

		$sql  = "INSERT INTO $this->table ( nome_foto, email, imagem) VALUES ( :nome_foto,:email, :imagem)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_foto', $this->id_foto);
		$stmt->bindParam(':nome_foto', $this->nome_foto);
                $stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':imagem', $this->imagem);
		return $stmt->execute(); 

	}

	public function update(){

		$sql  = "UPDATE $this->table SET nome_foto = :nome_foto, email = :email,  WHERE id_foto = :id_foto";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_foto', $this->id_foto);
		$stmt->bindParam(':nome_foto', $this->nome_foto);
                $stmt->bindParam(':email', $this->email);		
		return $stmt->execute();

	}

}