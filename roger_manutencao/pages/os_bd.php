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
	  include 'class/serv.php';
	  $course = new ServManutencaoComputador();


		$course->settipo_servico($_POST['tipo_servico']);
		$course->setstatus_os($_POST['status_os']);
		$course->setnome_tecnico($_POST['nome_tecnico']);
		$course->setnome_cliente($_POST['nome_cliente']);
		$course->setnome_tag($_POST['nome_tag']);
		
        //criar o restante dos itens        
		
		$tipo_servico 	 = $course->gettipo_servico();
		$status_os  	 = $course->getstatus_os();
		$nome_tecnico    = $course->getnome_tecnico();
		$nome_cliente    = $course->getnome_cliente();
		$nome_tag    	= $course->getnome_tag();
					  	
		 if(mysqli_query($con,"insert into ordem_servico( tipo_servico, status_os, nome_tecnico, nome_cliente,nome_tag)
		 values( '$tipo_servico', '$status_os', '$nome_tecnico', '$nome_cliente','$nome_tag')"))
		 {	
		
			echo"<script>alert('Inclusão realizada com sucesso');</script>";
			echo"<script>window.location='index.php?page=cadastro_os'</script>"; 			
		 }
		 else{
			 
			 echo "<script>alert('Houve um erro na inserção');</script>";
			 echo "Erro: ".mysqli_error($con);
		 }
			 
?>
</body>
</html>	
	
