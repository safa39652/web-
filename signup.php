<?php
    // Traitement du formulaire de signup
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
      // Récupérer les valeurs soumises du formulaire
      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];
      $emailOrPhone = $_POST['email_or_phone'];
      $password = $_POST['password'];

      // Vérifier les valeurs soumises et effectuer les opérations nécessaires
      // Par exemple, vous pouvez enregistrer les informations dans une base de données

      // Affiche un message de succès
      echo "Signup successful. You can now login.";
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
        <header>Sign-up </header>
        <form action="#">
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" required placeholder="First Name">
              </div>
              <br>
              <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="text" required placeholder="Last Name">
               
              </div>
              <br>
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" required placeholder="Email or Phone">
          </div>
         
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
         <br>
          <div class="field">
            <input type="submit" value="SIGN-UP">
          </div>
        </form>
        <br>
       
        <div class="signup">Don't have account?
          <a href="#">Signup Now</a>
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
