<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre'])) {
    $sql = "INSERT INTO users (email, nombre, password) VALUES (:email, :nombre, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
<style>
    body{
  margin: 0;
  padding: 0;
  
  background-image: url(img/fo.jpg) ;
  background-color: rgb(55,55,55);
  background-blend-mode: soft-light; 
  
  background-size: cover;
  background-position: center;

  font-family: 'Roboto', sans-serif;
  text-align:center; 
}
</style>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
    
    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="nombre" type="text" placeholder="Enter your name">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>