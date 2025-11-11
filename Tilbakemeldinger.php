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
  <section id="testimonial" class="testimonial-section">
        <h2>Tilbakemeldinger</h2>
        <div class="hr"></div>
        <div class="slider__wrapper">
            <div class="buttons">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
            <div class="slider">
                <div class="slides">
                    <!-- Слайд 1 -->
                    <div class="slide active">
                        <div class="image-wrapper">
                            <img src="res/img/Tilbakemeldinger_2.webp" alt="">
                            <div class="quote-icon">❝</div>
                        </div>
                        <p class="text">
                            Koret har blitt en fantastisk måte å gjenopprette forbindelsen med røttene mine på. Læreren
                            er
                            fantastisk, og barna mine har fått gode venner.
                        </p>
                        <div class="stars">★★★★★</div>
                        <h3 class="name">ANNA</h3>
                    </div>

                    <!-- Слайд 2 -->
                    <div class="slide">
                        <div class="image-wrapper">
                            <img src="res/img/Tilbakemeldinger_1.webp" alt="">
                            <div class="quote-icon">❝</div>
                        </div>
                        <p class="text">
                            Sønnen min gleder seg alltid til korøvelsene. I tillegg til å utvikle sangferdighetene hans,
                            har
                            vi funnet mennesker her som det er hyggelig å tilbringe tid med også utenfor koret. En
                            trivelig
                            og samlende atmosfære.
                        </p>
                        <h3 class="name">LILE</h3>
                        <span class="role">Mamma til Petro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
   include("component/footer.php")
   ?>

</body>

</html>