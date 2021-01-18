<?php


	class User {
    	public $nome;
    	public $cognome;
    	public $username;
    	public $email;
    	public $password;
        public $eta;


    function __construct($_nome, $_cognome, $_username, $_email, $_password, $_eta ) {
    	$this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->username = $_username;
    	$this->email = $_email;
    	$this->password = $_password;
        $this->eta = $_eta;
    }


    public function getData() {
        return [
            'nome'=>$this->nome,
            'cognome'=>$this->cognome,
            'username'=>$this->username,
            'email'=>$this->email
        ];
    }

}


?>
