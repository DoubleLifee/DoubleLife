    <?php
    session_start();
        if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
            header('Location: /index.php');
        }
    ?>
    <html>
    <head>
        <?php
            include "menu.php";
        ?>
        <link rel="stylesheet" href="/estilos/style.css">
    </head>
    <body>
        <div style="background-color: red; width: 500px; height: 500px;"></div>
    </body>
</html>