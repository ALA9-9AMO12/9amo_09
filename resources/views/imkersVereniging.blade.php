@extends('app')
    @section('title', 'Imkers Vereniging')
    @section('content')
    <style>
        html,body {
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
    </style>
    <main>
    <div class="text-right">
        <table class="table">
            <thead>
            <tr>
                <th><?php $sql="SELECT added_on FROM artikelen ORDER BY added_on ASC LIMIT 1;" ?></th>
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

        <p> DISCLAIMER: U kunt helaas geen lidmaatschap meer aanvragen, u kunt nog wel <a>doneren</a> </p>

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
    @endsection
