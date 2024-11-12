<?php
  session_start();
  require "connect.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $reemail = $_POST['reenter-email'];
    $country = $_POST['country'];
    $_SESSION['steamemail'] = $email;
    $_SESSION['country'] = $country;

    if ($email === $reemail) {
      $sql = "SELECT * FROM users WHERE EMAIL = '$email'";
      $res = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($res) > 0) {
        $error_message = "Podany e-mail już istnieje, podaj inny adres e-mail.";
      } else {
        header("Location: completesignup.php");
        exit();
      }
    } else {
      $error_message = "Podano różne adresy e-mail, spróbuj ponownie.";
    }
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
    <link rel="stylesheet" href="./styles/join-style.css" />
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
        <div id="error_display" style="display: none"></div>
        <div class="create_account_form_container">
          <form action="" method="POST">
            <div class="form_box">
              <div class="section_title">Utwórz swoje konto</div>
              <div class="mail-container">
                <div class="mail-content">
                  <label for="email">Adres e-mail</label>
                  <input type="email" maxlength="255" name="email" required />
                </div>
              </div>
              <div class="reenter-mail-container">
                <div class="reenter-mail-content">
                  <label for="reenter-email">Potwierdź swój adres</label>
                  <input
                    type="text"
                    maxlength="255"
                    name="reenter-email"
                    required
                  />
                </div>
              </div>
              <div class="country-container">
                <div class="country-content">
                  <label for="country">Kraj zamieszkania</label>
                  <select name="country">
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo (Congo-Brazzaville)</option>
                    <option value="CD">Congo (Democratic Republic)</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czechia</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="SZ">Eswatini</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GR">Greece</option>
                    <option value="GD">Grenada</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="KP">North Korea</option>
                    <option value="MK">North Macedonia</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PL" selected>Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="QA">Qatar</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                </div>
              </div>
              <div class="user-agreement-container">
                <div class="user-agreement-content">
                  <div id="ssa_body">
                    <h3>UMOWA UŻYTKOWNIKA STEAM®</h3>
                    <br />
                    <p><a name="0"></a>SPIS TREŚCI:</p>
                    <ol style="margin-left: 13px">
                      <li>
                        <a href="#1"
                          >Rejestracja użytkownika; obowiązywanie postanowień
                          umowy w stosunku do użytkownika; konto użytkownika;
                          zgoda na zawarcie umów</a
                        >
                      </li>
                      <li><a href="#2">Licencje</a></li>
                      <li>
                        <a href="#3"
                          >Rozliczenia, płatności i inne subskrypcje</a
                        >
                      </li>
                      <li>
                        <a href="#4"
                          >Zasady postępowania w sieci, oszukiwanie i
                          manipulowanie procesami</a
                        >
                      </li>
                      <li><a href="#5">Treści osób trzecich</a></li>
                      <li>
                        <a href="#6">Treści tworzone przez użytkowników</a>
                      </li>
                      <li>
                        <a href="#7"
                          >Wyłączenia odpowiedzialności; ograniczenie
                          odpowiedzialności; brak gwarancji; ograniczona
                          gwarancja i umowa</a
                        >
                      </li>
                      <li><a href="#8">Zmiany niniejszej umowy</a></li>
                      <li>
                        <a href="#9">Okres obowiązywania i rozwiązanie umowy</a>
                      </li>
                      <li>
                        <a href="#10"
                          >Prawo właściwe/koszty reprezentacji prawnej</a
                        >
                      </li>
                      <li><a href="#11">Postanowienia różne</a></li>
                    </ol>
                    <p></p>
                    <br />
                    <p>
                      Niniejsza Umowa Użytkownika Steam („Umowa”) jest
                      dokumentem prawnym, który określa prawa i obowiązki
                      użytkownika serwisu Steam prowadzonego przez Valve
                      Corporation, spółkę prawa stanu Waszyngton z siedzibą pod
                      adresem 10400 NE 4th St., Bellevue, WA 98004, Stany
                      Zjednoczone, zarejestrowaną u Sekretarza Stanu Waszyngton
                      pod numerem 60 22 90 773, numer identyfikacyjny VAT EU
                      8260 00671 („Valve”). Prosimy o uważne zapoznanie się z
                      jej treścią.
                    </p>
                    <br />
                    <a name="1"></a>
                    <p>
                      1. REJESTRACJA UŻYTKOWNIKA; OBOWIĄZYWANIE POSTANOWIEŃ
                      UMOWY W STOSUNKU DO UŻYTKOWNIKA; KONTO UŻYTKOWNIKA; ZGODA
                      NA ZAWARCIE UMÓW<a href="#0" style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>Steam to serwis internetowy oferowany przez Valve.</p>
                    <br />
                    <p>
                      Status użytkownika Steam („Użytkownik”) uzyskuje się
                      poprzez dokonanie rejestracji konta użytkownika Steam.
                      Niniejsza Umowa wchodzi w życie z chwilą wyrażenia przez
                      Użytkownika zgody na niniejsze postanowienia.
                      Użytkownikiem nie może zostać osoba w wieku poniżej 13
                      lat. Serwis Steam nie jest przeznaczony dla dzieci w wieku
                      poniżej 13 lat, a Valve nie będzie świadomie gromadzić
                      danych osobowych takich dzieci. W kraju Użytkownika mogą
                      obowiązywać dodatkowe ograniczenia wiekowe.
                    </p>
                    <br />
                    <p>A. Strona Zawierająca Umowę</p>
                    <br />
                    <p>
                      W przypadku wszelkich interakcji ze Steam stosunek umowny
                      istnieje pomiędzy Użytkownikiem i Valve. O ile w
                      niniejszej umowie lub w momencie dokonania transakcji (np.
                      w przypadku zakupu od innego Użytkownika na Rynku
                      Subskrypcji) nie wskazano inaczej, wszelkie transakcje
                      dotyczące Subskrypcji (zdefiniowanych poniżej) dokonywane
                      przez Użytkownika w Steam dotyczą zakupów dokonywanych od
                      Valve.
                    </p>
                    <br />
                    <p>B. Sprzęt, Subskrypcje; Treści i Usługi</p>
                    <br />
                    <p>
                      Użytkownik może uzyskać dostęp do określonych usług,
                      oprogramowania i treści dostępnych dla Użytkowników lub
                      zakupić określony Sprzęt (zdefiniowany poniżej) w Steam.
                      Oprogramowanie klienta Steam oraz wszelkie inne
                      oprogramowanie, treści i aktualizacje, które Użytkownik
                      pobiera lub do których uzyskuje dostęp za pośrednictwem
                      Steam, w tym w szczególności, choć niewyłącznie gry wideo
                      oraz zawarte w grach treści Valve lub osób trzecich,
                      związane ze Sprzętem oprogramowanie oraz wszelkie
                      wirtualne przedmioty, którymi Użytkownik handluje, które
                      sprzedaje lub nabywa na Rynku Subskrypcji Steam, są
                      określane w niniejszej Umowie jako „Treści i Usługi”;
                      prawa do uzyskania dostępu do wszelkich Treści i Usług
                      dostępnych za pośrednictwem Steam lub do korzystania z
                      nich są określane w niniejszej Umowie jako „Subskrypcje”.
                    </p>
                    <br />
                    <p>
                      Każda z Subskrypcji umożliwia dostęp do określonych Treści
                      i Usług. Dla niektórych Subskrypcji zastosowanie mają
                      dodatkowe warunki specyficzne dla danej Subskrypcji
                      („Warunki Subskrypcji”) (na przykład umowa licencyjną
                      użytkownika końcowego dla konkretnej gry lub warunki
                      użytkowania dla konkretnego produktu lub funkcji Steam).
                      Ponadto dodatkowe warunki (na przykład procedury dotyczące
                      płatności i rozliczeń) mogą zostać opublikowane na stronie
                      <a target="_new" href="http://www.steampowered.com"
                        >http://www.steampowered.com</a
                      >
                      lub w ramach serwisu Steam („Zasady Korzystania”). Zasady
                      Korzystania obejmują Zasady Steam Zachowania w Sieci
                      dostępne pod adresem
                      <a
                        target="_new"
                        href="http://steampowered.com/index.php?area=online_conduct"
                        >http://steampowered.com/index.php?area=online_conduct</a
                      >
                      i Politykę Zwrotów Steam dostępną pod adresem
                      <a
                        target="_new"
                        href="http://store.steampowered.com/steam_refunds"
                        >http://store.steampowered.com/steam_refunds</a
                      >. Warunki Subskrypcji, Zasady Korzystania i Polityka
                      Prywatności Valve (którą można znaleźć pod adresem
                      <a
                        target="_new"
                        href="http://www.valvesoftware.com/privacy.htm"
                        >http://www.valvesoftware.com/privacy.htm</a
                      >) stają się wiążące dla Użytkownika po wyrażeniu przez
                      niego zgody na obowiązywanie ich lub niniejszej Umowy lub
                      w inny sposób stają się dla niego wiążące, zgodnie z
                      opisem w sekcji 8 (Zmiany niniejszej Umowy).
                    </p>
                    <br />
                    <p>C. Konto Użytkownika</p>
                    <br />
                    <p>
                      Po zakończeniu procesu rejestracji w Steam Użytkownik
                      tworzy swoje konto Steam („Konto”). Konto Użytkownika może
                      również zawierać informacje rozliczeniowe przekazane przez
                      Użytkownika Valve w przypadku transakcji dotyczących
                      Subskrypcji, Treści i Usług oraz zakupu jakichkolwiek
                      towarów fizycznych za pośrednictwem Steam („Sprzętu”).
                      Użytkownik nie może ujawniać, udostępniać ani w inny
                      sposób zezwalać innym osobom na korzystanie ze swojego
                      hasła lub Konta, chyba że Valve wyraźnie wyrazi na to
                      zgodę. Użytkownik jest odpowiedzialny za zachowanie
                      poufności swojego loginu i hasła oraz za bezpieczeństwo
                      swojego systemu komputerowego. Valve nie ponosi
                      odpowiedzialności za użycie hasła i Konta Użytkownika ani
                      za jakąkolwiek komunikację i aktywność w serwisie Steam,
                      która wynika z użycia loginu i hasła Użytkownika przez
                      Użytkownika lub jakąkolwiek inną osobę, której Użytkownik
                      mógł umyślnie albo w wyniku niedbalstwa ujawnić swój login
                      lub hasło z naruszeniem niniejszego postanowienia o
                      zachowaniu poufności. O ile nie wynika to z niedbalstwa
                      albo winy Valve, Valve nie ponosi odpowiedzialności za
                      korzystanie z Konta Użytkownika przez osobę, która
                      oszukańczo użyła loginu i hasła Użytkownika bez jego
                      zgody. Jeśli Użytkownik uznaje, że mogło dojść do
                      naruszenia poufności jego loginu lub hasła, musi
                      niezwłocznie powiadomić o tym Valve za pośrednictwem
                      formularza obsługi (<a
                        target="_new"
                        href="https://support.steampowered.com/newticket.php"
                        >https://support.steampowered.com/newticket.php</a
                      >).
                    </p>
                    <br />
                    <p>
                      Konto Użytkownika, w tym wszelkie informacje z nim
                      związane (np. dane kontaktowe, informacje rozliczeniowe,
                      historia Konta i Subskrypcje itp.), mają charakter ściśle
                      osobisty. Użytkownik nie może zatem sprzedawać ani
                      pobierać od innych osób opłat z tytułu prawa do
                      korzystania ze swojego Konta ani w inny sposób przenosić
                      Konta, ani sprzedawać lub pobierać od innych osób opłat z
                      tytułu prawa do korzystania z jakichkolwiek Subskrypcji
                      bądź ich przenosić, chyba że zostało to wyraźnie
                      dopuszczone w niniejszej Umowie (w tym wszelkich Warunkach
                      Subskrypcji lub Zasadach Korzystania) bądź w inny sposób
                      wyraźnie dozwolone przez Valve.
                    </p>
                    <br />
                    <p>D. Wyrażenie Zgody na Zawarcie Umów</p>
                    <br />
                    <p>
                      Zamówienie złożone przez Użytkownika za pośrednictwem
                      serwisu Steam stanowi skierowaną do Valve ofertę zawarcia
                      umowy na dostawę zamówionych Subskrypcji, Treści i Usług
                      lub Sprzętu („Produktu” lub „Produktów”) w zamian za
                      zapłatę wskazanej ceny.
                    </p>
                    <br />
                    <p>
                      W momencie złożenia przez Użytkownika zamówienia w
                      serwisie Steam, wyślemy mu wiadomość potwierdzającą
                      otrzymanie zamówienia i zawierającą szczegółowe informacje
                      dotyczące zamówienia („Potwierdzenie Zamówienia”).
                      Potwierdzenie Zamówienia stanowi potwierdzenie otrzymania
                      zamówienia Użytkownika, natomiast nie stanowi
                      potwierdzenia przyjęcia jego oferty zawarcia umowy.
                    </p>
                    <br />
                    <p>
                      W przypadku Treści i Usług, przyjmujemy ofertę złożoną
                      przez Użytkownika i zawieramy z nim umowę potwierdzając
                      transakcję i udostępniając mu Treści i Usługi, a w
                      przypadku zamówień przedpremierowych – jedynie
                      potwierdzając transakcję i pobierając odpowiednią cenę za
                      pomocą metody płatności Użytkownika.
                    </p>
                    <br />
                    <p>
                      W przypadku Sprzętu, przyjmiemy ofertę złożoną przez
                      Użytkownika i dokonamy transakcji w zakresie zamówionego
                      przez niego przedmiotu dopiero wtedy, gdy dokonamy wysyłki
                      Sprzętu do Użytkownika i wyślemy do niego wiadomość e-mail
                      potwierdzającą wysłanie Sprzętu („Potwierdzenie Wysyłki”).
                      Jeśli zamówienie Użytkownika jest wysyłane w kilku
                      paczkach, Użytkownik może otrzymać oddzielne Potwierdzenie
                      Wysyłki dla każdej paczki, a każde Potwierdzenie Wysyłki i
                      odpowiednia wysyłka skutkują zawarciem między
                      Użytkownikiem i Valve oddzielnej umowy sprzedaży Sprzętu
                      wskazanego w danym Potwierdzeniu Wysyłki. Wszelki Sprzęt
                      dostarczony Użytkownikowi pozostaje własnością Valve do
                      momentu dokonania płatności w pełnej wysokości.
                    </p>
                    <br />
                    <p>
                      Użytkownik wyraża zgodę na otrzymywanie faktur sprzedaży
                      drogą elektroniczną.
                    </p>
                    <br />
                    <p>E. Przetwarzanie płatności</p>
                    <br />
                    <p>
                      Przetwarzanie płatności związanych z Treściami i Usługami
                      lub Sprzętem zakupionym w serwisie Steam dokonywane jest
                      bezpośrednio przez Valve Corporation albo przez należącą w
                      całości do Valve jej spółkę zależną Valve GmbH w imieniu
                      Valve Corporation, w zależności od zastosowanej metody
                      płatności. Jeśli karta Użytkownika została wydana poza
                      Stanami Zjednoczonymi, płatność Użytkownika może zostać
                      przetworzona przez Valve GmbH w imieniu Valve Corporation
                      za pośrednictwem europejskiego agenta rozliczeniowego. W
                      przypadku innych rodzajów zakupów płatność będzie
                      pobierana bezpośrednio przez Valve Corporation. W każdym
                      przypadku dostawa Treści i Usług oraz Sprzętu jest
                      realizowana przez Valve Corporation.
                    </p>

                    <a name="2"></a>
                    <br />
                    <p>
                      2. LICENCJE<a href="#0" style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>A. Ogólna Licencja na Treści i Usługi</p>
                    <br />
                    <p>
                      Steam i Subskrypcja (Subskrypcje) wymagają pobrania i
                      zainstalowania Treści i Usług na komputerze Użytkownika.
                      Valve niniejszym udziela, a Użytkownik przyjmuje
                      niewyłączną licencję i prawo do korzystania z Treści i
                      Usług do osobistego, niekomercyjnego użytku (z wyjątkiem
                      przypadków, w których użycie komercyjne jest wyraźnie
                      dozwolone w niniejszej Umowie lub w Warunkach Subskrypcji
                      mających zastosowanie). Niniejsza licencja wygasa z chwilą
                      (a) rozwiązania niniejszej Umowy lub (b) zakończenia
                      Subskrypcji obejmującej tę licencję. Treści i Usługi
                      stanowią przedmiot licencji, a nie sprzedaży. Licencja
                      Użytkownika nie przyznaje Użytkownikowi tytułu ani prawa
                      własności do Treści i Usług. Aby korzystać z Treści i
                      Usług, Użytkownik musi posiadać Konto Steam i może być
                      zobowiązany do uruchomienia klienta Steam i utrzymywania
                      połączenia z Internetem.
                    </p>
                    <br />
                    <p>
                      Z powodów obejmujących w szczególności choć niewyłącznie
                      bezpieczeństwo systemu, stabilność i interoperacyjności w
                      trybie gry wieloosobowej, Valve może potrzebować dokonać
                      automatycznej aktualizacji, wstępnego pobierania,
                      tworzenia nowych wersji Treści i Usług lub udoskonalenia
                      ich w inny sposób, w związku z czym wymagania systemowe do
                      korzystania z Treści i Usług mogą z czasem ulec zmianie.
                    </p>
                    <br />
                    <p>
                      Użytkownik wyraża zgodę na takie automatyczne
                      aktualizacje. Użytkownik przyjmuje do wiadomości, że
                      niniejsza Umowa (w tym obowiązujące Warunki Subskrypcji)
                      nie uprawnia go do przyszłych aktualizacji (chyba że w
                      zakresie wymaganym przepisami obowiązującego prawa),
                      nowych wersji lub innych ulepszeń Treści i Usług
                      związanych z daną Subskrypcją, chociaż Valve może
                      zdecydować się na dostarczanie takich aktualizacji itp.
                      wedle własnego uznania.
                    </p>
                    <br />
                    <p>B. Licencja na Oprogramowanie w Wersji Beta</p>
                    <br />
                    <p>
                      Valve może w dowolnym momencie udostępniać oprogramowanie
                      za pośrednictwem serwisu Steam przed publiczną premierą
                      komercyjną takiego oprogramowania („Oprogramowanie w
                      Wersji Beta”). Użytkownik nie jest zobowiązany do
                      korzystania z Oprogramowania w Wersji Beta, ale jeśli
                      Valve je oferuje, może zdecydować się na korzystanie z
                      niego na poniższych warunkach. Oprogramowanie w Wersji
                      Beta uznaje się za składające się z Treści i Usług, a
                      każdy element dostarczonego Oprogramowania w Wersji Beta
                      będzie uważany za Subskrypcję takiego Oprogramowania w
                      Wersji Beta, z następującymi postanowieniami szczególnymi
                      dla Oprogramowania w wersji beta:
                    </p>
                    <br />
                    <p></p>
                    <ul>
                      <li>
                        Przysługujące Użytkownikowi prawo do korzystania z
                        Oprogramowania w Wersji Beta może być ograniczone w
                        czasie i może podlegać dodatkowym Warunkom Subskrypcji;
                      </li>
                      <li>
                        Valve lub jakikolwiek podmiot powiązany z Valve może
                        zwrócić się o lub nakazać Użytkownikowi przedstawienie
                        sugestii, opinii lub danych dotyczących korzystania
                        przez Użytkownika z Oprogramowania w Wersji Beta, które
                        będą uznawane za Treści Tworzone przez Użytkownika
                        zgodnie z postanowieniami sekcji 6 (Treści Tworzone
                        przez Użytkownika) poniżej; oraz
                      </li>
                      <li>
                        W uzupełnieniu oświadczeń o zrzeczeniu się
                        odpowiedzialności i postanowień dotyczących ograniczenia
                        odpowiedzialności za wszelkie Oprogramowanie, o których
                        mowa w sekcji 7 poniżej (Wyłączenia Odpowiedzialności;
                        Ograniczenie Odpowiedzialności; Brak Gwarancji;
                        Ograniczona Gwarancja i Umowa) obowiązujących w
                        stosownych przypadkach, Użytkownik wyraźnie przyjmuje do
                        wiadomości, że Oprogramowanie w Wersji Beta jest
                        wydawane wyłącznie w celu testowania i udoskonalania, w
                        szczególności w celu przekazania Valve informacji
                        zwrotnej na temat jakości i użyteczności Oprogramowania
                        w Wersji Beta, a co się z tym wiąże, zawiera błędy i nie
                        jest wersją ostateczną. Jeśli Użytkownik zdecyduje się
                        zainstalować lub używać Oprogramowania w Wersji Beta,
                        będzie zobowiązany używać go wyłącznie zgodnie z jego
                        przeznaczeniem, tj. do testowania i ulepszania, zgodnie
                        z wymaganiami systemowymi ustanowionymi dla danego
                        Oprogramowania w Wersji Beta oraz, w żadnym wypadku
                        Użytkownik nie będzie używać Oprogramowania w Wersji
                        Beta w systemie albo z przeznaczeniem, w którym
                        nieprawidłowe działanie Oprogramowania w Wersji Beta
                        może spowodować jakąkolwiek szkodę. W szczególności
                        Użytkownik powinien posiadać pełne kopie zapasowe
                        dowolnego systemu, na którym zdecyduje się zainstalować
                        Oprogramowanie w Wersji Beta.
                      </li>
                    </ul>
                    <p></p>
                    <br />
                    <p>
                      C. Licencja na Korzystanie z Narzędzi Deweloperskich Valve
                    </p>
                    <br />
                    <p>
                      Subskrypcja (Subskrypcje) Użytkownika mogą obejmować
                      dostęp do różnorodnych narzędzi Valve, których można
                      używać do tworzenia treści („Narzędzia Deweloperskie”).
                      Narzędzia Deweloperskie Valve obejmują np. zestaw narzędzi
                      programistycznych Valve („SDK”) dla wersji silnika gry
                      komputerowej znanej jako „Source” („Silnik Source”) i
                      powiązany edytor Valve Hammer, oprogramowanie The Source®
                      Filmmaker lub narzędzia w grze, za pomocą których można
                      edytować lub tworzyć utwory zależne na podstawie gry
                      Valve. Poszczególne Narzędzia Deweloperskie (na przykład
                      oprogramowanie The Source® Filmmaker) mogą być
                      dystrybuowane na podstawie odrębnych Warunków Subskrypcji,
                      które różnią się od zasad określonych w niniejszej sekcji.
                      Z wyjątkiem przypadków określonych w odrębnych Warunkach
                      Subskrypcji mających zastosowanie do korzystania z
                      określonego Narzędzia Deweloperskiego, Użytkownik może
                      korzystać z Narzędzi Deweloperskich i może korzystać z,
                      zwielokrotniać, publikować, wykonywać, wyświetlać i
                      wprowadzać do obrotu wszelkie treści tworzone za pomocą
                      Narzędzi Deweloperskich, w dowolny sposób, ale wyłącznie w
                      celach niekomercyjnych.
                    </p>
                    <br />
                    <p>
                      W przypadku chęci skorzystania przez Użytkownika z Source
                      Engine SDK lub innych Narzędzi Deweloperskich Valve do
                      celów komercyjnych, prosimy o kontakt z Valve pod adresem
                      sourceengine@valvesoftware.com.
                    </p>
                    <br />
                    <p>
                      D. Licencja na Korzystanie z Zawartości Gier Valve w Fan
                      Artach
                    </p>
                    <br />
                    <p>
                      Valve docenia społeczność Użytkowników, którzy tworzą
                      utwory plastyczne, literackie i audiowizualne nawiązujące
                      do gier Valve („Fan Arty”). Użytkownik może umieszczać
                      zawartość gier Valve w swoich Fan Artach. O ile w
                      niniejszej sekcji lub w którymkolwiek z Warunków
                      Subskrypcji nie określono inaczej, Użytkownik może
                      korzystać z, zwielokrotniać, publikować, wykonywać,
                      wyświetlać i wprowadzać do obrotu Fan Arty, które
                      zawierają elementy gier Valve w dowolny sposób, ale
                      wyłącznie w celach niekomercyjnych.
                    </p>
                    <br />
                    <p>
                      W przypadku umieszczenia przez Użytkownika w Fan Arcie
                      jakichkolwiek treści osób trzecich, Użytkownik oświadcza,
                      że uzyskał od wszystkie niezbędne prawa od podmiotu,
                      któremu przysługują.
                    </p>
                    <br />
                    <p>
                      Komercyjne wykorzystanie niektórych elementów gier Valve
                      jest dozwolone za pośrednictwem funkcji, takich jak
                      Warsztat Steam (Steam Workshop) lub Rynek Subskrypcji
                      Steam (Steam Subscription Marketplace). Warunki mające
                      zastosowanie w przypadku takiego wykorzystywania są
                      określone w sekcjach 3.D. i 6.B. poniżej oraz we wszelkich
                      Warunkach Subskrypcji przewidzianych dla tych funkcji.
                    </p>
                    <br />
                    <p>
                      Aby zapoznać się z polityką wideo Valve zawierającą
                      dodatkowe warunki dotyczące korzystania z utworów
                      audiowizualnych zawierających własność intelektualną Valve
                      lub utworzonych za pomocą oprogramowania The Source®
                      Filmmaker, proszę odwiedzić stronę
                      <a
                        target="_new"
                        href="http://www.valvesoftware.com/videopolicy.html"
                        >http://www.valvesoftware.com/videopolicy.html</a
                      >.
                    </p>
                    <br />
                    <p>
                      E. Licencja na Korzystanie z Oprogramowania Serwera
                      Dedykowanego Valve
                    </p>
                    <br />
                    <p>
                      Subskrypcja (Subskrypcje) Użytkownika może (mogą)
                      obejmować dostęp do Oprogramowania Serwera Dedykowanego
                      Valve. W takim przypadku, Użytkownik może korzystać z
                      Oprogramowania Serwera Dedykowanego Valve na
                      nieograniczonej liczbie komputerów w celu hostowania
                      online gier wieloosobowych będących produktami Valve.
                      Użytkownik, który chce korzystać z Oprogramowania Serwera
                      Dedykowanego Valve, ponosi wyłączną odpowiedzialność za
                      zapewnienie dostępu do Internetu, przepustowości łącza
                      internetowego lub sprzętu używanego do takich działań i
                      ponosi wszelkie koszty z tym związane.
                    </p>
                    <br />
                    <p>F. Własność Treści i Usług</p>
                    <br />
                    <p>
                      Wszelki tytuł prawny, a także wszelkie prawa
                      właścicielskie i prawa własności intelektualnej dotyczące
                      Treści i Usług oraz wszelkich ich kopii należą do Valve
                      lub licencjodawców Valve albo licencjodawców podmiotów
                      powiązanych Valve. Wszelkie prawa są zastrzeżone, z
                      wyjątkiem przypadków wyraźnie określonych w niniejszej
                      Umowie. Treści i Usługi są chronione prawem autorskim,
                      umowami i konwencjami międzynarodowymi dotyczącymi praw
                      autorskich oraz innymi przepisami. Treści i Usługi
                      zawierają określone materiały stanowiące przedmiot
                      udzielonych licencji, a licencjodawcy Valve i jej
                      podmiotów powiązanych mogą chronić przysługujące im prawa
                      w przypadku naruszenia niniejszej Umowy.
                    </p>
                    <br />
                    <p>
                      G. Ograniczenia Dotyczące Korzystania z Treści i Usług
                    </p>
                    <br />
                    <p>
                      Użytkownik nie może korzystać z Treści i Usług w żadnym
                      celu innym niż uzyskanie dozwolonego dostępu do Steam i
                      Subskrypcji Użytkownika oraz osobiste i niekomercyjne
                      korzystanie z Subskrypcji Użytkownika, chyba że niniejsza
                      Umowa lub Warunki Subskrypcji mające zastosowanie stanowią
                      inaczej. Z wyjątkiem przypadków dozwolonych na mocy
                      niniejszej Umowy (w tym wszelkich Warunków Subskrypcji lub
                      Zasad Korzystania) lub na mocy przepisów obowiązującego
                      prawa uchylających obowiązywanie niniejszych ograniczeń,
                      bez uzyskania uprzedniej pisemnej zgody Valve Użytkownik
                      nie może, w całości lub w części, kopiować, wykonywać
                      fotokopii, zwielokrotniać, rozpowszechniać, wprowadzać do
                      obrotu, tłumaczyć, dokonywać inżynierii wstecznej,
                      pozyskiwać kodu źródłowego, modyfikować, demontować,
                      dekompilować Treści i Usług, tworzyć utworów zależnych na
                      ich podstawie lub usuwać z Treści i Usług lub
                      jakiegokolwiek oprogramowania udostępnianego za
                      pośrednictwem Steam informacji bądź oznaczeń dotyczących
                      ich własności.
                    </p>
                    <br />
                    <p>
                      Użytkownik jest uprawniony do korzystania z Treści i Usług
                      na własny użytek osobisty, natomiast nie jest uprawniony
                      do: (i) sprzedaży, ustanawiania zabezpieczeń lub
                      przekazywania kopii Treści i Usług innym osobom w
                      jakikolwiek sposób, jak również do wypożyczania,
                      wynajmowania lub udzielania licencji na Treści i Usługi
                      innym osobom bez uprzedniej pisemnej zgody Valve, z
                      wyjątkiem zakresu wyraźnie dozwolonego na mocy innych
                      postanowień niniejszej Umowy (w tym Warunków Subskrypcji
                      lub Zasad Korzystania); (ii) hostowania lub świadczenia
                      usług dobierania Treści i Usług albo emulowania bądź
                      przekierowywania protokołów komunikacyjnych używanych
                      przez Valve w ramach dowolnej funkcji sieciowej Treści i
                      Usług, poprzez emulację protokołów, tunelowanie,
                      modyfikowanie lub dodawanie komponentów do Treści i Usług,
                      korzystanie z programu narzędziowego lub innych technik
                      znanych obecnie lub opracowanych w przyszłości, w dowolnym
                      celu, w tym do internetowych rozgrywek sieciowych, gier
                      sieciowych z wykorzystaniem komercyjnych lub
                      niekomercyjnych sieci gier lub w ramach części sieci
                      agregacji treści, stron lub serwisów internetowych, bez
                      uprzedniej pisemnej zgody Valve; lub (iii) wykorzystywania
                      Treści i Usług lub jakiejkolwiek ich części do dowolnych
                      celów komercyjnych, z wyjątkiem przypadków wyraźnie
                      dozwolonych na mocy innych postanowień niniejszej Umowy (w
                      tym wszelkich Warunków Subskrypcji lub Zasad Korzystania).
                    </p>

                    <a name="3"></a>
                    <br />
                    <p>
                      3. ROZLICZENIA, PŁATNOŚCI I INNE SUBSKRYPCJE<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      Wszystkie opłaty ponoszone w serwisie Steam i wszystkie
                      zakupy dokonane za pomocą Portfela Steam są płatne z góry
                      i ostateczne, z wyjątkiem przypadków opisanych w sekcjach
                      3.I i 7 poniżej.
                    </p>
                    <br />
                    <p>A. Autoryzacja Płatności</p>
                    <br />
                    <p>
                      Przekazując Valve lub jednemu z podmiotów przetwarzających
                      płatności informacje dotyczące płatności, Użytkownik
                      oświadcza Valve, że jest autoryzowanym użytkownikiem
                      karty, kodu PIN, klucza lub konta powiązanego z tą
                      płatnością i upoważnia Valve do obciążenia karty
                      kredytowej lub przetworzenia płatności przez wybrany
                      zewnętrzny podmiot przetwarzający płatności w odniesieniu
                      do Subskrypcji, środków z Portfela Steam, Sprzętu lub
                      innych opłat poniesionych przez Użytkownika.
                    </p>
                    <br />
                    <p>
                      W przypadku subskrypcji zamawianych na uzgodniony okres
                      użytkowania, za które dokonywane są płatności cykliczne z
                      tytułu możliwości dalszego korzystania („Subskrypcje z
                      Płatnościami Cyklicznymi”), kontynuując korzystanie z
                      Subskrypcji z Płatnościami Cyklicznymi, Użytkownik wyraża
                      zgodę i potwierdza, że Valve jest upoważniona do
                      obciążenia jego karty kredytowej (lub Portfela Steam,
                      jeśli został zasilony) lub do przetworzenia płatności za
                      pomocą dowolnego innego zewnętrznego podmiotu
                      przetwarzającego płatności, w odniesieniu do wszelkich
                      stosownych kwot płatności cyklicznych. W przypadku
                      zamówienia Subskrypcji z Płatnościami Cyklicznymi,
                      Użytkownik wyraża zgodę na niezwłoczne powiadomienie Valve
                      o wszelkich zmianach numeru rachunku karty kredytowej,
                      daty jej ważności lub adresu rozliczeniowego, konta PayPal
                      bądź numeru innego konta płatniczego. Użytkownik ponadto
                      wyraża zgodę na niezwłoczne powiadomienie Valve o
                      wygaśnięciu lub anulowaniu karty kredytowej, konta PayPal
                      lub innego rachunku płatniczego bez względu na przyczynę
                      takiego wygaśnięcia czy anulowania.
                    </p>
                    <br />
                    <p>
                      Jeśli korzystanie z serwisu Steam lub zakup Sprzętu w
                      serwisie Steam podlega jakiemukolwiek podatkowi od
                      użytkowania lub sprzedaży, Valve może obciążyć Użytkownika
                      również takimi podatkami pobierając je dodatkowo w
                      stosunku do Subskrypcji lub innych opłat, o których mowa w
                      Zasadach Korzystania. Wszystkie opłaty w serwisie Steam w
                      Unii Europejskiej i Zjednoczonym Królestwie obejmują
                      podatek VAT („VAT”) obowiązujący w UE lub Zjednoczonym
                      Królestwie. Kwoty podatku VAT pobierane przez Valve
                      odzwierciedlają podatek VAT należny od wartości Treści i
                      Usług, Sprzętu lub Subskrypcji.
                    </p>
                    <br />
                    <p>
                      Użytkownik zobowiązuje się do niekorzystania z serwerów
                      proxy dla maskowania adresu IP lub innych metod w celu
                      ukrycia miejsca zamieszkania, czy to w celu obejścia
                      ograniczeń geograficznych dotyczących zawartości gier,
                      składania zamówień lub dokonywania zakupów po cenach
                      innych niż obowiązujące w regionie geograficznym
                      Użytkownika, czy też w jakimkolwiek innym celu. W takim
                      przypadku Valve może zablokować Użytkownikowi dostęp do
                      Konta.
                    </p>
                    <br />
                    <p>
                      B. Odpowiedzialność za opłaty związane z kontem
                      Użytkownika
                    </p>
                    <br />
                    <p>
                      Użytkownik jako posiadacz Konta ponosi odpowiedzialność za
                      wszelkie naliczone opłaty, w tym za obowiązujące podatki,
                      oraz za wszystkie zamówienia lub zakupy dokonane przez
                      siebie lub dowolną osobę korzystającą z jego Konta, w tym
                      członków rodziny lub znajomych. W przypadku anulowania
                      Konta Użytkownika, Valve zastrzega sobie prawo do
                      naliczenia opłat, opłat dodatkowych lub kosztów
                      poniesionych przed anulowaniem. Wszelkie zaległe lub
                      nieopłacone Konta muszą zostać rozliczone zanim Valve
                      zezwoli na ponowną rejestrację Użytkownika.
                    </p>
                    <br />
                    <p>C. Portfel Steam</p>
                    <br />
                    <p>
                      Steam może udostępnić saldo konta powiązane z Kontem
                      Użytkownika („Portfel Steam”). Portfel Steam nie jest
                      rachunkiem bankowym ani jakimkolwiek instrumentem
                      płatniczym. Działa jako przedpłacone saldo przeznaczone do
                      zamawiania Treści i Usług. Użytkownik może zasilić swój
                      Portfel Steam, do maksymalnej kwoty określonej przez
                      Valve, środkami z karty kredytowej, przepłaconej karty
                      płatniczej, przy pomocy kodu promocyjnego lub innej metody
                      płatności akceptowanej przez Steam. W ciągu dwudziestu
                      czterech (24) godzin całkowita kwota przechowywana w
                      Portfelu Steam, powiększona o całkowitą kwotę wydaną przy
                      pomocy Portfela Steam, nie może łącznie przekroczyć kwoty
                      2000 USD lub równowartości tej kwoty w obowiązującej
                      lokalnej walucie – próby wpłat do Portfela Steam, które
                      skutkowałyby przekroczeniem tego limitu, nie zostaną
                      zaksięgowane w Portfelu Steam, dopóki aktywność
                      Użytkownika nie spowoduje obniżenia wartości salda poniżej
                      tego limitu. Valve może w razie potrzeby zmieniać lub
                      ustanawiać odmienne wartości salda Portfela Steam i limity
                      jego wykorzystania.
                    </p>
                    <br />
                    <p>
                      O każdej zmianie salda Portfela Steam i limitów
                      wykorzystania Użytkownik zostanie powiadomiony pocztą
                      elektroniczną w terminie sześćdziesięciu (60) dni
                      kalendarzowych przed wejściem zmiany w życie. Dalsze
                      korzystanie z Konta Steam przez ponad trzydzieści (30) dni
                      kalendarzowych po wejściu zmian w życie będzie oznaczać
                      ich akceptację. Jeśli Użytkownik nie wyraża zgody na
                      zmiany, jedynym przysługującym mu środkiem jest zamknięcie
                      swojego Konta Steam lub zaprzestanie korzystania z
                      Portfela Steam. W takim przypadku Valve nie ma obowiązku
                      zwrotu jakichkolwiek środków pozostałych w Portfelu Steam
                      Użytkownika.
                    </p>
                    <br />
                    <p>
                      Użytkownik może wykorzystać środki z Portfela Steam do
                      zamówienia Subskrypcji, w tym składając zamówienia w grze,
                      gdy włączone są transakcje wykonywane przy pomocy Portfela
                      Steam, i kupując Sprzęt. Z zastrzeżeniem postanowień
                      sekcji 3.I, środki dodane do Portfela Steam nie podlegają
                      zwrotowi ani przeniesieniu. Środki z Portfela Steam nie
                      stanowią przedmiotu prawa własności osobistej, nie mają
                      wartości poza serwisem Steam i mogą być wykorzystywane
                      wyłącznie do zamawiania Subskrypcji i powiązanych treści
                      za pośrednictwem serwisu Steam (w tym między innymi gier i
                      innych aplikacji oferowanych za pośrednictwem Sklepu Steam
                      lub na Rynku Subskrypcji Steam) i Sprzętu. Środki z
                      Portfela Steam nie mają wartości pieniężnej i nie można
                      ich wymienić na gotówkę. Środki z Portfela Steam, które są
                      uważane za mienie porzucone, mogą zostać przekazane
                      właściwemu organowi.
                    </p>
                    <br />
                    <p>
                      D. Handel Subskrypcjami i Transakcje Dotyczące Subskrypcji
                      Pomiędzy Użytkownikami
                    </p>
                    <br />
                    <p>
                      Serwis Steam może zawierać jedną lub kilka funkcji lub
                      witryn, które umożliwiają Użytkownikom handel określonymi
                      rodzajami Subskrypcji (na przykład prawami licencyjnymi do
                      przedmiotów wirtualnych) pomiędzy Użytkownikami,
                      oferowanie ich innym Użytkownikom bądź ich zamawianie u
                      innych Użytkowników („Rynki Subskrypcji”). Przykładem
                      Rynku Subskrypcji jest Rynek Społeczności Steam (Steam
                      Community Market). Korzystając z Rynków Subskrypcji lub w
                      nich uczestnicząc, Użytkownik upoważnia Valve, w imieniu
                      własnym lub jako agent lub licencjobiorca jakiegokolwiek
                      zewnętrznego twórcy lub wydawcy odpowiednich Subskrypcji
                      znajdujących się na Koncie Użytkownika, do przeniesienia
                      tych Subskrypcji ze swojego Konta w celu realizacji
                      wszelkich transakcji lub sprzedaży, których dokonuje.
                    </p>
                    <br />
                    <p>
                      Z tytułu transakcji lub sprzedaży dokonywanych na Rynku
                      Subskrypcji Valve może pobierać opłaty. Wszelkie opłaty
                      zostaną przedstawione Użytkownikowi przed dokonaniem
                      transakcji lub sprzedaży.
                    </p>
                    <br />
                    <p>
                      Jeśli Użytkownik dokona transakcji, sprzedaży lub złoży
                      zamówienie na Rynku Subskrypcji, przyjmuje do wiadomości i
                      potwierdza, że ponosi odpowiedzialność za zapłatę
                      wszelkich podatków, które mogą być należne w związku z
                      jego transakcjami, w tym podatków od sprzedaży lub
                      użytkowania, oraz za przestrzeganie obowiązujących
                      przepisów podatkowych. Przychody ze sprzedaży dokonanej na
                      Rynku Subskrypcji mogą być uznawane za dochód dla celów
                      podatku dochodowego. Aby określić zobowiązania podatkowe
                      Użytkownika z tytułu działalności na dowolnym Rynku
                      subskrypcji Użytkownik powinien skonsultować się ze
                      specjalistą w dziedzinie podatków.
                    </p>
                    <br />
                    <p>
                      Użytkownik rozumie i przyjmuje do wiadomości, że Valve nie
                      ma obowiązku udostępniania bądź utrzymywania
                      jakiegokolwiek Rynku Subskrypcji. Valve może podjąć
                      decyzję o zaprzestaniu działania dowolnego Rynku
                      Subskrypcji, zmianie pobieranych opłat lub zmianie
                      warunków lub funkcji Rynku Subskrypcji Steam. Użytkownik
                      zostanie powiadomiony o każdej istotnej zmianie warunków
                      lub dostępności Rynku Subskrypcji w odpowiednim terminie
                      przed wejściem takiej zmiany w życie, chyba że okaże się
                      to niemożliwe na skutek wystąpienia siły wyższej, z winy
                      Użytkownika lub zdarzenia związanego z osobą trzecią,
                      które pozostaje poza kontrolą Valve.
                    </p>
                    <br />
                    <p>
                      Użytkownik rozumie również i przyjmuje do wiadomości, że
                      Subskrypcje stanowiące przedmiot wymiany, sprzedaży bądź
                      zamówienia na jakimkolwiek Rynku Subskrypcji stanowią
                      prawa licencyjne, oraz że nie posiada uprawnień związanych
                      z własnością takich Subskrypcji, a także że Valve nie
                      uznaje przenoszenia Subskrypcji (w tym wynikającego z mocy
                      prawa), które są dokonywane poza serwisem Steam.
                    </p>
                    <br />
                    <p>E. Zakupy Detaliczne</p>
                    <br />
                    <p>
                      Valve może oferować Subskrypcję lub wymagać jej od
                      nabywców wersji produktów w opakowaniu detalicznym lub
                      wersji OEM produktów Valve. Towarzyszący takim wersjom
                      „Klucz CD” (CD-Key) lub „Klucz Produktu” (Product Key)
                      służą do aktywacji Subskrypcji Użytkownika. Dalsze
                      instrukcje zostaną dostarczone wraz z odpowiednim
                      produktem.
                    </p>
                    <br />
                    <p>F. Autoryzowani Odsprzedawcy Steam</p>
                    <br />
                    <p>
                      Subskrypcję można zamówić za pośrednictwem autoryzowanego
                      odsprzedawcy Valve. Towarzyszący takiemu zamówieniu „Klucz
                      Produktu” zostanie wykorzystany do aktywacji Subskrypcji
                      Użytkownika. Dalsze instrukcje zostaną dostarczone wraz z
                      odpowiednim produktem. W przypadku zamówienia Subskrypcji
                      u autoryzowanego odsprzedawcy Valve, Użytkownik
                      zobowiązuje się kierować wszelkie pytania dotyczące Klucza
                      Produktu do tego Sprzedawcy.
                    </p>
                    <br />
                    <p>G. Darmowe Subskrypcje</p>
                    <br />
                    <p>
                      W niektórych przypadkach Valve może oferować bezpłatną
                      Subskrypcję niektórych Treści i Usług. Podobnie jak w
                      przypadku wszystkich Subskrypcji, Użytkownik zawsze ponosi
                      odpowiedzialność za opłaty naliczane przez dostawców usług
                      internetowych, operatorów telefonicznych oraz za inne
                      opłaty za połączenie, które może ponieść podczas
                      korzystania ze Steam, również w przypadku, gdy Valve
                      oferuje bezpłatną Subskrypcję.
                    </p>
                    <br />
                    <p>H. Witryny Osób Trzecich</p>
                    <br />
                    <p>
                      W serwisie Steam mogą być udostępniane łącza (linki) do
                      innych witryn osób trzecich. Niektóre z tych witryn mogą
                      pobierać oddzielne opłaty, które nie są uwzględnione w
                      Subskrypcji lub innych opłatach, które użytkownik może
                      uiścić na rzecz Valve, i które stanowią dodatek do
                      Subskrypcji i takich opłat. Steam może również zapewniać
                      dostęp do dostawców zewnętrznych, którzy dostarczają
                      treści, towary lub usługi za pośrednictwem serwisu Steam
                      lub Internetu. Użytkownik ponosi pełną odpowiedzialność za
                      wszelkie odrębne opłaty, za uiszczenie których odpowiada
                      oraz za zobowiązania, które Użytkownik zaciąga w relacjach
                      z takimi osobami trzecimi. Valve nie udziela jakichkolwiek
                      zapewnień ani gwarancji, wyraźnych bądź dorozumianych,
                      dotyczących jakiejkolwiek witryny osoby trzeciej. W
                      szczególności Valve nie udziela jakichkolwiek zapewnień
                      ani gwarancji, że jakakolwiek usługa lub subskrypcja
                      oferowana za pośrednictwem dostawców zewnętrznych nie
                      ulegnie zmianie, nie zostanie zawieszona lub zakończona.
                    </p>
                    <br />
                    <p>I. Zwroty i Prawo do Odstąpienia od Umowy</p>
                    <br />
                    <p>
                      Bez uszczerbku dla jakichkolwiek praw ustawowych, które
                      mogą przysługiwać Użytkownikowi, Użytkownik może wystąpić
                      o zwrot pieniędzy za zamówienie lub zakupy w Steam zgodnie
                      z warunkami Polityki Zwrotów Valve dostępnej pod adresem
                      <a
                        target="_new"
                        href="http://store.steampowered.com/steam_refunds/"
                        >http://store.steampowered.com/steam_refunds/</a
                      >.
                    </p>
                    <br />
                    <p>
                      Informacja dla konsumentów z Unii Europejskiej i
                      Zjednoczonego Królestwa:
                    </p>
                    <br />
                    <p>
                      Prawo UE i Zjednoczonego Królestwa przewiduje ustawowe
                      prawo odstąpienia od niektórych umów dotyczących towarów
                      fizycznych i zamówień treści cyfrowych. Więcej informacji
                      na temat zakresu ustawowego prawa odstąpienia od umowy i
                      sposobów korzystania z tego prawa można znaleźć pod
                      adresem
                      <a
                        target="_new"
                        href="https://support.steampowered.com/kb_article.php?ref=8620-QYAL-4516"
                        >https://support.steampowered.com/kb_article.php?ref=8620-QYAL-4516</a
                      >.
                    </p>

                    <a name="4"></a>
                    <br />
                    <p>
                      4. ZASADY POSTĘPOWANIA W SIECI, OSZUKIWANIE I
                      MANIPULOWANIE PROCESAMI<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      Postępowanie Użytkownika w sieci i interakcje z innymi
                      Użytkownikami muszą być zgodne z Zasadami Steam
                      Dotyczącymi Zachowania w Sieci, które można znaleźć pod
                      adresem
                      <a
                        target="_new"
                        href="http://steampowered.com/index.php?area=online_conduct"
                        >http://steampowered.com/index.php?area=online_conduct</a
                      >. Wymagania dodatkowe wynikające z warunków użytkowania
                      ustanowionych przez osoby trzecie, które hostują określone
                      gry lub inne usługi, mogą być również wskazane w Warunkach
                      Subskrypcji mających zastosowanie do danej Subskrypcji.
                    </p>
                    <br />
                    <p>
                      Steam oraz Treści i Usługi mogą obejmować funkcjonalność
                      zaprojektowaną w celu identyfikacji procesów lub
                      funkcjonalności oprogramowania lub sprzętu, dzięki którym
                      gracze mogą uzyskać nieuczciwą przewagę konkurencyjną
                      podczas grania w wersje Treści i Usług przeznaczone do
                      rozgrywek wieloosobowych lub możliwość modyfikacji Treści
                      i Usług (tzw. „Cheat’y”). Użytkownik zobowiązuje się nie
                      tworzyć Cheat’ów oraz nie wspomagać w jakikolwiek sposób
                      osób trzecich przy tworzeniu lub korzystaniu z Cheat’ów.
                      Użytkownik zobowiązuje się, że nie będzie bezpośrednio lub
                      pośrednio wyłączać, obchodzić lub w inny sposób zakłócać
                      działania oprogramowania zaprojektowanego w celu
                      zapobiegania lub zgłaszania korzystania z Cheat’ów.
                    </p>
                    <br />
                    <p>
                      Użytkownik zobowiązuje się, że nie będzie manipulował
                      procesami uruchamiania i działania Steam lub Treści i
                      Usług, chyba że Valve wyrazi na to zgodę. Użytkownik
                      przyjmuje do wiadomości i wyraża zgodę na to, że Valve lub
                      jakikolwiek podmiot hostujący grę wieloosobową online
                      rozpowszechnianą za pośrednictwem serwisu Steam („Host
                      Zewnętrzny”) może nie dopuścić Użytkownika do
                      uczestniczenia w niektórych grach wieloosobowych online,
                      jeśli Użytkownik korzysta z Cheat’ów bądź manipuluje
                      procesami uruchamiania lub działania Steam bądź Treści i
                      Usług.
                    </p>
                    <br />
                    <p>
                      Ponadto Użytkownik przyjmuje do wiadomości i potwierdza,
                      że Hości Zewnętrzni mogą zgłaszać Valve korzystanie z
                      Cheat’ów lub nieautoryzowane manipulowanie procesem, a
                      Valve może przekazywać historię korzystania z Cheat’ów
                      Hostom Zewnętrznym w zakresie określonym w Polityce
                      Prywatności Steam.
                    </p>
                    <br />
                    <p>
                      Valve może ograniczyć lub zamknąć Konto Użytkownika bądź
                      zakończyć daną Subskrypcję z powodu jakiegokolwiek
                      zachowania lub działania, które jest niezgodne z prawem,
                      stanowi Cheat lub narusza Zasady Steam Dotyczące
                      Zachowania w Sieci. Użytkownik przyjmuje do wiadomości, że
                      Valve nie jest zobowiązana do powiadomienia Użytkownika
                      przed zakończeniem Subskrypcji lub zamknięciem Konta.
                    </p>
                    <br />
                    <p>
                      Użytkownik nie może korzystać z Cheat’ów, oprogramowania
                      automatyzującego (botów), modów, hacków ani innego
                      nieautoryzowanego oprogramowania osób trzecich służącego
                      do wchodzenia w interakcje lub kontrolowania
                      jakiegokolwiek procesu Rynku Subskrypcji, procesu
                      tworzenia konta Steam bądź w inny sposób wykorzystywanego
                      w interakcji z procesami lub interfejsem użytkownika
                      serwisu Steam bądź do kontroli takich procesów lub
                      interfejsu, chyba że następuje to w zakresie wyraźnie
                      dozwolonym.
                    </p>

                    <a name="5"></a>
                    <br />
                    <p>
                      5. TREŚCI OSÓB TRZECICH<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      W odniesieniu do wszystkich Subskrypcji, Treści i Usług,
                      które nie zostały utworzone przez Valve, Valve nie
                      monitoruje takich treści osób trzecich dostępnych w
                      serwisie Steam lub z innych źródeł. Valve nie ponosi
                      odpowiedzialności za takie treści osób trzecich, chyba że
                      w zakresie przewidzianym przepisami obowiązującego prawa.
                      Chociaż niektóre aplikacje osób trzecich mogą być używane
                      przez przedsiębiorstwa na potrzeby prowadzonej
                      działalności gospodarczej, jednakże Użytkownik może
                      nabywać takie oprogramowanie za pośrednictwem Steam
                      wyłącznie do prywatnego użytku osobistego.
                    </p>

                    <a name="6"></a>
                    <br />
                    <p>
                      6. TREŚCI TWORZONE PRZEZ UŻYTKOWNIKÓW<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>A. Postanowienia Ogólne</p>
                    <br />
                    <p>
                      Steam zapewnia Użytkownikowi interfejsy i narzędzia
                      umożliwiające tworzenie treści i udostępnianie ich innym
                      użytkownikom lub Valve, według uznania Użytkownika.
                      Określenie „Treści Tworzone Przez Użytkownika” oznacza
                      wszelkie treści udostępniane innym użytkownikom za
                      pośrednictwem funkcji serwisu Steam dla wielu użytkowników
                      bądź na rzecz Valve lub jej podmiotów powiązanych poprzez
                      Treści i Usługi Użytkownika lub w inny sposób.
                    </p>
                    <br />
                    <p>
                      Przesyłając swoje treści do Steam w celu udostępnienia ich
                      innym użytkownikom lub Valve, Użytkownik przekazuje Valve
                      i podmiotom z nią powiązanym, bez ograniczeń
                      terytorialnych, niewyłączne prawa do korzystania,
                      rozpowszechniania, modyfikowania, tworzenia utworów
                      zależnych, rozpowszechniania, przesyłania, konwersji,
                      tłumaczenia, nadawania i udostępniania w inny sposób oraz
                      publicznego wyświetlania i publicznego wykonania Treści
                      Tworzonych Przez Użytkownika i opracowanych na ich
                      podstawie utworów zależnych w celu działania, dystrybucji,
                      włączania do i promowania serwisu Steam, gier Steam lub
                      innych ofert Steam, w tym Subskrypcji. Niniejsza licencja
                      jest przyznawana Valve z chwilą przesłania treści do
                      serwisu Steam, na cały czas trwania praw własności
                      intelektualnej. Może ona zostać rozwiązana, jeśli Valve
                      naruszy warunki licencji i nie usunie takiego naruszenia w
                      terminie czternastu (14) dni od otrzymania od Użytkownika
                      zawiadomienia wysłanego do Działu Prawnego Valve na
                      odpowiedni adres Valve podany na tej stronie
                      <a
                        target="new"
                        style="text-decoration: underline"
                        href="http://store.steampowered.com/privacy_agreement/"
                        >Privacy Policy</a
                      >. Rozwiązanie wspomnianej licencji nie wpływa na prawa
                      sublicencjobiorców wynikające z jakiejkolwiek sublicencji
                      udzielonej przez Valve przed cofnięciem licencji. Valve
                      jest jedynym właścicielem utworów zależnych wytworzonych
                      przez Valve w oparciu o Treści Tworzonych Przez
                      Użytkownika, a zatem Valve jest uprawniona do udzielania
                      licencji na takie utwory zależne. Jeśli Użytkownik
                      korzysta z usługi przechowywania danych w chmurze Valve,
                      udziela Valve licencji na przechowywanie swoich danych w
                      ramach tej usługi. Valve może ustanawiać ograniczenia
                      dotyczące używanej przez Użytkownika przestrzeni dyskowej.
                    </p>
                    <br />
                    <p>
                      Jeśli Użytkownik przekaże Valve jakiekolwiek informacje
                      zwrotne lub sugestie dotyczące serwisu Steam, Treści i
                      Usług lub jakichkolwiek produktów, Sprzętu lub usług
                      Valve, Valve może korzystać z tych informacji zwrotnych
                      lub sugestii w dowolny sposób, bez obowiązku uzgadniania
                      sposobu korzystania z Użytkownikiem.
                    </p>
                    <br />
                    <p>
                      Użytkownik wyraża zgodę na to, że Treści Tworzone Przez
                      Użytkownika, które przesyła do serwisu Steam za
                      pośrednictwem interfejsów i narzędzi dostarczonych przez
                      Valve, będą w znacznym stopniu eksponowane. Użytkownik
                      potwierdza, że udostępnia je dla własnej satysfakcji i w
                      celu zdobycia uznania innych Użytkowników. W związku z
                      powyższym, Użytkownik udziela nieodpłatnie niniejszej
                      licencji Valve i podmiotom z nią powiązanym, niezależnie
                      od wszelkich innych odmiennych postanowień określonych w
                      Warunkach Korzystania z Konkretnej Aplikacji, zgodnie z
                      definicją zawartą w sekcji 6.B poniżej.
                    </p>
                    <br />
                    <p>B. Treści Przesyłane do Warsztatu Steam</p>
                    <br />
                    <p>
                      Niektóre gry lub aplikacje dostępne w serwisie Steam
                      („Aplikacje z Obsługą Warsztatu”) umożliwiają
                      Użytkownikowi tworzenie Treści Tworzonych przez
                      Użytkownika na podstawie lub przy użyciu Aplikacji z
                      Obsługą Warsztatu oraz przesyłanie takich Treści
                      Tworzonych przez Użytkownika („Treści Przesyłane do
                      Warsztatu”) na jedną lub więcej stron internetowych
                      Warsztatu Steam. Treści Przesyłane do Warsztatu są
                      widoczne dla społeczności Steam, a w przypadku ich
                      niektórych kategorii użytkownicy mogą mieć możliwość
                      wchodzenia z nimi w interakcje, pobierania ich bądź ich
                      zakupu. W niektórych przypadkach Valve albo producent
                      zewnętrzny może rozważyć włączenie Treści Przesyłanych do
                      Warsztatu do gry lub wprowadzenie ich na Rynek
                      Subskrypcji.
                    </p>
                    <br />
                    <p>
                      Użytkownik przyjmuje do wiadomości i potwierdza, że Valve
                      nie jest zobowiązana do używania, rozpowszechnienia lub
                      dalszego rozpowszechniania kopii jakichkolwiek Treści
                      Przesyłanych do Warsztatu i zastrzega sobie prawo, ale nie
                      obowiązek, do ograniczenia lub usunięcia Treści
                      Przesyłanych do Warsztatu z dowolnej przyczyny.
                    </p>
                    <br />
                    <p>
                      Konkretne Aplikacje z Obsługą Warsztatu albo strony
                      internetowe Warsztatu mogą zawierać warunki szczególne
                      („Warunki Korzystania z Konkretnej Aplikacji”), które
                      uzupełniają lub zmieniają warunki określone w niniejszej
                      sekcji w celu odzwierciedlenia indywidualnych wymagań
                      danej Aplikacji z Obsługą Warsztatu.
                    </p>
                    <br />
                    <p>
                      Zgodnie z postanowieniami sekcji 6.A Treści Przesyłane do
                      Warsztatu są co do zasady udostępniane Użytkownikom
                      bezpłatnie. W drodze wyjątku mogą być udostępniane
                      Użytkownikom za opłatą. W takim przypadku sposób podziału
                      uzyskanych przychodów, a w szczególności wynagrodzenie,
                      które Użytkownik może otrzymać z tytułu takiego
                      udostępnienia, są określone w Warunkach Korzystania z
                      Konkretnej Aplikacji, a nie w niniejszej Umowie. O ile w
                      Warunkach Korzystania z Konkretnej Aplikacji (o ile takie
                      istnieją) nie określono odmiennie, Treści Przesyłane do
                      Warsztatu podlegają następującym zasadom ogólnym:
                    </p>
                    <br />
                    <p></p>
                    <ul>
                      <li>
                        Treści Przesyłane do Warsztatu stanowią Subskrypcje, a
                        zatem Użytkownik wyraża zgodę i oświadcza, że każdemu
                        Użytkownikowi, który otrzyma Treści Przesyłane do
                        Warsztatu, będą przysługiwały takie same prawa do
                        korzystania z Treści Przesyłanych do Warsztatu (i będzie
                        podlegał takim samym ograniczeniom), jakie są określone
                        w niniejszej Umowie dla wszelkich innych Subskrypcji.
                      </li>
                      <li>
                        Niezależnie od licencji opisanej w sekcji 6.A, Valve
                        będzie miała prawo do modyfikacji, w tym do tworzenia
                        utworów zależnych bazujących na Treściach Przesyłanych
                        do Warsztatu przez Użytkownika, w następujących
                        przypadkach: (a) Valve może wprowadzać modyfikacje
                        niezbędne do zapewnienia kompatybilności Treści
                        Przesłanych przez Użytkownika ze Steam i
                        funkcjonalnościami Warsztatu lub interfejsem
                        użytkownika, oraz (b) Valve lub odpowiedni deweloper
                        może wprowadzać modyfikacje Treści Przesyłanych do
                        Warsztatu, które zostały przyjęte do rozpowszechniania w
                        Aplikacji, jeśli uzna to za konieczne lub pożądane w
                        celu ulepszenia rozgrywki lub zapewnienia jej zgodności
                        z Aplikacją z Obsługą Warsztatu. Zgodnie z
                        postanowieniami sekcji 6.A Użytkownik nieodpłatnie
                        przyznaje Valve i podmiotom z nią powiązanym prawo do
                        modyfikowania, w tym do tworzenia utworów zależnych na
                        podstawie jego Treści Przesyłanych do Warsztatu. W
                        związku z powyższym Użytkownikowi nie przysługuje od
                        Valve jakiekolwiek wynagrodzenie z tytułu modyfikowania
                        przez Valve jego Treści Przesyłanych do Warsztatu.
                      </li>
                      <li>
                        Użytkownik może, według własnego uznania, usunąć Treści
                        Przesyłane do Warsztatu z odpowiednich stron Warsztatu.
                        W takim przypadku Valve nie będzie już przysługiwać
                        prawo do korzystania, rozpowszechniania, przesyłania,
                        udostępniania, publicznego wyświetlania lub publicznego
                        wykonania Treści Przesyłanych do Warsztatu, z
                        zastrzeżeniem jednak, że (a) Valve może nadal korzystać
                        z tych praw w odniesieniu do wszelkich Treści
                        Przesyłanych do Warsztatu, które są przyjęte do
                        rozpowszechniania w grze lub rozpowszechnione w sposób
                        umożliwiający ich wykorzystanie w grze, oraz (b)
                        usunięcie dokonane przez Użytkownika nie wpłynie na
                        prawa tych Użytkowników, którzy już uzyskali dostęp do
                        kopii Treści Przesyłanych do Warsztatu.
                      </li>
                    </ul>
                    <p></p>
                    <br />
                    <p>C. Promocje i Wsparcie</p>
                    <br />
                    <p>
                      Jeśli Użytkownik korzysta z usług Steam (np. Listy
                      Kuratorów Steam lub usługi Steam Broadcasting) w celu
                      promowania lub wspierania produktu, usługi lub wydarzenia
                      w zamian za jakiekolwiek wynagrodzenie uzyskiwane od osoby
                      trzeciej (w tym w zamian za nagrody niepieniężne, takie
                      jak darmowe gry), musi wyraźnie wskazać źródło takiego
                      wynagrodzenia swoim odbiorcom.
                    </p>
                    <br />
                    <p>D. Zapewnienia i Gwarancje</p>
                    <br />
                    <p>
                      Użytkownik zapewnia i gwarantuje Valve, że posiada prawa
                      do wszystkich Treści Tworzonych przez Użytkownika, które
                      wystarczają, by przyznać Valve i innym zainteresowanym
                      podmiotom licencje opisane w punktach A. i B. powyżej lub
                      w jakichkolwiek szczególnych postanowieniach licencyjnych
                      dla odpowiedniej Aplikacji z Obsługą Warsztatu bądź strony
                      Warsztatu. Obejmuje to, bez ograniczeń, wszelkiego rodzaju
                      prawa własności intelektualnej lub inne prawa własności
                      lub dobra osobiste, na które mają wpływ Treści Tworzone
                      Przez Użytkownika lub które są w nich zawarte. W
                      szczególności, w odniesieniu do Treści Przesyłanych do
                      Warsztatu, Użytkownik zapewnia i gwarantuje, że Treści
                      Przesyłane do Warsztatu zostały pierwotnie stworzone przez
                      niego (lub, w odniesieniu do Treści Przesyłanych do
                      Warsztatu, do stworzenia których przyczyniły się oprócz
                      Użytkownika inne osoby, przez Użytkownika i innych twórców
                      – w takim przypadku, Użytkownik zapewnia i gwarantuje, że
                      przysługuje mu prawo do przekazania takich Treści
                      Przesyłanych do Warsztatu również w imieniu pozostałych
                      twórców).
                    </p>
                    <br />
                    <p>
                      Ponadto, Użytkownik zapewnia i gwarantuje, że Treści
                      Tworzone Przez Użytkownika, przesłanie takich Treści oraz
                      przyznawanie przez Użytkownika praw do tych Treści nie
                      narusza jakiejkolwiek obowiązującej umowy, przepisów prawa
                      ani innego rodzaju regulacji.
                    </p>

                    <a name="7"></a>
                    <br />
                    <p>
                      7. WYŁĄCZENIA ODPOWIEDZIALNOŚCI; OGRANICZENIE
                      ODPOWIEDZIALNOŚCI; BRAK GWARANCJI; OGRANICZONA GWARANCJA I
                      UMOWA<a href="#0" style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      NINIEJSZA SEKCJA 7 NIE MA ZASTOSOWANIA DO UŻYTKOWNIKÓW Z
                      UE LUB ZJEDNOCZONEGO KRÓLESTWA.
                    </p>
                    <br />
                    <p></p>
                    <ul>
                      <li>
                        W PRZYPADKU UŻYTKOWNIKÓW Z AUSTRALII NINIEJSZA SEKCJA 7
                        NIE WYKLUCZA, NIE OGRANICZA ANI NIE MODYFIKUJE
                        STOSOWANIA JAKIEJKOLWIEK GWARANCJI, PRAWA LUB ŚRODKA
                        PRAWNEGO, KTÓREGO NIE MOŻNA WYKLUCZYĆ, OGRANICZYĆ LUB
                        ZMODYFIKOWAĆ, W TYM PRZYZNANYCH PRZEZ AUSTRALIJSKĄ
                        USTAWĘ O PRAWACH KONSUMENTA (ACL). ZGODNIE Z ACL TOWARY
                        SĄ OBJĘTE GWARANCJĄ, W TYM GWARANCJĄ AKCEPTOWALNEJ
                        JAKOŚCI. W PRZYPADKU NIEDOTRZYMANIA TEJ GWARANCJI,
                        UŻYTKOWNIKOWI PRZYSŁUGUJE PRAWO DO ŚRODKA PRAWNEGO (CO
                        MOŻE OBEJMOWAĆ NAPRAWĘ, WYMIANĘ TOWARU ALBO ZWROT
                        PIENIĘDZY). JEŚLI NIE MOŻNA ZAPEWNIĆ NAPRAWY LUB
                        WYMIANY, ALBO WYSTĄPI POWAŻNA AWARIA, UŻYTKOWNIKOWI
                        PRZYSŁUGUJE PRAWO DO ZWROTU PIENIĘDZY.
                      </li>
                      <li>
                        W PRZYPADKU UŻYTKOWNIKÓW Z NOWEJ ZELANDII NINIEJSZA
                        SEKCJA 7 NIE WYKLUCZA, NIE OGRANICZA ANI NIE MODYFIKUJE
                        STOSOWANIA JAKIEGOKOLWIEK PRAWA LUB ŚRODKA PRAWNEGO,
                        KTÓREGO NIE MOŻNA WYKLUCZYĆ, OGRANICZYĆ LUB
                        ZMODYFIKOWAĆ, W TYM PRZYZNANYCH PRZEZ NOWOZELANDZKĄ
                        USTAWĘ O GWARANCJACH KONSUMENCKICH Z 1993 R. USTAWA TA
                        USTANOWIA SZEREG GWARANCJI, M.IN. GWARANCJĘ
                        AKCEPTOWALNEJ JAKOŚĆ TOWARÓW I USŁUG. W PRZYPADKU
                        NIEDOTRZYMANIA TEJ GWARANCJI PRZYSŁUGUJĄ UPRAWNIENIA DO
                        USUNIĘCIA WADY OPROGRAMOWANIA (CO MOŻE OBEJMOWAĆ
                        NAPRAWĘ, WYMIANĘ LUB ZWROT PIENIĘDZY). JEŚLI NIE MOŻNA
                        USUNĄĆ WADY ALBO NIESPRAWNOŚĆ MA ISTOTNY CHARAKTER,
                        USTAWA TA PRZEWIDUJE ZWROT PIENIĘDZY.
                      </li>
                    </ul>
                    <p></p>
                    <br />
                    <p>
                      Przed nabyciem Subskrypcji należy zapoznać się z
                      informacjami o produkcie udostępnionymi w serwisie Steam,
                      w tym z opisem Subskrypcji, minimalnymi wymaganiami
                      technicznymi i opiniami użytkowników.
                    </p>
                    <br />
                    <p>A. WYŁĄCZENIA ODPOWIEDZIALNOŚCI</p>
                    <br />
                    <p>
                      W MAKSYMALNYM ZAKRESIE DOZWOLONYM PRZEZ OBOWIĄZUJĄCE
                      PRAWO, VALVE ORAZ JEJ PODMIOTY POWIĄZANE I USŁUGODAWCY
                      WYRAŹNIE WYŁĄCZAJĄ SWOJĄ ODPOWIEDZIALNOŚĆ Z TYTUŁU (I)
                      WSZELKICH GWARANCJI DOTYCZĄCYCH SERWISU STEAM, TREŚCI I
                      USŁUGI ORAZ SUBSKRYPCJI, ORAZ (II) WSZELKICH OBOWIĄZKÓW
                      WYNIKAJĄCYCH Z NORM COMMON LAW W ODNIESIENIU DO STEAM,
                      TREŚCI I USŁUG ORAZ SUBSKRYPCJI, W TYM OBOWIĄZKU
                      ZAPOBIEGANIA NIEDBALSTWU I NIEDOSTATECZNEJ FACHOWOŚCI.
                      STEAM, TREŚCI I USŁUGI, SUBSKRYPCJE I WSZELKIE INFORMACJE
                      DOSTĘPNE W ZWIĄZKU Z NIMI SĄ DOSTARCZANE W BIEŻĄCEJ
                      POSTACI („AS IS”) I „W MIARĘ DOSTĘPNOŚCI” (AS AVAILABLE),
                      „ZE WSZYSTKIMI WADAMI” (WITH ALL FAULTS) I BEZ
                      JAKIEJKOLWIEK GWARANCJI, WYRAŹNEJ LUB DOROZUMIANEJ, W TYM,
                      BEZ OGRANICZENIA, DOROZUMIANYCH GWARANCJI PRZYDATNOŚCI
                      HANDLOWEJ, PRZYDATNOŚCI DO OKREŚLONEGO CELU LUB
                      NIENARUSZALNOŚCI PRAW. WYRAŹNIE WYŁĄCZA SIĘ WSZELKIE
                      GWARANCJE NIENARUSZALNOŚCI, O KTÓRYCH MOWA W SEKCJI 2-312
                      AMERYKAŃSKIEGO FEDERALNEGO JEDNOLITEGO KODEKSU HANDLOWEGO
                      LUB W JAKIEJKOWLIEK INNEJ PORÓWNYWALNEJ USTAWIE STANOWEJ.
                      NIE UDZIELA SIĘ RÓWNIEŻ GWARANCJI BRAKU WAD PRAWNYCH,
                      BRAKU INGERENCJI W KORZYSTANIE UŻYTKOWNIKA LUB UPRAWNIEŃ
                      UŻYTKOWNIKA W ZWIĄZKU Z SERWISEM STEAM, TREŚCIAMI I
                      USŁUGAMI, SUBSKRYPCJAMI LUB INFORMACJAMI DOSTĘPNYMI W
                      ZWIĄZKU Z NIMI.
                    </p>
                    <br />
                    <p>
                      WYRAŹNIE WYŁĄCZA SIĘ WSZELKIE GWARANCJE NIENARUSZALNOŚCI
                      PRAW, O KTÓRYCH MOWA W SEKCJI 2-312 AMERYKAŃSKIEGO
                      FEDERALNEGO JEDNOLITEGO KODEKSU HANDLOWEGO.
                    </p>
                    <br />
                    <p>B. OGRANICZENIE ODPOWIEDZIALNOŚCI</p>
                    <br />
                    <p>
                      W MAKSYMALNYM ZAKRESIE DOZWOLONYM PRZEZ OBOWIĄZUJĄCE
                      PRAWO, VALVE, JEJ LICENCJODAWCY, ICH PODMIOTY POWIĄZANE
                      ORAZ ŻADEN Z DOSTAWCÓW USŁUG VALVE, NIE PONOSI
                      ODPOWIEDZIALNOŚCI ZA JAKIEKOLWIEK STRATY LUB SZKODY
                      WYNIKAJĄCE Z KORZYSTANIA LUB BRAKU MOŻLIWOŚCI KORZYSTANIA
                      Z SERWISU STEAM, KONTA UŻYTKOWNIKA, SUBSKRYPCJI
                      UŻYTKOWNIKA ORAZ TREŚCI I USŁUG, W TYM UTRATY WARTOŚCI
                      FIRMY, PRZERW W DZIAŁALNOŚCI, AWARII LUB NIEPRAWIDŁOWEGO
                      DZIAŁANIA KOMPUTERA LUB JAKICHKOLWIEK INNYCH SZKÓD LUB
                      STRAT HANDLOWYCH. NIEZALEŻNIE OD PRZYPADKU, VALVE NIE
                      PONOSI ODPOWIEDZIALNOŚCI ZA ODSZKODOWANIE ZA JAKIEKOLWIEK
                      SZKODY POŚREDNIE, WTÓRNE, NASTĘPCZE, SZCZEGÓLNE,
                      ODSZKODOWANIE RETORSYJNE LUB PREWENCYJNE, ANI ZA
                      JAKIEKOLWIEK INNE SZKODY WYNIKAJĄCE Z LUB W JAKIKOLWIEK
                      SPOSÓB ZWIĄZANE ZE STEAM, Z TREŚCIĄ I USŁUGAMI,
                      SUBSKRYPCJAMI I WSZELKIMI DOSTĘPNYMI W ZWIĄZKU Z NIMI
                      INFORMACJAMI, ANI ZA OPÓŹNIENIE LUB NIEMOŻNOŚĆ KORZYSTANIA
                      Z TREŚCI I USŁUG, SUBSKRYPCJI LUB JAKICHKOLWIEK
                      INFORMACJI, NAWET W PRZYPADKU WYSTĄPIENIA WINY STEAM LUB
                      JEGO PODMIOTÓW POWIĄZANYCH, CZYNU NIEDOZWOLONEGO (W TYM
                      NIEDBALSTWA), ODPOWIEDZIALNOŚCI NA ZASADZIE RYZYKA LUB
                      NIEDOTRZYMANIA GWARANCJI STEAM, NAWET JEŚLI ZOSTAŁA
                      POINFORMOWANA O MOŻLIWOŚCI WYSTĄPIENIA TAKICH SZKÓD LUB
                      ODSZKODOWAŃ. NINIEJSZE OGRANICZENIA I WYŁĄCZENIA
                      ODPOWIEDZIALNOŚCI MAJĄ ZASTOSOWANIE, NAWET JEŚLI
                      JAKIKOLWIEK ŚRODEK PRAWNY NIE ZAPEWNIA ODPOWIEDNIEJ
                      REKOMPENSATY.
                    </p>
                    <br />
                    <p>
                      PONIEWAŻ NIEKTÓRE STANY LUB JURYSDYKCJE NIE ZEZWALAJĄ NA
                      WYŁĄCZENIE LUB OGRANICZENIE ODPOWIEDZIALNOŚCI ZA SZKODY
                      NASTĘPCZE LUB WTÓRNE, W TAKICH STANACH LUB JURYSDYKCJACH
                      ODPOWIEDZIALNOŚĆ VALVE, KAŻDEGO Z JEJ LICENCJODAWCÓW I
                      PODMIOTÓW POWIĄZANYCH BĘDZIE OGRANICZONA W PEŁNYM ZAKRESIE
                      DOZWOLONYM PRZEZ PRAWO.
                    </p>
                    <br />
                    <p>C. BRAK GWARANCJI</p>
                    <br />
                    <p>
                      W MAKSYMALNYM ZAKRESIE DOZWOLONYM PRZEZ OBOWIĄZUJĄCE PRAWO
                      VALVE I JEJ PODMIOTY POWIĄZANE NIE UDZIELAJĄ GWARANCJI
                      CIĄGŁEGO, WOLNEGO OD BŁĘDÓW I WIRUSÓW LUB BEZPIECZNEGO
                      DZIAŁANIA SERWISU STEAM, TREŚCI I USŁUG, KONTA UŻYTKOWNIKA
                      LUB SUBSKRYPCJI BADŹ JAKICHKOLWIEK INFORMACJI DOSTĘPNYCH W
                      ZWIĄZKU Z NIMI ORAZ DOSTĘPU DO NICH.
                    </p>
                    <br />
                    <p>D. OGRANICZONA GWARANCJA I UMOWA</p>
                    <br />
                    <p>
                      OKREŚLONY SPRZĘT ZAKUPIONY OD VALVE JEST OBJĘTY
                      OGRANICZONĄ GWARANCJĄ I UMOWĄ [BĄDŹ, W ZALEŻNOŚCI OD
                      LOKALIZACJI UŻYTKOWNIKA, RĘKOJMIĄ], KTÓRA JEST SZCZEGÓŁOWO
                      OPISANA
                      <a
                        style="text-decoration: underline"
                        href="https://support.steampowered.com/kb_article.php?ref=4577-TUJV-6223"
                        >TUTAJ</a
                      >.
                    </p>

                    <a name="8"></a>
                    <br />
                    <p>
                      8. ZMIANY NINIEJSZEJ UMOWY<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      UWAGA: w stosunku do użytkowników posiadających miejsce
                      zamieszkania w Niemczech, zastosowanie ma inna wersja
                      Sekcji 8, która jest dostępna
                      <a
                        style="text-decoration: underline"
                        href="http://store.steampowered.com/subscriber_agreement_de/"
                        >tutaj</a
                      >.
                    </p>
                    <br />
                    <p>A. Zmiana Za Porozumieniem Stron</p>
                    <br />
                    <p>
                      Niniejsza Umowa może zostać w dowolnym momencie zmieniona
                      za porozumieniem stron poprzez udzielenie przez
                      Użytkownika wyraźnej zgody na zmiany zaproponowane przez
                      Valve.
                    </p>
                    <br />
                    <p>B. Zmiana Jednostronna</p>
                    <br />
                    <p>
                      Ponadto Valve może jednostronnie zmienić niniejszą Umowę
                      (w tym wszelkie Warunki Subskrypcji lub Zasady
                      Korzystania) w dowolnym momencie według własnego uznania.
                      W takim przypadku Użytkownik zostanie powiadomiony o
                      każdej zmianie niniejszej Umowy dokonanej przez Valve
                      pocztą elektroniczną, na co najmniej 30 dni przed datą
                      wejścia w życie zmiany. Z treścią Umowy można zapoznać się
                      w dowolnym momencie na stronie
                      <a target="_new" href="http://www.steampowered.com/"
                        >http://www.steampowered.com/</a
                      >. Nieusunięcie przez Użytkownika swojego Konta przed datą
                      wejścia w życie zmiany będzie oznaczać akceptację
                      zmienionych warunków. Jeśli Użytkownik nie wyraża zgody na
                      zmianę bądź którekolwiek z postanowień niniejszej Umowy,
                      jedynym przysługującym mu środkiem prawnym jest zamknięcie
                      Konta Steam lub zaprzestanie korzystania z jednej albo
                      większej liczby Subskrypcji, których to dotyczy. Valve nie
                      ma obowiązku zwrotu jakichkolwiek opłat, które mogły
                      zostać naliczone na Koncie Użytkownika przed usunięciem
                      jego Konta lub przed zaprzestaniem korzystania z
                      jakiejkolwiek Subskrypcji. Valve nie ma również obowiązku
                      proporcjonalnego naliczania jakichkolwiek opłat w takich
                      okolicznościach.
                    </p>

                    <a name="9"></a>
                    <br />
                    <p>
                      9. OKRES OBOWIĄZYWANIA I ROZWIĄZANIE UMOWY<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>A. Okres Obowiązywania Umowy</p>
                    <br />
                    <p>
                      Okres obowiązywania niniejszej Umowy („Okres
                      Obowiązywania”) rozpoczyna się w dniu, w którym Użytkownik
                      po raz pierwszy wyrazi akceptację niniejszych postanowień
                      i będzie trwał do momentu jego zakończenia w jakikolwiek
                      sposób zgodny z postanowieniami niniejszej Umowy.
                    </p>
                    <br />
                    <p>B. Rozwiązanie Umowy Przez Użytkownika</p>
                    <br />
                    <p>
                      Użytkownik może usunąć swoje Konto w dowolnym momencie.
                      Użytkownik może zaprzestać korzystania z Subskrypcji w
                      dowolnym momencie albo, jeśli tak zdecyduje, może zwrócić
                      się do Valve o zaprzestanie udostępniania mu Subskrypcji.
                      Subskrypcji nie można jednak przenieść, a nawet w
                      przypadku zaprzestania udostępniania Subskrypcji dla
                      konkretnej gry lub aplikacji, oryginalny klucz aktywacyjny
                      nie będzie mógł zostać zarejestrowany na innym koncie,
                      nawet jeśli Subskrypcja została uzyskana w sprzedaży
                      detalicznej. Nie można zaprzestać udostępniania
                      Subskrypcji zamówionych w ramach pakietu lub zestawu
                      oddzielnie, zaprzestanie udostępniania jednej z gier w
                      zestawie będzie skutkować zaprzestaniem udostępniania
                      wszystkich gier zamówionych w pakiecie. Usunięcie Konta
                      lub zaprzestanie korzystania z jakiejkolwiek Subskrypcji
                      lub żądanie anulowania dostępu do Subskrypcji nie uprawnia
                      Użytkownika do zwrotu, w tym zwrotu jakichkolwiek opłat za
                      Subskrypcję. Valve zastrzega sobie prawo do pobrania
                      opłat, opłat dodatkowych lub kosztów poniesionych przed
                      usunięciem Konta Użytkownika lub zaprzestaniem
                      udostępniania określonej Subskrypcji. Ponadto Użytkownik
                      ponosi odpowiedzialność za wszelkie opłaty naliczone przez
                      dostawców zewnętrznych lub dostawców treści przed
                      zaprzestaniem udostępniania.
                    </p>
                    <br />
                    <p>C. Rozwiązanie Umowy Przez Valve</p>
                    <br />
                    <p>
                      Valve może ograniczyć lub anulować Konto Użytkownika lub
                      każdą konkretną Subskrypcję w dowolnym momencie w
                      przypadku, (a) gdy Valve generalnie zaprzestanie
                      udostępniać takie Subskrypcje Użytkownikom w podobnej
                      sytuacji albo (b) gdy Użytkownik naruszy jakiekolwiek
                      postanowienia niniejszej Umowy (w tym wszelkie Warunki
                      Subskrypcji lub Zasady Korzystania). W przypadku
                      ograniczenia, zamknięcia bądź anulowania Konta Użytkownika
                      lub konkretnej Subskrypcji przez Valve z powodu naruszenia
                      postanowień niniejszej Umowy lub niewłaściwych lub
                      niezgodnych z prawem działań, nie przyznaje się zwrotu
                      środków, w tym opłat za Subskrypcję lub niewykorzystanych
                      środków w Portfelu Steam.
                    </p>
                    <br />
                    <p>D. Dalsze Obowiązywanie Postanowień Umowy</p>
                    <br />
                    <p>
                      Postanowienia Sekcji 2.C., 2.D., 2.F., 2.G., 3.A., 3.B.,
                      3.D., 3.H. i 5–11 pozostaną w mocy po wygaśnięciu lub
                      rozwiązaniu niniejszej Umowy.
                    </p>

                    <a name="10"></a>
                    <br />
                    <p>
                      10. PRAWO WŁAŚCIWE/ KOSZTY REPREZENTACJI PRAWNEJ<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      Większość wątpliwości użytkowników można wyjaśnić
                      korzystając z naszej strony wsparcia Steam pod adresem
                      <a target="_new" href="https://support.steampowered.com/"
                        >https://support.steampowered.com/</a
                      >. Jeśli Valve nie jest w stanie wyjaśnić wątpliwości
                      Użytkownika, a pomiędzy Użytkownikiem a Valve nadal
                      istnieje spór, w niniejszej Sekcji wyjaśniono, w jaki
                      sposób strony zgodziły się go rozwiązać.
                    </p>
                    <br />
                    <p>
                      Informacja Dla Wszystkich Użytkowników Spoza Unii
                      Europejskiej i Zjednoczonego Królestwa:
                    </p>
                    <br />
                    <p>
                      Użytkownik i Valve uzgadniają, że niniejsza Umowa zostanie
                      uznana za sporządzoną i zawartą w stanie Waszyngton w
                      Stanach Zjednoczonych i prawo stanu Waszyngton, z
                      wyłączeniem norm kolizyjnych oraz Konwencji o Umowach
                      Międzynarodowej Sprzedaży Towarów, reguluje wszelkie spory
                      i roszczenia wynikające lub związane z: (i) dowolnym
                      aspektem relacji pomiędzy Użytkownikiem i Valve; (ii)
                      niniejszą Umową; bądź (iii) korzystaniem przez Użytkownika
                      z serwisu Steam, Konta Użytkownika lub Treści i Usług.
                      Użytkownik i Valve uzgadniają, że wszelkie spory i
                      roszczenia pomiędzy Użytkownikiem i Valve (w tym wszelkie
                      spory i roszczenia, które powstały przed wejściem w życie
                      niniejszej lub jakiejkolwiek wcześniejszej umowy) będą
                      dochodzone wyłącznie w dowolnym, właściwym przedmiotowo
                      sądzie stanowym lub federalnym zlokalizowanym w hrabstwie
                      King w stanie Waszyngton. Użytkownik i Valve niniejszym
                      wyrażają zgodę, że te sądy będą sądami wyłącznie
                      właściwymi, i zrzekają się podnoszenia zarzutów
                      dotyczących niewłaściwości osobowej lub miejscowej w
                      takich sądach.
                    </p>
                    <br />
                    <p>
                      Jeśli w kraju zamieszkania Użytkownika obowiązują inne
                      sposoby rozwiązywania sporów, Użytkownik może z nich
                      skorzystać. Jeśli Użytkownik jest konsumentem mieszkającym
                      w Rosji, w celu rozstrzygnięcia sporu może skorzystać z
                      usług lokalnych rosyjskich sądów państwowych.
                    </p>
                    <br />
                    <p>
                      Informacja dla Użytkowników z UE i Zjednoczonego
                      Królestwa:
                    </p>
                    <br />
                    <p>
                      Niniejsza Umowa podlega prawu kraju, w którym Użytkownik
                      posiada miejsce zwykłego pobytu.
                    </p>
                    <br />
                    <p>
                      W przypadku wystąpienia sporu dotyczącego wykładni,
                      wykonania lub ważności Umowy Użytkownika, przed podjęciem
                      jakichkolwiek kroków prawnych można dążyć do polubownego
                      rozwiązania sporu. Reklamację można złożyć na stronie
                      <a
                        style="text-decoration: underline"
                        href="http://help.steampowered.com"
                        >http://help.steampowered.com</a
                      >. Komisja Europejska udostępnia konsumentom z UE
                      platformę internetowego rozstrzygania sporów, która
                      znajduje się pod adresem
                      <a
                        style="text-decoration: underline"
                        href="https://ec.europa.eu/consumers/odr"
                        >https://ec.europa.eu/consumers/odr</a
                      >. W tej platformie nie mogą uczestniczyć firmy
                      amerykańskie, dlatego Valve nie jest tam zarejestrowana.
                      Jednak w takim zakresie, w jakim skarga dotyczy
                      postępowania przedstawiciela Valve ds. ochrony danych w
                      firmie Valve GmbH, można złożyć tam skargę.
                    </p>
                    <br />
                    <p>
                      W przypadku, gdy procedura alternatywnego rozstrzygania
                      sporów nie przyniesie rezultatu lub jeśli Valve lub
                      Użytkownik postanowi nie skorzystać z alternatywnych metod
                      rozstrzygania sporu, Użytkownik może wszcząć postępowanie
                      przed sądem właściwym dla swojego miejsca zamieszkania.
                    </p>

                    <a name="11"></a>
                    <br />
                    <p>
                      11. POSTANOWIENIA RÓŻNE<a
                        href="#0"
                        style="text-decoration: none"
                        ><small style="color: #666"> ⏶</small></a
                      >
                    </p>
                    <br />
                    <p>
                      W przypadku, gdy którekolwiek z postanowień niniejszej
                      Umowy zostanie uznane przez sąd za niezgodne z prawem lub
                      niewykonalne, takie postanowienie będzie egzekwowane w
                      maksymalnym dopuszczalnym zakresie, a pozostałe
                      postanowienia niniejszej Umowy pozostaną w mocy.
                    </p>
                    <br />
                    <p>
                      Niniejsza Umowa, w tym wszelkie Warunki Subskrypcji,
                      Zasady Korzystania, Polityka Prywatności Valve i Polityka
                      Ograniczonej gwarancji na Sprzęt Valve, stanowi i zawiera
                      całość porozumienia między stronami w odniesieniu do
                      przedmiotu niniejszej Umowy i zastępuje wszelkie
                      wcześniejsze umowy zawarte w formie ustnej bądź pisemnej.
                      Użytkownik wyraża zgodę na to, że niniejsza Umowa nie ma
                      na celu przyznania i nie przyznaje jakichkolwiek praw ani
                      środków prawnych jakiejkolwiek innej osobie niż strony
                      niniejszej Umowy.
                    </p>
                    <br />
                    <p>
                      Obowiązki Valve podlegają obowiązującym przepisom i
                      procedurom prawnym, a Valve może być zobowiązana do
                      wykonywania poleceń organów ścigania lub wymogów
                      regulacyjnych niezależnie od jakichkolwiek odmiennych
                      postanowień Umowy.
                    </p>
                    <br />
                    <p>
                      Użytkownik zobowiązuje się przestrzegać wszystkich
                      obowiązujących przepisów i regulacji dotyczących importu
                      lub eksportu. Użytkownik zobowiązuje się nie eksportować
                      Treści i Usług i Sprzętu ani nie zezwalać na korzystanie z
                      Konta przez osoby pochodzące z krajów wspierających
                      terroryzm, do których eksport produktów i usług
                      obejmujących technologie szyfrowania jest w momencie ich
                      wywozu ograniczony przez amerykańskie Federalne Biuro
                      Administracji Eksportu. Użytkownik zapewnia i gwarantuje,
                      że nie znajduje się na terenie takiego objętego
                      restrykcjami kraju ani pod jego kontrolą oraz że nie jest
                      obywatelem lub rezydentem takiego kraju.
                    </p>
                    <br />
                    <p>
                      Niniejsza Umowa została ostatnio zaktualizowana w dniu 26
                      września 2024 r. („Data Aktualizacji”). Jeśli Użytkownik
                      posiadał status Użytkownika przed Datą Aktualizacji,
                      niniejsza Umowa zastępuje i wypiera wcześniej przez niego
                      zawartą umowę z Valve lub Valve SARL w dniu, w którym
                      wchodzi ona w życie zgodnie z postanowieniami Sekcji 8
                      powyżej.
                    </p>
                  </div>
                </div>
              </div>
              <label id="label_agree">
                <input type="checkbox" name="agree" required/>
                Mam ukończone 13 lat i akceptację warunki
                <a
                  href="https://store.steampowered.com/subscriber_agreement/"
                  target="_blank"
                  >Umowy użytkownika Steam
                </a>
                oraz
                <a
                  href="https://store.steampowered.com/privacy_agreement/"
                  target="_blank"
                  >Polityki prywatności Valve</a
                >.
              </label>
              <div class="button-container">
                <button type="submit" name="btn-continue">
                  <span>Kontynuuj</span>
                </button>
              </div>
              <?php if (!empty($error_message)): ?>
                <span style="color: red; margin: 0 auto">
                  <?php echo $error_message; ?>
                </span>
              <?php endif; ?>
            </div>
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
