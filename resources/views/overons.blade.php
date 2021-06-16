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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,body {
            padding: 10px;
            font-family: Roboto;
        }

        main {
            margin-top: 230px;
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

        .table {
            margin-top: 20%;
            padding-right: 50px;
            padding-left: 20px;
        }

        footer {
            text-align: center;
            background-color: lightgray;
            padding: 60px;
            margin: -20px;
            margin-top: 550px;
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
        <table class="table">
            <thead>
            <tr>
                <th scope="row">0</th>
                <th>Bericht naam</th>
                <th>Bericht</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Bericht 1</td>
                <td>Bericht 1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Bericht 2</td>
                <td>Bericht 2</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="text-left">
        <h2 class="subheaders-h2">OVER ONS</h2>
        <p>
            Wij zijn een bijen en hommel imkervereniging rond de Oegstgeest omgeving, De imkervereniging Oegstgeest
            en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Leimuiden en Alkemade. De
            imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun
            (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
        </p>
    </div>
</main>
<footer>
    <p>| 2021 Imkervereniging Oegstgeest © |</p>
</footer>
</body>
</html>
