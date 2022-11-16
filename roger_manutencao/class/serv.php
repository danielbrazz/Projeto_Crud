<?php

class Serv
{

    protected $tipo_servico; 
    protected $status_os; 
    protected $nome_tecnico;
    protected $nome_cliente;



    public function gettipo_servico(){
        return $this->tipo_servico;
    }
    
    public function settipo_servico($tipo_servico){
        $this->tipo_servico = $tipo_servico;
    }

    public function getstatus_os(){
        return $this->status_os;
    }
    
    public function setstatus_os($status_os){
        $this->status_os = $status_os;
    }

    public function getnome_tecnico(){
        return $this->nome_tecnico;
    }
    
    public function setnome_tecnico($nome_tecnico){
        $this->nome_tecnico = $nome_tecnico;
    }

    public function getnome_cliente(){
        return $this->nome_cliente;
    }
    
    public function setnome_cliente($nome_cliente){
        $this->nome_cliente = $nome_cliente;
    }

}



class ServManutencaoComputador extends Serv
{
    protected $nome_tag;

    public function getnome_tag(){
        return $this->nome_tag;
    }
    
    public function setnome_tag($nome_tag){
        $this->nome_tag = $nome_tag;
    }
   
   
}

?>
