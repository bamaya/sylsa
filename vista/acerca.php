<?php
   session_start();
   if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
       header('location:login/login.php');
  }

?>

<?php require('./layout/topbar.php'); ?>
<?php require('./layout/sidebar.php'); ?>


<div class="page-content">

    PAGINA DE ACERCA DE

</div>
</div>



<?php require('./layout/footer.php'); ?>