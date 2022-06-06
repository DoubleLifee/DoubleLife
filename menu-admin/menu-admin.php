   <header>
      <!--Navigation-->
      <nav>
         <!--Logo-->    
         <div class="logo">
            <a href="index.php"><img src="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_1.png" id="logo"></a>
         </div>

         <!--Menu-->
         <div class="menu">
            <a href="/agendamento.php">Agendamento</a>
            <a href="#">Serviços</a>
            <a href="#">Nossos Planos</a>
            <?php
                if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
                    echo'<a class="btn-menu" id="login" href="/menu-cliente/cadastro-login.php">Login</a>';
                } else{
                    echo'<a class="btn-menu" id="deslogar" href="/deslogar.php">Deslogar</a>';

                }
            ?>
         </div>

         <!--Botão Menu-->
         <div class="menu-mobile">
            <i class="fas fa-bars"></i>
         </div>

      </nav>

   </header>