<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- estilo que vem do index.css -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    


    
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    
    
    <div>
        
        <a href="?page=cadastro_os">cadastro os</a>
        <a href="?page=cadastro_cliente">cadastro cliente</a>
        
    </div>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image"></span>

                <div class="text logo-text">
                    <span class="name">Roger  </span>
                    <span class="name">Manutenção</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">


                    <li class="nav-link">
                        <a href="?page=cadastro_os">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text ">Cadastro de O.S</span>                            
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="?page=cadastro_cliente">
                        
                            <i class='bx bxs-user-pin icon' ></i>
                            <span class="text nav-text ">Cadastro de Cliente</span>                            
                        </a>
                    </li>

                    
                    <li class="nav-link">
                        <a href="?page=cadastro_tecnico ">
                        
                        <i class='bx bx-id-card icon '></i>
                            <span class="text nav-text ">Cadastro de Técnico</span>                            
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <button class="text nav-text " onclick = "deslogar();return false">Logout</button>
                    </a>
                </li>        
            </div>
        </div>
    </nav>
    



    <section class="home">
        <div class="text">Atendimento</div>
        <?php include_once('pages/' . $_GET['page'] . '.php'); ?>
       
<Br>
        

    </section>
    

    <script>
        
      const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      procurar = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
      
      function deslogar(){
    
        location.href = "login/login.php";
  }

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

procurar.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})
/*funcao do professor*/ 
document.querySelector('.abrir-modal').addEventListener('click', function() {
	document.querySelector('.box').classList.remove('box-hidden');
})

document.querySelector('.btn-fechar-modal').addEventListener('click', function() {
	document.querySelector('.box').classList.add('box-hidden');
});
    </script>

</body>
</html>
