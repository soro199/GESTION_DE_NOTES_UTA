<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      

      <title>Connection</title>
   </head>
   <body>
      <div class="register">
   

         <form action="" class="login__form">
            <h1 class="login__title">S'enregistrer</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="text" required class="login__input" id="register-name" placeholder=" ">
                     <label for="register-name" class="login__label">Nom</label>
                  
                     <input type="text" required class="login__input" id="register-lastname" placeholder=" ">
                     <label for="rgister-lastname" class="login__label">Prenom</label>
                  
                     <input type="date" required class="login__input" id="register-date" placeholder=" ">
                     <label for="register-date" class="login__label">date de naissance</label>
                  
                     <input type="text" required class="login__input" id="register-tel" placeholder=" ">
                     <label for="register-tel" class="login__label">telephone</label>
                 
                     <input type="text" required class="login__input" id="register-address" placeholder=" ">
                     <label for="register-address" class="login__label">Adresse</label>
                 
                     <input type="email" required class="login__input" id="register-email" placeholder=" ">
                     <label for="register-email" class="login__label">Email</label>
                  </div>

               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required class="login__input" id="register-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Mot de passe</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input" id="login-check">
                  <label for="login-check" class="login__check-label">Se souvenir</label>
               </div>


            <button type="submit" class="login__button">S'inscrire</button>


         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>