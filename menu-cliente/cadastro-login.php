<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/estilos/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo a DoubleLife!</h2>
                <p class="description description-primary">Novo por aqui? Comece sua jornada conosco! ❤</p>
                <p class="description description-primary">Se cadastre para acessar nossas funcionalidades.</p>
                <button id="signin" class="btn btn-primary">Cadastrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Login</h2>
                <p class="description description-second">Faça login para acessar nossas funcionalidades. ❤</p>
                <form class="form" method="post" action="login.php">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="/menu-cliente/php/login.php">Esqueceu sua Senha?</a>
                    
                    <button type="submit" value="Enviar" id="btn-logar" class="btn btn-second">Entrar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem Vindo a DoubleLife!</h2>
                <p class="description description-primary">Já possui uma conta? faça seu login abaixo. ❤</p>
                <p class="description description-primary">Faça login para acessar nossas funcionalidades. </p>
                <button id="signup" class="btn btn-primary">Entrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Cadastre-se</h2>

                <form class="form" method="post" action="cadastro.php">
                
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome Completo">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="tel" name="cpf" placeholder="CPF">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-solid fa-house icon-modify"></i>
                        <input type="text" name="cep" placeholder="CEP">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="telefone" placeholder="Número de Telefone">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-solid fa-calendar icon-modify"></i>
                        <input type="date" name="dt_nasci" placeholder="Data de Nascimento">
                    </label>

                
                    <button class="btn btn-second">Cadastrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="../js/app.js"></script>
<style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>
</html>