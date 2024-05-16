<?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Récupérer les valeurs soumises du formulaire
          $username = $_POST['username'];
          $password = $_POST['password'];
  
          // Remplacez les informations d'identification valides par celles de votre système
          $valid_username = 'user@example.com';
          $valid_password = 'password123';
  
          // Vérifier les identifiants
          if ($username === $valid_username && $password === $valid_password) {
            // Authentification réussie
            echo "Login successful. Redirect or do something else here.";
            // Vous pouvez rediriger l'utilisateur vers une autre page
            // header('Location: welcome.php');
            exit(); // Arrêter l'exécution du script après l'authentification réussie
          } else {
            // Authentification échouée
            echo '<div class="error">Invalid username or password.</div>';
          }
        }
        ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
   <script src=""></script>
  </head>
  <body>

    <div class="bg-img">
      <div class="content">
        <header>Login </header>
        <form action="#">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" required placeholder="Email or Phone">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
          <input type="submit" value="LOGIN">
          </div>
        </form>
        <div class="login">Or login with</div>
        <div class="links">
          <div class="facebook">
            <i class="fab fa-facebook-f"><span>Facebook</span></i>
          </div>
          <div class="Google">
            <i class="fab fa-instagram"><span>Google</span></i>
          </div>
        </div>
        <div class="signup">Don't have account?
          <a href="signup.php">Signup Now</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
