<?php
	include("login/conexao.php");

	$SQLi = "SELECT tipo_servicos FROM tipo_servco ";
	$resulto = $con->query($SQLi);

	$SQL_STATUS = "SELECT status_os FROM status_os";
	$resultado_os = $con->query($SQL_STATUS);

	$SQL_cliente = "SELECT nome_cliente FROM cliente";
	$resultado_cliente = $con->query($SQL_cliente);
		

	$SQL_tecnico = "SELECT nome_tecnico FROM tecnico";
	$resultado_tecnico = $con->query($SQL_tecnico);
		

		

?>
<html>
	  <link rel="stylesheet" href="css/style.css">

	<button class="abrir-modal">Novo</button>

	<div class="box box-hidden">
		<form method="post" action="index.php?page=os_bd">
			<fieldset>
				<legend><b>Cadastro de Ordem de Serviço</b></legend>
				<br><br>
				<div class="inputBox">
					<label >Tipo de Serviço:</label><br><br>
					<select class="inputUser" name="tipo_servico">
						<option disabled selected style="display:none" class="labelInput">Tipo de Serviço</option>
							<?php while($user_datas = mysqli_fetch_assoc($resulto)){ ?>
 								<option class="cor" value="<?php echo $user_datas['tipo_servicos'] ?>" ><?php echo $user_datas['tipo_servicos'] ?></option>
								
 							<?php } ?>
					</select>
				</div>
				<br>
				<div class="inputBox">
					<label >Status O.S:</label><br><br>
					<select class="inputUser" name="status_os">
						<option disabled selected style="display:none"> Status </option>
							<?php while($os = mysqli_fetch_assoc($resultado_os)){ ?>
 								<option class="cor" value="<?php echo $os['status_os'] ?>" ><?php echo $os['status_os'] ?></option>
								
 							<?php } ?>
					</select>
				</div>
				<br>
				<div class="inputBox">
					<label >Técnico</label><br><br>
					<select class="inputUser" name="nome_tecnico">
						<option disabled selected style="display:none"> Técnico </option>
							<?php while($tecnico_list = mysqli_fetch_assoc($resultado_tecnico)){ ?>
 								<option class="cor" value="<?php echo $tecnico_list['nome_tecnico'] ?>" ><?php echo $tecnico_list['nome_tecnico'] ?></option>
								
 							<?php } ?>
					</select>
				</div>
				<br>
				<div class="inputBox">
					<label >Cliente</label><br><br>
					<select class="inputUser" name="nome_cliente">
						<option disabled selected style="display:none"> Cliente </option>
							<?php while($cliente_list = mysqli_fetch_assoc($resultado_cliente)){ ?>
 								<option class="cor" value="<?php echo $cliente_list['nome_cliente'] ?>" ><?php echo $cliente_list['nome_cliente'] ?></option>
								
 							<?php } ?>
					</select>
				</div>
				<br>
				<div class="inputBox">
					<label >Nome Tag</label><br><br>
					<input class="inputUser" name="nome_tag" placeholder="Nome Computador">
				</div>
				<br><br>
				<button type="submit" class="btn btn-primary" id="submit">Salvar</button>
				<br><br>
				<button type="reset" class=" btn-fechar-modal" id="submit">Cancelar</button>

			</fieldset>
		</form>
	</div>

	<script>
		document.querySelector('.abrir-modal').addEventListener('click', function() {
			document.querySelector('.box').classList.remove('box-hidden');
		});

		document.querySelector('.btn-fechar-modal').addEventListener('click', function() {
			document.querySelector('.box').classList.add('box-hidden');
		});
	</script>
</html>
<?php

include("login/conexao.php");
$SQL = "SELECT * FROM ordem_servico ORDER BY id_os  ASC ";

$result = $con->query($SQL);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<title>Document</title>
<style>
	.table-bg{

		background:rgba(0,0,0,0.3);
	}
</style>
</head>
<body>
<div class="m-5">
	<table class="table table-bg">

		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Tipo Serviço</th>
			<th scope="col">Status</th>
			<th scope="col">Técnico</th>
			<th scope="col">Cliente</th>
			<th scope="col">Tag</th>
			</tr>
		</thead>

<tbody>

<?php

	while($user_data = mysqli_fetch_assoc($result))
	{
		echo"<tr>";
		echo "<td>".$user_data['id_os']."</td>";
		echo "<td>".$user_data['tipo_servico']."</td>";
		echo "<td>".$user_data['status_os']."</td>";
		echo "<td>".$user_data['nome_tecnico']."</td>";
		echo "<td>".$user_data['nome_cliente']."</td>";
		echo "<td>".$user_data['nome_tag']."</td>";
	}


?>
 
		  </tbody>
	</table>
</div>
</body>
</html>