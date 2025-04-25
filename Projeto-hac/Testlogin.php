<?php
session_start();

if(isset($_POST ['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['codigo_usuario'])) {
   include_once('config.php');
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $codigo = $_POST['codigo_usuario'];
   if ($codigo == "Administr@dor") {
      $sql = "SELECT * FROM bibliotecario WHERE email = '$email' and senha = '$senha'";
      $result = $conn->query($sql);
      
      if(mysqli_num_rows($result) < 1) {
         unset($_SESSION['email']);
         unset( $_SESSION['senha']);
         header( 'Location: login.html');
      }
      else {
         $_SESSION['email'] = $email;
         $_SESSION['senha'] = $senha;
         header( 'Location:indexadmin.php');
      }
   }
   elseif ($codigo == 2009) {
      $sql = "SELECT * FROM aluno WHERE email = '$email' and senha = '$senha'";
      $result = $conn->query($sql);
      
      if(mysqli_num_rows($result) < 1) {
         unset($_SESSION['email']);
         unset( $_SESSION['senha']);
         header( 'Location: login.html');
      }
      else {
         $_SESSION['email'] = $email;
         $_SESSION['senha'] = $senha;
         header( 'Location:index.php');
      }
   }
}
else {
    header('Location: login.html');
}
?>