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
	  include 'class/clie.php';
	  $contato = new contato();


 		$contato->setnome_cliente($_POST['nome_cliente']);
 		$contato->set_cpf($_POST['cpf']);
 		$contato->set_email($_POST['email']);
 		$contato->set_telefone($_POST['telefone']);
      
       
        //criar o restante dos itens        
	
		$nome        = $contato->getnome_cliente();
		$cpf         = $contato->get_cpf();
		$email       = $contato->get_email();
		$telefone    = $contato->get_telefone();
					  	
		 if(mysqli_query($con,"insert into cliente( nome_cliente, cpf_cliente, email_cliente, telefone)
		 values( '$nome', '$cpf', '$email', '$telefone')"))
		 {	
		
			echo"<script>alert('Inclusão realizada com sucesso');</script>";
			echo"<script>window.location='index.php?page=cadastro_cliente'</script>"; 			
		 }
		 else{
			 
			 echo "<script>alert('Houve um erro na inserção');</script>";
			 echo "Erro: ".mysqli_error($con);
		 }
			 
?>
</body>
</html>	
	
