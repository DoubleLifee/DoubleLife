<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!--HTML 5-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <!--Conteúdo-->
      <title>DoubleLife</title>
      <meta name="title" content="DoubleLife">
      <meta name="description" content="Somos uma clínica médica nova e com grande potencial. Conheça nossas opções de seguro DoubleLife. Planos de vida, saúde e empresariais.">
      <meta name="author" content="Luan Roger, Ana Eduarda, Isabel Marinho, Diego Tasso, Felipe Martins, Gabriel Tavares">


      <!--Icone-->
      <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">


      <!--Folhas de Estilo-->
      <link rel="stylesheet" href="/estilos/style.css">


      <!--Links Externos-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
   </head>


   <!--Header-->
   <?php
        include "menu.php";
   ?>

   <!--Corpo-->
   <body>

      <!--Principal-->
      <main id="main-indexc">

         <section>

            <!--Sessão Conteúdo-->
            <div class="section">
               <!--Primeira Sessão-->
               <a href="/agendamento.php" class="section-single" id="agendamento-sc">
                  <i class="fa-solid fa-house-chimney-medical" id="section_color"></i>
                  <h2 id="section_color">Agendamento</h2>
                  <p id="section_color">Agende sua consulta com um de nossos médicos.</p>
               </a>

               <!--Segunda Sessão-->
               <a href="#" class="section-single" id="servicos-sc">
                  <i class="fa-solid fa-house-chimney-medical" id="section_color"></i>
                  <h2 id="section_color">Nossos Planos</h2>
                  <p id="section_color">Explore nossos planos e seguros DoubleLife.</p>
               </a>

               <!--Terceira Sessão-->
               <a href="#" class="section-single" id="nossosPlanos-sc">
                  <i class="fa-solid fa-house-chimney-medical" id="section_color"></i>
                  <h2 id="section_color">Serviços</h2>
                  <p id="section_color">Acesse nossos serviços médicos disponíveis.</p>
               </a>

               <!--Quarta Sessão-->
               <a href="doacoes.php" class="section-single" id="sobreNos-sc">
                  <i class="fa-solid fa-house-chimney-medical" id="section_color"></i>
                  <h2 id="section_color">Doações</h2>
                  <p id="section_color">Conheça mais sobre os sistemas de doações DoubleLife.</p>
               </a>
            </div>
         </section>
         </main>

        <section>
            <div class="container">
               <div class="doacoes">
                  <div id="doacoes-img">

                  </div>               

                  <div id="doacoes-info">
                     <h2>Doações</h2>
                     <p>Ajude a investir em vidas de crianças necessitadas, faça sua doação aqui de forma rápida e sem dificuldades. Com apenas alguns cliques você pode trazer alegria para a vida de um pequeno que passa por um momento tão delicado. A doação não é uma obrigação, é o privilégio de praticar um ato de amor. Faça a diferença e sentirá a transformação na sua vida!</p>
                     <br>
                     <button type="button"><a href="doacoes.php">Pronto para doar?</a></button> 

                     
                  </div>
               </div>
            </div>
         </section>


         <section class="sobre">

            <div class="center">

               <div class="chamada-sobre">
               <h2>Sobre a DoubleLife</h2>
               <p>A DoubleLife é uma clínica médica instalada na Gávea, no Rio de Janeiro. Foi fundada em 1998, com o intuito de melhorar a saúde dos cariocas e ser um exemplo de modernidade e eficiência médica.</p>
               </div>

               <div class="conteudo-sobre">
               <p>A DoubleLife foi criada com o intuito de ser um exemplo de agilidade e qualidade em serviços de saúde, por meio do cooperativismo médico e do conhecimento, para que o maior número de pessoas possa viver mais e melhor.</p>
               <p>São 10 especialidades médicas com atendimento até para o mesmo dia em todas as nossas unidades. Oferecemos ampla gama de exames de baixa, média e alta complexidade, realizados por médicos experientes e com equipamentos de última geração.</p>
            </div>
         </section>

      
   </body>
      <?php
        include "footer.php";
   ?>
</html>