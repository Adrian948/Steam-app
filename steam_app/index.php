<?php
  session_start();
  require 'connect.php';
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
    <link rel="stylesheet" href="./styles/login-style.css" />
    <title>Zaloguj się</title>
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
      <div class="login-container">
        <div class="content">
          <div>
            <div class="header-form">Logowanie</div>
          </div>
          <div class="form-container">
            <div class="form-content">
              <form action="index.php" method="POST">
                <div class="username-content">
                  <label>Zaloguj się z użyciem nazwy konta</label>
                  <input type="text" name="username" />
                </div>
                <div class="password-content">
                  <label>Hasło</label>
                  <input type="password" name="password" />
                </div>
                <div class="remember_me-container">
                  <input type="checkbox" />
                  <label>Zapamiętaj mnie</label>
                </div>
                <div class="login-button-container">
                  <button class="login-button" type="submit">
                    Zaloguj się
                  </button>
                </div>
                <span id="error" style="color: red; display: none; margin: 0 auto">Sprawdź swoją nazwę konta oraz hasło i spróbuj ponownie.</span>
                <?php
                  if($_SERVER['REQUEST_METHOD'] == 'POST') {
                      $username = $_POST['username'];
                      $password = $_POST['password'];

                      $hashed_password = md5($password);

                      $sql = "SELECT * FROM users WHERE USERNAME = '$username' AND PASSWORD = '$hashed_password'";
                      $res = mysqli_query($conn, $sql);

                      if(mysqli_num_rows($res) == 1) {
                          $_SESSION['username'] = $username;
                          header("Location: loggedin.php");
                          exit();
                      } else {
                          echo '
                            <script>
                              document.querySelector("#error").style.display = "block";
                            </script>
                          ';
                      }
                  }
                ?>
                <a href="#">Pomocy, nie mogę się zalogować</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="create_account-container">
        <div class="create_account-content">
          <div class="headline">Pierwszy raz na Steam?</div>
          <a target="_top" href="./join.php">
            <span>Utwórz konto</span>
          </a>
        </div>
        <div class="info">
          <div class="subtext">
            To łatwe i darmowe. Odkryj tysiące gier do zagrania wraz z milionami
            nowych znajomych.
            <a href="https://store.steampowered.com/about"
              >Dowiedz się więcej o Steam</a
            >
          </div>
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
