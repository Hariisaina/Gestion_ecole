<title> Connect </title>

    <!-- Cette page affiche l'interface de connexion des membres-->
    <link href="../../assets/images/téléchargement.jfif" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
                                                                                                                                             
    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <style>
        #myForm {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-size: 13px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 30px 9px 30px;
            border-radius: 50px;
            transition: 0.5s;
            border: 2px solid #fff;
            color: #fff;
        }

        input[type=text], input[type=password], input[type=email], input[type=number], input[type=date], input[type=file]{
            width: 50%;
            background : transparent;
            box-sizing: border-box;
            border: 2px solid #fff;
            transition: 0.5s;
            border-radius: 50px;
            color: #fff;
        }
        p 
        {
            text-align : center; 
        }
  </style>

    <!-- La formulaire de connexion -->
    <section id="hero">
        <div class="hero-container">
            <form action ="verification.php" method = "POST" id = "myForm">
                <h3 color="#fff"> Connexion </h3>
                    Nom d'utilisateur <br> <input type="text" name="username" id="username" size="50"> <br> <br>
                    Mot de passe <br> <input type="password" name="password" size="50"> <br> <br>
                    <input type="submit" name ="submit" style ="color : black; " value ="Se connecter" class="btn-get-started scrollto">
                    <br> <a href="form_inscription.php">creer un compte </a>
                <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1){
                            echo "<br><p><em>Utilisateur ou mot de passe incorrect</em></p>";
                        }else
                        {
                            echo "<br><p><em>Veuillez remplir tous les champs</em></p>";
                        }
                            
                    }
                ?>
            </form> 

        </div>
    </section>