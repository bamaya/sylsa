<?php

if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and !empty($_POST["password"])){
    } else{
            echo "<div class='alert alert-danger'>Los Campos estan Vacios</div>";
        }
}

?>