<div class="cart--section ">
    <div class="container">
        <!-- Cart Items Start -->
        <div class="row mt-50" id="accordion">
            <div class="col-lg-12 sm-mt-30">
                <!-- Bethanie -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Bethanie',
                'description' => '',
                'id' =>"One",
                'active' =>"show",
                'web'=>'',
                'addenda' => '',
                'etoiles' => 1,
                'distance_cmp' => '3.5 Km',
                'distance_aeroport' => '24.8 Km',
                'telephone' => '',
                'email' => '',
                'items' => [
                [1, 'Chambre', 35.00, 10, 'On peut y loger 2 personnes'],
                [2, 'Appartement', 50.00, 1, 'On peut y loger 5 personnes'],
                [3, 'Dortoir', 10.00, 5, 'On peut y loger 20 personnes']
                ]
                ])

                <!-- Ligue pour la lecture de la bible -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Ligue pour la lecture de la bible',
                'description' => '',
                'web'=>'',
                 'id' =>"Two",
                'active' => '',
                'addenda' => '',
                'etoiles' => 1,
                'distance_cmp' => '5.3 Km',
                'distance_aeroport' => '23.3 Km',
                'telephone' => '',
                'email' => '',
                'items' => [
                [1, 'Dortoir', 20.00, 1, 'On peut y loger 1 à 10 personnes'],
                [2, 'Dortoir', 4.00, 1, 'On peut y loger 10 à 40 personnes'],
                [3, 'Dortoir', 2.00, 1, 'On peut y loger 50 personnes et plus']
                ]
                ])
                <!-- Relax Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Relax Hotel',
                'description' => 'Gare Centrale',
                'web'=>'https://www.booking.com/hotel/cd/relax.fr.html',
                'addenda' => '',
                'etoiles' => 3,
                'id' =>"Three",
                'active' => '',
                'distance_cmp' => '5.4 Km',
                'distance_aeroport' => '22.7 Km',
                'telephone' => '',
                'email' => '',
                'items' => [
                [1, 'Chambre eco', 95.00, '-', 'WiFi, salle de gym et petit déjeuner'],
                [2, 'Chambre standard', 120.00, '-', 'WiFi, salle de gym et petit déjeuner'],
                [3, 'Chambre de lux', 120.00, '-', 'WiFi, salle de gym et petit déjeuner'],
                [4, 'Une Suite', 180.00, '-', 'WiFi, salle de gym et petit déjeuner'],
                [5, 'Twin', 120.00, '-', '2 lits, WiFi, salle de gym et petit déjeuner'],
                ]
                ])

                <!-- Hotel Belle vie -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Hotel Belle vie',
                'description' => 'Gare Centrale',
                'web'=>'http://hotelbellevie.com/',
                'addenda' => '',
                'etoiles' => 3,
                'active' => '',
                'id' =>"For",
                'distance_cmp' => '5.3 Km',
                'distance_aeroport' => '23.3 Km',
                'telephone' => '+243976050000; +243896853997',
                'email' => 'hotelbelleviekinshasa@hotmail.com',
                'items' => [
                [1, 'Chambre standard', 100.00, '-', 'Petit déjeuner'],
                [2, 'Chambre semi-VIP', 130.00, '-', 'Petit déjeuner'],
                [3, 'Chambre VIP', 150.00, '-', 'Petit déjeuner'],
                [4, 'Chambre twin', 170.00, '-', 'Petit déjeuner'],
                ]
                ])
                <!-- Fortune Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Fortune Hotel',
                'description' => 'Gare Centrale',
                'web'=>'https://fr.hotels.com/ho1004976160/hotel-fortune-kinshasa-republique-democratique-du-congo/',
                'addenda' => '',
                'id' =>"Five",
                'etoiles' => 3,
                'active' => '',
                'distance_cmp' => '5.7 Km',
                'distance_aeroport' => '22.6 Km',
                'telephone' => '+243810004268',
                'email' => 'hotel_fortune@yahoo.com',
                'items' => [
                [1, 'Chambre standard', 100.00, '-', '-'],
                [2, 'Chambre semi-VIP', 130.00, '-', '-'],
                [3, 'Chambre VIP', 150.00, '-', '-'],
                [4, 'Chambre twin', 170.00, '-', '-'],
                ]
                ])

                <!-- Beatrice Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Beatrice Hotel',
                'description' => 'Gare Centrale',
                'web'=>'https://www.beatricehotel.com/#rooms',
                'addenda' => 'On peut faire la réduction pour plus de 5 chambres sur info@beatricehotel.com',
                'etoiles' => 4,
                'active' => '',
                'id' =>"Six",
                'distance_cmp' => '5.6 Km',
                'distance_aeroport' => '22.1 Km',
                'telephone' => '+243812535000',
                'email' => '',
                'items' => [
                [1, 'Chambre standard', '200/150', '-', '-'],
                [2, 'Chambre de lux', '230/180', '-', '-'],
                [3, 'Suite diplomatique', '1000/600', '-', '-']
                ]
                ])
                <!-- Leon Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Leon Hotel',
                'description' => 'Gare Centrale',
                'web'=>'http://www.leonhotel.cd/index.php/accomodation/chambre-standard/',
                'addenda' => 'Reduction de 10% pour plus de 5 chambres',
                'etoiles' => 3,
                'id' =>"Seven",
                'active' => '',
                'distance_cmp' => '5.2 Km',
                'distance_aeroport' => '22.7 Km',
                'telephone' => '+243822635778',
                'email' => 'bankimyjemima@gmail.com',
                'items' => [
                [1, 'Chambre standard', '150', '-', 'Petit déjeuner compris'],
                [2, 'Chambre de lux', '180', '-', '-'],
                [3, 'Chambre de grand luxe', '200', '-', '-'],
                [4, 'Suite diplomatique', '250', '-', '-']
                ]
                ])

                <!--  Hotel Memling -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Hotel Memling',
                'description' => '',
                'web' => 'https://www.memling.net',
                'addenda' => 'Reduction à partir de 5 nuits',
                'etoiles' => 5,
                'id' =>"heigth",
                'active' => '',
                'distance_cmp' => '5.0 Km',
                'distance_aeroport' => '23 Km',
                'telephone' => '+243817001111',
                'email' => '',
                'items' => [
                [1, 'Chambre standard', '180/160', '-', 'Wifi, piscine et salle de sport compris'],
                [2, 'Chambre standard double', '210/190', '-', 'Wifi, piscine et salle de sport compris'],
                [3, 'Suite diplomatique', '290/270', '-', 'Wifi, piscine et salle de sport compris']
                ]
                ])
                <!--  Sultani Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Sultani Hotel',
                'description' => 'https://www.sultanihotel.com/page/chambres-suites-hotel-kinshasa-rdc.html',
                'web'=>'',
                'addenda' => 'Reduction à partir de 5 nuits',
                'etoiles' => 4,
                'id' =>"Seven",
                'active' => '',
                'distance_cmp' => '2.6 Km',
                'distance_aeroport' => '24.4 Km',
                'telephone' => '+243897000113',
                'email' => '',
                'items' => [
                [1, 'Chambre standard', '150', '-', 'Petit déjeuner et Wifi compris'],
                [2, 'Suite junior', '200', '-', 'Petit déjeuner et Wifi compris']
                ]
                ])
                <!--  Hacienda Hotel -->
                @include('site.pages.bunda.logements.table', [
                'hotel_name' => 'Hacienda Hotel',
                'description' => '',
                'active' => '',
                'id' =>"Ten",
                'web'=>'https://www.tripadvisor.fr/Hotel_Review-s1-g294187-d11768129-Reviews-Hacienda_Hotel_Kinshasa-Kinshasa.html',
                'addenda' => 'Reduction de 10% à partir d’une semaine de séjour ',
                'etoiles' => 4,
                'distance_cmp' => '2.7 Km',
                'distance_aeroport' => '24.6 Km',
                'telephone' => '+243820004010',
                'email' => '',
                'items' => [
                [1, 'Chambre standard', '150', '-', 'Petit déjeuner +14$ si couple, Wifi'],
                [2, 'Suite junior', '200', '-', 'Petit déjeuner +14$ si couple, Wifi']
                ]
                ])


            </div>
            <!-- Cart Items End -->
        </div>
    </div>
</div>