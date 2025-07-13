<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Steyaert Bikes - Uw specialist in kwaliteitsfietsen!">
    <meta name="keywords" content="fietsen, accessoires, onderdelen, hersteldienst, Steyaert Bikes, Humbeek">
    <meta name="author" content="Kevin Verherstraeten - Scriptwave">
    
    <title>Steyaert Bikes</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/scrollTo.js" defer></script>
</head>

<body>

    <!-- HEADER -->
    <header>
        <img src="img/steyaert_bikes.png" alt="Steyaert Bikes Logo" id="logo">
        <nav>
            <button onclick="scrollToSection('home')">Home</button>
            <button onclick="scrollToSection('fietsen')">Fietsen</button>
            <button onclick="scrollToSection('accessoires')">Accessoires</button>
            <button onclick="scrollToSection('onderdelen')">Onderdelen</button>
            <button onclick="scrollToSection('hersteldienst')">Hersteldienst</button>
            <button onclick="scrollToSection('openingsuren')">Openingsuren</button>
            <button onclick="scrollToSection('contact')">Contact</button>
        </nav>
    </header>

    <!-- HOME -->
    <section id="home">
        <p>Uw specialist in kwaliteitsfietsen!</p>
        <p>Na het afronden van mijn avondschool kon ik begin 2010 eindelijk starten met wat mijn passie is: mijn eigen fietsatelier.</p>
        <p>Na twee jaar vond ik de tijd rijp om een volwaardige fietswinkel te beginnen in Humbeek. De kans deed zich al snel voor en zo werd Steyaert Bikes geboren.</p>
        <p>Om mijn klanten nog beter van dienst te zijn, ben ik gestart met deze website. Hier vindt u onze contactgegevens, openingsuren en de verschillende merken fietsen die wij aanbieden.</p>
        <p>Nieuwe fietsen worden altijd na een grondige controle afgeleverd. Bij aankoop van een nieuwe fiets is een eerste gratis controle inbegrepen.</p>
        <p>U kunt bij mij terecht voor <strong>alle</strong> herstellingen, ook van merken die ik zelf niet verdeel. Daarnaast bied ik ook een eigen leveringsdienst aan huis.</p>
    </section>

    <!-- FIETSEN -->
    <section id="fietsen">
        <h2>Fietsen</h2>
        <p>Bij Steyaert Bikes kan u terecht voor een brede waaier van merken en modellen zoals koersfietsen, mountainbikes, stadsfietsen, kinderfietsen en zelfs elektrische fietsen.</p>
        
        <div class="all_brands_bicycles" role="list">
            <a href="https://granvillebikes.com/" class="brand_bicycle">
                <div class="logo_bicycle">
                    <img src="img/bikkelbikes.svg" alt="Bikkel Bikes logo" loading="lazy" />
                </div>
                <h6>Bikkel Bikes</h6>
            </a>

            <a href="dahon.html" class="brand_bicycle">
                <div class="logo_bicycle">
                    <img src="img/dahon.png" alt="Dahon logo" loading="lazy" />
                </div>
                <h6>Dahon</h6>
            </a>

            <a href="granville.html" class="brand_bicycle">
                <div class="logo_bicycle">
                    <img src="img/granville.png" alt="Granville logo" loading="lazy" />
                </div>
                <h6>Granville</h6>
            </a>

            <a href="sensa.html" class="brand_bicycle">
                <div class="logo_bicycle">
                    <img src="img/sensa.png" alt="Sensa logo" loading="lazy" />
                </div>
                <h6>Sensa</h6>
            </a>
        </div>
    </section>

    <!-- ACCESSOIRES -->
    <section id="accessoires">
        <h2>Accessoires</h2>
        <ul>
            <li>Fietstassen</li>
            <li>Helmen</li>
            <li>Sloten</li>
            <li>Fietscomputers</li>
        </ul>
    </section>

    <!-- ONDERDELEN -->
    <section id="onderdelen">
        <h2>Onderdelen</h2>
        <p>Wij bieden een breed scala aan fietsonderdelen, waaronder:</p>
        
        <div class="all_brands" role="list">
            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/campagnolo.svg" alt="Campagnolo logo" loading="lazy" />
                </div>
                <h6>Campagnolo</h6>
            </div>

            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/continental.svg" alt="Continental logo" loading="lazy" />
                </div>
                <h6>Continental</h6>
            </div>

            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/michelin.svg" alt="Michelin logo" loading="lazy" />
                </div>
                <h6>Michelin</h6>
            </div>

            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/schwalbe.svg" alt="Schwalbe logo" loading="lazy" />
                </div>
                <h6>Schwalbe</h6>
            </div>

            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/shimano.svg" alt="Shimano logo" loading="lazy" />
                </div>
                <h6>Shimano</h6>
            </div>

            <div class="brand" role="listitem">
                <div class="logo">
                    <img src="img/sram.svg" alt="Sram logo" loading="lazy" />
                </div>
                <h6>Sram</h6>
            </div>
        </div>
    </section>

    <!-- HERSTELDIENST -->
    <section id="hersteldienst">
        <h2>Hersteldienst</h2>
        <p>Voor al uw fietsherstellingen kunt u bij ons terecht, ook als de fiets niet bij ons aangekocht is.</p>
        <p>Neem contact op of kom langs in de winkel.</p>
    </section>

    <!-- OPENINGSUREN -->
    <section id="openingsuren">
        <h2>Openingsuren</h2>

        <div class="week-opening">
            <h3>Week van 7 juli 2025</h3>
            <table class="openingstabel">
                <tbody>
                    <tr><td>Maandag - Vrijdag</td><td>17:00 - 19:00</td></tr>
                    <tr><td>Zaterdag</td><td>09:00 - 17:00</td></tr>
                    <tr><td>Zondag</td><td>Gesloten</td></tr>
                </tbody>
            </table>
        </div>

        <div class="week-opening">
            <h3>Week van 14 juli 2025</h3>
            <table class="openingstabel">
                <tbody>
                    <tr><td>Maandag</td><td>17:00 - 19:00</td></tr>
                    <tr><td>Dinsdag</td><td>16:00 - 19:00</td></tr>
                    <tr><td>Woensdag - Donderdag</td><td>17:00 - 19:00</td></tr>
                    <tr><td>Vrijdag</td><td>09:00 - 11:00</td></tr>
                    <tr><td>Zaterdag</td><td>09:00 - 17:00</td></tr>
                    <tr><td>Zondag</td><td>Gesloten</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <h2>Contacteer ons</h2>
        <form method="post" action="#">
            <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam"><br>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="bericht">Bericht:</label><br>
            <textarea id="bericht" name="bericht"></textarea><br>
            <input type="submit" value="Verstuur">
        </form>
    </section>

    <!-- TO TOP BUTTON -->
    <button class="iconbutton" aria-label="Scroll to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="30" height="30" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Steyaert Bikes. Alle rechten voorbehouden.</p>
        <p>Powered by <a href="https://www.scriptwave.be" target="_blank" rel="noopener noreferrer">Scriptwave</a></p>
        <nav>
            <a href="?page=privacy">Privacybeleid</a> |
            <a href="?page=terms">Gebruiksvoorwaarden</a>
        </nav>
    </footer>

</body>

</html>