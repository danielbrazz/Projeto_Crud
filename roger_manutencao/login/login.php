
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_estilo.css">
    <title>Roger Manutenção</title>
</head>
<body >
    
    <div class="tela-login">
        <form >
            <h1 class="pos_login" >Login</h1>
                <input type="text" class= 'login' placeholder="Login" id="login">
                <br><br>
                <input type="password"  class="senha" placeholder="Senha" id="senha">
                <br><br>           
                <input type="submit" class="button_acess" onclick="logar(); return false">

        </form>
    </div>    

    <script>


function logar(){

    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

    if(login == "admin" && senha == "admin"){
        alert('Sucesso');
        location.href = "../index.php";
    }else{
        alert('Usuario ou senha incorretos');
    }

}

</script>
    </body>
</html>






