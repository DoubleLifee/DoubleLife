<?php
  
    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../estilos/header-footer.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="../estilos/slider-medico.css">
    <link rel="shortcut icon" href="../imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    
</head>
<body>
 <?php
    include"menu-cliente.php";
    
    require "conexao.php";
 ?>
    
    <div class="container-geral">
        
    <?php
 ?>
 <form action="agendamento.php" method="POST">
    <select name="especialidadeSelecionada">
        <option value="" selected></option>
        <option value="cardiologia">Cardiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="geriatria">Geriatria</option>
        <option value="oncologia">Oncologia</option>
        <option value="ortopedia">Ortopedia</option>
        <option value="ginecologia">Ginecologia</option>
        <option value="urologia">Urologia</option>
    </select>
    <input value="enviar" type="submit">
 </form>
 <div class='swiper mySwiper container'>
<div class='swiper-wrapper content'>
<?php
    $especialidadeSelecionada = $_POST["especialidadeSelecionada"];
    
    if($especialidadeSelecionada == ""){
        $sql = "SELECT * FROM medico";
    } else{
        $sql = "SELECT * FROM medico where especialidade='$especialidadeSelecionada'";
    }
    
    $result = $conn->query($sql);
    $i = 0;
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $nome = $row["nome"];
            $especialidade = $row["especialidade"];
            $tempo = $row["tempo"];
            $avaliacao = $row["avaliacao"];
            $i++;
               
            echo"<div class='swiper-slide card'>
          <div class='card-content'>
            <div class='image'>
              <img src='../imagens/img". $i .".jpg' alt=''>
            </div>

            <div class='media-icons'>
              <i class='fab fa-facebook'></i>
              <i class='fab fa-twitter'></i>
              <i class='fab fa-github'></i>
            </div>

            <div class='name-profession'>
              <span class='name'>". $nome ."</span>
              <span class='profession'>Web Developer</span>
            </div>

            <div class='rating'>
              <i class='fas fa-star'></i>
              <i class='fas fa-star'></i>
              <i class='fas fa-star'></i>
              <i class='far fa-star'></i>
              <i class='far fa-star'></i>
            </div>

            <div class='button'>
              <button class='aboutMe'>About Me</button>
              <button class='hireMe'>Hire Me</button>
            </div>
          </div>
        </div>";
        
        $i++;
        }
    } else {
    		echo "<h1>Nenhum resultado foi encontrado.</h1>";
    } 
?>
    </div>
    </div>
</div>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    <script>
        const btnCal = document.querySelector(".button");
        
        function callCalendar(){
            document.location = '../eventoscontrolar.html';
        }
    </script>
    
</body>