<?php
class tecnico
{
    protected $nome_tecnico;
    protected $cpf_tecnico;
    protected $email_tecnico; 
   
    public function getnome_tecnico(){
        return $this->nome_tecnico;
    }
    
    public function setnome_tecnico($nome_tecnico){
        $this->nome_tecnico = $nome_tecnico;
    }
    
    public function getcpf_tecnico(){
        return $this->cpf_tecnico;
    }
    
    public function setcpf_tecnico($cpf_tecnico){
        $this->cpf_tecnico = $cpf_tecnico;
    }

    public function getemail_tecnico(){
        return $this->email_tecnico;
    }
    
    public function setemail_tecnico($email_tecnico){
        $this->email_tecnico = $email_tecnico;
    }
   
}

class Contato_tecnico extends tecnico{
    protected $telefone; 

    public function get_telefone(){
        return $this->telefone;
    }
    
    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }
}

?>
