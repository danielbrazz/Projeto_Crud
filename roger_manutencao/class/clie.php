<?php
class Cliente
{
    protected $nome_cliente;
    protected $cpf;
    protected $email; 
   
    public function getnome_cliente(){
        return $this->nome_cliente;
    }
    
    public function setnome_cliente($nome_cliente){
        $this->nome_cliente = $nome_cliente;
    }
    
    public function get_cpf(){
        return $this->cpf;
    }
    
    public function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    public function get_email(){
        return $this->email;
    }
    
    public function set_email($email){
        $this->email = $email;
    }
   
}

class contato extends Cliente{
    protected $telefone; 

    public function get_telefone(){
        return $this->telefone;
    }
    
    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }
}

?>
