<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,body {
            padding: 10px;
            font-family: Roboto;
        }

        main {
            padding-top: 60px;
            padding-left: 15%;
            padding-right: 15%;
        }

        /* Style the header links */
        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        /* Change the background color on mouse-over */
        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the active/current link*/
        .header a.active {
            background-color: darkgoldenrod;
            color: white;
        }

        /* Float the link section to the right */
        .header-left {
            float: left;
        }

        /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-left {
                float: none;
            }
        }

        .subheaders-h2 {
            text-align: center;
        }

        .table-msg {
            padding: 0;
            margin: 0;
        }

        .text-left {
            margin-right: 20%;
            margin-top: -10%;
        }

        .text-right {
            margin-left: 80%;
            margin-top: -10%;
            background-color: antiquewhite;
        }

        .table-msg {
            margin-top: 20%;
        }

        footer {
            text-align: center;
            background-color: lightgray;
            padding: 60px;
            margin: -20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <a href="">Home</a>
            <a href="">Voor imkers  </a>
            <a href="">Cursussen</a>
            <a href="">Nieuwsarchief</a>
            <a href="">Artikelen </a>
            <a href="">Imkervereniging</a>
            <a href="">Contact</a>
            <a class="active" href="">Over Ons</a>
        </div>
    </div>
</header>
<main>
    <div class="text-right">
        <div class="table-msg">
            <p>MEEST RECENTE BERICHTEN</p>
            <p>Bericht 1</p>
            <p>――――――――</p>
            <p>Bericht 2</p>
            <p>――――――――</p>
            <p>Bericht 3</p>
            <p>――――――――</p>
            <p>Bericht 4</p>
            <p>――――――――</p>
            <p>Bericht 5</p>
        </div>
    </div>
    <div class="text-left">
        <h2 class="subheaders-h2">OVER ONS</h2>
        <p>De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Leimuiden
            en Alkemade. De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van
            bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
        </p>

        <br>
        <h2 class="subheaders-h2">LIDMAATSCHAP</h2>
        <p>
            De imkervereniging-Oegstgeest is aangesloten bij de landelijke Nederlandse Bijenhoudersvereniging. Met een
            lidmaatschap van de NBV bent u automatisch lid van één van de regio afdelingen. De NBV biedt u:
        </p>
        <p> - Belangenbehartiging van de imkerij in Nederland </p>

        <p>    - Uitvoerig bijenteeltonderwijs programma </p>

        <p>    - Zes keer per jaar ontvangst van het magazine BIJENhouden </p>

        <p>    - Maandelijks het digitale Imkernieuws; </p>

        <p>    - Wekelijks tips over het houden van bijen in het BijenBlog </p>

        <p>    - Korting op entree voor bijeenkomsten en activiteiten met de NBV ledenpas; </p>

        <p>    - Aanvullende <a href="https://www.bijenhouders.nl/over-de-nbv/verzekeringen">WA-verzekering</a> voor activiteiten die voortvloeien uit het houden van bijen; </p>

        <p>    - Voorlichtingsmateriaal t.b.v presentaties </p>

        <p>    - Verzekerd zijn van ondersteuning van collega imkers; </p>

        <p>    - Voor al uw vragen kunt u zich wenden tot het <a href="https://www.bijenhouders.nl/over-de-nbv/lidmaatschap#aanmeldformulier">verenigingssecretariaat in Wageningen</a>. </p>
        <br>
        <p>
            Informatie over contributie en een mogelijkheid tot aanmelding vindt u op de NBV website.
        </p>
        <br>
        <p>
            U kunt ook alleen donateur van de Oegstgeester Imkervereniging worden. Dat kunt u aanvragen via het
            contactformulier.
        </p>
    </div>
</main>
<footer>
    <p>| 2021 Imkervereniging Oegstgeest © |</p>
</footer>
</body>
</html>

