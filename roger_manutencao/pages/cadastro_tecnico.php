<button class="abrir-modal">Novo</button>

<div class="box box-hidden">
	<form method="post" action="index.php?page=inclusao_tecnico">
		<fieldset>
			<legend><b>Cadastro de Tecnico</b></legend>
			<br><br>
			<div class="inputBox">
				<label for="cars">Nome</label><br><br>
				<input class="inputUser" name="nome_tecnico" placeholder="Nome tecnico">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">CPF</label><br><br>
				<input class="inputUser" name="cpf_tecnico" placeholder="CPF">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">Email</label><br><br>
				<input class="inputUser" type = 'email'name="email_tecnico" placeholder="Email">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">Telefone</label><br><br>
				<input class="inputUser" name="telefone_tecnico" placeholder="Nome tecnico">
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

<?php

    include("login/conexao.php");
    $SQL = "SELECT * FROM tecnico ORDER BY id_tecnico  ASC ";

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
				<th scope="col">Nome</th>
				<th scope="col">CPF</th>
				<th scope="col">Email</th>
				<th scope="col">Telefone</th>
				</tr>
			</thead>
	
	<tbody>

    <?php

        while($user_data = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo "<td>".$user_data['id_tecnico']."</td>";
			echo "<td>".$user_data['nome_tecnico']."</td>";
			echo "<td>".$user_data['cpf_tecnico']."</td>";
            echo "<td>".$user_data['email_tecnico']."</td>";
            echo "<td>".$user_data['telefone_tecnico']."</td>";
            
        }
    
    
    ?>
     
  			</tbody>
		</table>
	</div>
</body>
</html>