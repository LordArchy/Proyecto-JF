<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('Settings/LinkCss.php') ?>
    <title><?php
            echo $_GET['Pg'];
            if (strpos($_GET['Pg'], '¿') !== false) {
                echo '?';
            }
            ?> | C.I.T.D. Julio Florez </title>
</head>

<body id="Body">
    <div class="Container" id="Container">
        <div class="Contenedor">
            <?php
            require_once('Models/Nav.php');
            require_once('Models/Header.php');
            require_once('Helper/Enrutador.php');
            ?>
        </div>
        <?php
        require_once('Models/Footer.php');
        ?>
    </div>
    <div id="Container-Avisos"></div>
    <div id="Container-Alerts"></div>
</body>
<?php require_once('Settings/LinkJs.php') ?>

</html>