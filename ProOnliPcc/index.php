<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESTIC 53</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/style.css"> -->

<style>
body{
  margin: 0;
  padding: 0;
  
  background-image: url(img/fo.jpg) ;
  background-color: rgb(35,35,35);
  background-blend-mode: soft-light; 
  background-size: cover;
  background-position: center;

  font-family: 'Roboto', sans-serif;
  text-align:center; 
}
/*
#main-container{
  padding-top: 200px;
  text-align: ;
}
.btn{
  border-radius: 3px;
  display: inline-block;
  padding: 20px 15px;
  text-decoration: none;
}
.btn-blue{
color: white;
background-color: blue;
}
*/
</style>
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['nombre']; ?>
      <br>Puedes 
      <a href="logout.php">
        Salir
      </a> o ir a
     <!-- <div id="main-container">
        
        <a href="ProOnliPcc/index.html" class="btn btn-blue">Notificaciones</a>
        
      </div>
      -->
      <a href="ProOnliPcc/index.html" class="btn-blue"> Notificaciónes</a>
      


      <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          
          <img class="" src="img/logo.png" alt="ProOnliPc">
          
        </div>
        <h1> .</h1>
        <h1>E.S.T.I.C. No. 53 "Vicente Suárez"</h1>
        <h2>Turno <span class="rotating">Vespertino</span></h2>
        

        

        </div>
      </div>
    </div>
  </section>



    <?php else: ?>
      
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>