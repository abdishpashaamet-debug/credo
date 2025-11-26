<?php
include("services/db.php");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
include("services/getauth.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/c927cf1132.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fons.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <?php
    include("component/nav.php")
    ?>

    <header class="header">
        <div class="img"></div>
        <article class="text">
            <h2>Det ukrainske barnekoret Credo</h2>
            <div class="hr"></div>
        </article>
    </header>

    <?php
    include("block/harmonienpa.php")
    ?>

    <?php
    include("block/vartmal.php")
    ?>

    <?php
    include("block/syngeg.php");
    ?>

    <?php
    include("block/oppdrageg.php");
    ?>

    <?php
    include("block/konserterg.php");
    ?>

    <?php
    include("block/Tilbakemeldignerg.php");
    ?>



    <section class="vare">
        <h2>Våre sponsorer</h2>
        <div class="hr m"></div>
        <div class="fw">
            <img src="res/img/vare_1.webp" alt="">
            <img src="res/img/vare_2.webp" alt="">
        </div>
    </section>

    <section class="contact">
        <h2>Kontakt</h2>
        <div class="hr"></div>

        <form class="contact-form">
            <div class="form-row">
                <input type="text" placeholder="Navn">
                <input type="text" placeholder="Telefonnummer">
                <input type="email" placeholder="E-postadresse">
            </div>
            <textarea placeholder="Melding"></textarea>
            <button type="submit">KONTAKT OSS</button>
        </form>

        <div class="contact-info">
            <div class="info-text">
                <p>Kolstadgata 1, 0652 Oslo, Norway</p>
                <p>📞 +47-46858384 - Anastasiia Boiko / leder</p>
                <p>📞 +47-96829613 - Larysa Smaga / dirigent</p>
                <p>✉️ barnekorcredo@gmail.com</p>
                <a href="https://www.facebook.com/share/1HJaHjHM7z/?mibextid=wwXIfr">
                    📘 Facebook
                </a><br>
                <a href="https://www.instagram.com/det_ukrainske_barnekoret_credo?igsh=MXZkOGJjYmRkYm92OQ==">
                    📸 Instagram
                </a>


            </div>
            <iframe src="https://www.google.com/maps?q=Kolstadgata%201%20Oslo&output=embed" loading="lazy"
                allowfullscreen></iframe>
        </div>
    </section>

    <section class="pricing">
        <h2>Pristabell</h2>
        <div class="hr m"></div>

        <div class="price-card">
            <div class="price-left">
                <h3>Semester, ett barn</h3>
                <p class="popular">MEST POPULÆR</p>
                <h1>kr 1000</h1>
                <p class="period">/6 måneder</p>
            </div>

            <div class="price-center">
                <p>Semesterbetaling for ett barn.</p>
            </div>

            <div class="price-right">
                <a href="card.php">
                    <button>BETALE NÅ</button>
                </a>
            </div>
        </div>

        <div class="price-card">
            <div class="price-left">
                <h3>Semester, søsken</h3>
                <p class="popular">MEST POPULÆR</p>
                <h1>kr 500</h1>
                <p class="period">/6 måneder</p>
            </div>

            <div class="price-center">
                <p>Semesterbetaling: 50% rabatt for hvert neste barn.</p>
            </div>

            <div class="price-right">
                <a href="card.php">
                    <button>ORDER NOW</button>
                </a>
            </div>
        </div>
    </section>


    <section class="container">
        <h1>Personvernerklæring</h1>
        <hr class="divider">

        <p>Denne personvernerklæringen gjelder for dette nettstedet og forklarer hvordan vi samler inn, bruker og
            behandler personopplysninger i forbindelse med billettsalg og henvendelser.</p>

        <h2>1. Behandlingsansvarlig</h2>
        <p>Det ukrainske barnekor Credo (heretter «Koret») er behandlingsansvarlig for personopplysningene som samles
            inn via nettstedet.</p>
        <p><strong>Kontaktinformasjon:</strong></p>
        <p>E-post: <a href="mailto:barnekorcredo@gmail.com">barnekorcredo@gmail.com</a><br>
            Adresse: Kolstadgata 1, 0652 Oslo, Norway</p>

        <h2>2. Hvilke opplysninger vi samler inn</h2>
        <p>Når du kjøper billetter eller kontakter oss via nettstedet, samler vi inn opplysninger som:</p>
        <ul>
            <li>Navn</li>
            <li>Telefonnummer</li>
            <li>E-postadresse</li>
            <li>Faktura-/leveringsadresse (ved behov for betaling/kvittering)</li>
        </ul>
        <p>Vi samler ikke inn sensitive personopplysninger eller opplysninger om barn via nettstedet.</p>

        <h2>3. Formål med behandlingen</h2>
        <p>Opplysningene brukes til å:</p>
        <ul>
            <li>Håndtere billettsalg og levere kvitteringer</li>
            <li>Kontakte kjøpere ved behov (f.eks. endringer i arrangement)</li>
            <li>Administrere forespørsler sendt via nettstedet</li>
            <li>Oppfylle lovpålagte krav til regnskap og bokføring</li>
        </ul>

        <h2>4. Rettslig grunnlag</h2>
        <p>Behandlingen skjer på grunnlag av:</p>
        <ul>
            <li>GDPR art. 6 nr. 1 b (nødvendig for å oppfylle en avtale – billettkjøp)</li>
            <li>GDPR art. 6 nr. 1 c (nødvendig for å oppfylle lovpålagte plikter, f.eks. bokføring)</li>
        </ul>

        <h2>5. Lagring og sletting</h2>
        <p>Personopplysninger lagres så lenge det er nødvendig for formålet:</p>
        <ul>
            <li>Kjøpsinformasjon lagres i henhold til regnskapsloven i inntil 5 år.</li>
            <li>Kontaktopplysninger slettes eller anonymiseres når de ikke lenger er nødvendige.</li>
        </ul>

        <h2>6. Deling av opplysninger</h2>
        <p>Vi deler ikke personopplysninger med tredjeparter, unntatt:</p>
        <ul>
            <li>Tekniske tjenesteleverandører (Site123, betalingsformidler) som leverer nødvendig infrastruktur</li>
            <li>Offentlige myndigheter når det kreves ved lov</li>
        </ul>
        <p>Alle tredjepartsleverandører er underlagt databehandleravtaler og behandler opplysningene kun etter instruks
            fra Koret.</p>

        <h2>7. Informasjonskapsler (cookies)</h2>
        <p>Nettstedet bruker informasjonskapsler (cookies) for å sikre funksjonalitet og statistikk. Du kan administrere
            eller deaktivere cookies i nettleseren din.</p>

        <h2>8. Dine rettigheter</h2>
        <p>Du har rett til å:</p>
        <ul>
            <li>Be om innsyn i opplysningene vi har om deg</li>
            <li>Be om retting eller sletting av opplysninger</li>
            <li>Be om begrensning av behandlingen</li>
            <li>Protestere mot behandlingen</li>
            <li>Få utlevert dataene dine (dataportabilitet)</li>
        </ul>
        <p>Forespørsler sendes til <a href="mailto:barnekorcredo@gmail.com">barnekorcredo@gmail.com</a>.</p>

        <h2>9. Endringer i erklæringen</h2>
        <p>Vi kan oppdatere denne personvernerklæringen ved behov. Ny versjon publiseres alltid på nettstedet.</p>
        </main>
    </section>

    <?php
    include("component/footer.php");
    ?>
</body>

</html>