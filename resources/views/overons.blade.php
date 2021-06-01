<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,body {
            padding: 10px;
        }

        main {
            padding-top: 60px;
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
            background-color: dodgerblue;
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
            .header-right {
                float: none;
            }
        }

        .subheaders-h2 {
            text-align: center;
        }

        main {
            padding-left: 30px;
            padding-right: 30px;
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
    <h2 class="subheaders-h2">HET HOUDEN VAN BIJEN!</h2>
    <p>De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Leimuiden
        en Alkemade. De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van
        bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
    </p>
    <br>
    <h2 class="subheaders-h2">Onze activiteiten</h2>
    <p>
        - Het geven van cursussen over het houden van bijen (zie de pagina ‘basiscursus‘)
        - Het organiseren van lezingen op informatieavonden voor de beginnende imkers
        - Wij stellen beginnende imkers in de gelegenheid om informatie te krijgen van ervaren imkers tijdens informatieavonden en ochtenden, zoals ‘de imkerhoek’
        - Wij versturen  interessante artikelen over het houden van bijen (zie de pagina artikelen)
    </p>
</main>
<footer>

</footer>
</body>
</html>
