<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de Serviço</title>
	</head>
	<body>
	  <?php
      //depois de acabar as classes
	    
		
	  include 'login/conexao.php';
	  include 'class/tecn.php';
	  $contato_tecnico = new Contato_tecnico();


 		$contato_tecnico->setnome_tecnico($_POST['nome_tecnico']);
 		$contato_tecnico->setcpf_tecnico($_POST['cpf_tecnico']);
 		$contato_tecnico->setemail_tecnico($_POST['email_tecnico']);
 		$contato_tecnico->set_telefone($_POST['telefone_tecnico']);
		
      
       
        //criar o restante dos itens        
	
		$nome        = $contato_tecnico->getnome_tecnico();
		$cpf         = $contato_tecnico->getcpf_tecnico();
		$email       = $contato_tecnico->getemail_tecnico();
		$telefone    = $contato_tecnico->get_telefone();
					  	
		 if(mysqli_query($con,"insert into tecnico( nome_tecnico, cpf_tecnico, email_tecnico, telefone_tecnico)
		 values( '$nome', '$cpf', '$email', '$telefone')"))
		 {	
		
			echo"<script>alert('Inclusão realizada com sucesso');</script>";
			echo"<script>window.location='index.php?page=cadastro_tecnico'</script>"; 			
		 }
		 else{
			 
			 echo "<script>alert('Houve um erro na inserção');</script>";
			 echo "Erro: ".mysqli_error($con);
		 }
			 
?>
</body>
</html>	
	
