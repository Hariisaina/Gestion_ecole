<?php 
$titre = "Page d'accueil";
session_start();

$user = $_SESSION['username']; 

require '../header.php'; 
?>

  <!-- ======= Hero Section ======= -->
  <style>
    #hero1 {
      width: 100%;
      height: 130vh;
      background: url("DEV.jpg") bottom center;
      background-size: cover;
      position: relative; 
    }
    #hero1:before {
      content: "";
      background: rgba(0, 0, 0, 0.6);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }
    #hero1 .hero-container {
      position: absolute;
      bottom: 330px;
      top: 0;
      left: 0;
      right: 1050px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: left;
      padding: 0 15px;
    }
    #bottom {
      position: absolute;
      font-size: 10px;
      bottom: 0;
      top: 630px;
      left: 0;
      right: 0;
      display: flex;
      align-items: center;
      flex-direction: column;
      text-align: center;
      padding: 0 30px;
      color: #fff;
    }
    #hero1 h1 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      text-transform: uppercase;
      color: #fff;
    }
    #hero1 h3 {
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 15px;
      padding: 10px 30px;
      margin-bottom: 20px;
      border-radius: 50px;
      text-align: left;
      font-family: "Open Sans", sans-serif;
      float : left;
    }
    #bottom1 {
      position: absolute;
      bottom: 0;
      top: 600px;
      left: 0;
      right: 0;
      display: flex;
      align-items: center;
      flex-direction: column;
      text-align: left;
      padding: 0 30px;
      color: #fff;
    }
    #hero1 p {
      color: #fff;
      font-size: 15px;
      padding: 0 50px;
      margin-bottom: 30px;
      text-align: left;
      font-family: "Open Sans", sans-serif;
      float : left;
    }
    #hero1 h1 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      font-family: "Open Sans", sans-serif;
      color: #fff;
      padding: 10px 30px;
    }
  </style>
  <section id="hero1">
    <div class="hero-container">
      <h3>Bienvenue, DevCrews</h3>
      <p> "Plongez dans l'univers du numérique avec DevCrews : Votre porte d'entrée vers l'excellence technologique."</p>
      <!-- <p id="bottom1"> Effectuez vos premiers pas dans le monde du numérique.</p> -->
    </div>
    <p id="bottom"> DevCrews : L'avenir du code est entre nos mains, rejoignez-nous dès maintenant !</p>
  </section><!-- End Hero -->
<?php
require("../footer.php");
?>