<?php
  session_start();
  require 'connect.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['country'])) {
    $_SESSION['steamemail'] = $_POST['email'];
    $_SESSION['country'] = $_POST['country'];
  }
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/completesignup-style.css" />
    <title>Utwórz swoje konto</title>
  </head>
  <body>
    <header>
      <div class="content">
        <div class="logo">
          <a href="#">
            <img
              src="./images/logo_steam.svg"
              alt="Link do strony głównej Steam"
              width="176"
              height="44"
            />
          </a>
        </div>
        <div class="nav">
          <a href="#" class="menuitem active">SKLEP</a>
          <a href="#" class="menuitem">SPOŁECZNOŚĆ</a>
          <a href="#" class="menuitem">INFROMACJE</a>
          <a href="#" class="menuitem">POMOC TECHNICZNA</a>
        </div>
      </div>
    </header>
    <main>
      <div class="join-container">
        <div class="create_account_form_container">
          <form action="" method="POST">
            <div class="form_box">
              <div class="section_title">Utwórz swoje konto</div>
              <div class="username-container">
                <div class="username-content">
                  <label for="username">Nazwa konta Steam</label>
                  <input type="text" maxlength="64" name="username" required />
                </div>
              </div>
              <div class="password-container">
                <div class="password-content">
                  <label for="password">Wprowadź hasło</label>
                  <input
                    type="password"
                    maxlength="64"
                    name="password"
                    autocomplete="off"
                    required
                  />
                </div>
              </div>
              <div class="reenter-password-container">
                <div class="reenter-password-content">
                  <label for="password">Potwierdź hasło</label>
                  <input
                    type="password"
                    maxlength="64"
                    name="reenter-password"
                    autocomplete="off"
                    required
                  />
                </div>
              </div>
              <div class="button-container">
                <button type="submit" name="btn-confirm">
                  <span>Gotowe</span>
                </button>
              </div>
            </div>
            <?php
              if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['username'])) {
                  $username = $_POST['username'];
                } else {
                  $username = "";
                }
                $sql = "SELECT * FROM users WHERE USERNAME = '$username';";
                $res = mysqli_query($conn, $sql);
                    
                if(mysqli_num_rows($res) > 0) {
                  echo '<span style="color: red; margin: 0 auto">Nazwa użytkownika już istnieje, proszę podaj inną nazwę.</span>';
                } else {
                  if(isset($_POST['username'])) {
                    $username = $_POST['username'];
                  } else {
                    $username = "";
                  }
                      
                  if(isset($_POST['password'])) {
                    $password = $_POST['password'];
                  } else {
                    $password = "";
                  }  
                      
                  if(isset($_SESSION['steamemail'])) {
                    $email = $_SESSION['steamemail'];
                  } else {
                    $email = "";
                  }
                      
                  if(isset($_SESSION['country'])) {
                    $country = $_SESSION['country'];
                  } else {
                    $country = "";
                  }  
                  
                  $hashed_password = md5($password);

                  if(isset($_POST['btn-confirm'])) {
                    if($_POST['password'] === $_POST['reenter-password']) {
                      $sql = "INSERT INTO users (ID, USERNAME, PASSWORD, EMAIL, COUNTRY) VALUES (NULL, '$username', '$hashed_password', '$email', '$country');";
                      $res = mysqli_query($conn, $sql);
                      
                      $_SESSION['username'] = $username;
                      header("Location: loggedin.php");
                      exit();
                    } else {
                      echo '<span style="color: red; margin: 0 auto">Podano różne hasła, spróbuj ponownie.</span>';
                    }
                  }
                }
              }
            ?>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer_content">
        <div class="line"></div>
        <div class="footer_logo_steam">
          <img src="./images/logo_steam_footer.png" alt="Valve Software" />
        </div>
        <div class="footer_logo">
          <a href="http://www.valvesoftware.com" target="_blank">
            <img src="./images/valve_logo.png" alt="Valve Software" />
          </a>
        </div>
        <div class="footer_text">
          <p>
            © 2024 Valve Corporation. Wszelkie prawa zastrzeżone. Wszystkie
            znaki handlowe są własnością ich prawnych właścicieli w Stanach
            Zjednoczonych i innych krajach.
          </p>
          <p>Ceny zawierają podatek VAT (jeśli ma zastosowanie).</p>
        </div>
      </div>
    </footer>
  </body>
</html>
