
<button class="abrir-modal">Novo</button>

<div class="box box-hidden">
	<form method="post" action="index.php?page=inclusao_cliente">
		<fieldset>
			<legend><b>Cadastro de Cliente</b></legend>
			<br><br>
			<div class="inputBox">
				<label for="cars">Nome</label><br><br>
				<input class="inputUser" name="nome_cliente" placeholder="Nome Cliente">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">CPF</label><br><br>
				<input class="inputUser" name="cpf" placeholder="CPF">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">Email</label><br><br>
				<input class="inputUser" type = 'email'name="email" placeholder="Email">
			</div>
			<br>
			<div class="inputBox">
				<label for="cars">Telefone</label><br><br>
				<input class="inputUser" name="telefone" placeholder="Nome Cliente">
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
    $SQL = "SELECT * FROM cliente ORDER BY id_cliente  ASC ";

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
            echo "<td>".$user_data['id_cliente']."</td>";
			echo "<td>".$user_data['nome_cliente']."</td>";
			echo "<td>".$user_data['cpf_cliente']."</td>";
            echo "<td>".$user_data['email_cliente']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            
        }
    
    
    ?>
     
  			</tbody>
		</table>
	</div>
</body>
</html>