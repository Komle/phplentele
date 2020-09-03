<?php
$date= date("Y/m/d");
$kodas = rand(666, 999);
$matematika = [5, 6, 7, 8, 9, 10, 7, 9, 6, 3];
$informatika = [8, 4, 6, 7, 8, 5, 10, 6, 4, 9];
$anglukalba = [6, 8, 3, 4, 5, 7, 3, 2, 4, 8];

$vidurkis = (($matematika[0] + $informatika[0] + $anglukalba[0]) / 3);
$vidurkis1 = (($matematika[1] + $informatika[1] + $anglukalba[1]) / 3);
$vidurkis2 = (($matematika[2] + $informatika[2] + $anglukalba[2]) / 3);
$vidurkis3 = (($matematika[3] + $informatika[3] + $anglukalba[3]) / 3);
$vidurkis4 = (($matematika[4] + $informatika[4] + $anglukalba[4]) / 3);
$vidurkis5 = (($matematika[5] + $informatika[5] + $anglukalba[5]) / 3);
$vidurkis6 = (($matematika[6] + $informatika[6] + $anglukalba[6]) / 3);
$vidurkis7 = (($matematika[7] + $informatika[7] + $anglukalba[7]) / 3);
$vidurkis8 = (($matematika[8] + $informatika[8] + $anglukalba[8]) / 3);
$vidurkis9 = (($matematika[9] + $informatika[9] + $anglukalba[9]) / 3);
$klase = ['mokinys1' => ['Klase' => '4a',
                         'Kodas' => $kodas,
                         'Vardas' => 'Antanas',
                         'Pavarde' => 'Beleka',
                         'Pazymiai' => $vidurkis,
                         'Data' => $date
         ],
         'mokinys2' => ['Klase' => '4b',
                         'Kodas' => $kodas,
                         'Vardas' => 'Kamanas',
                         'Pavarde' => 'beleka',
                         'Pazymiai' => $vidurkis1,
                         'Data' => $date
         ],
         'mokinys3' => ['Klase' => '4c',
                         'Kodas' => $kodas,
                         'Vardas' => 'HAmanas',
                         'Pavarde' => 'Patrikauskas',
                         'Pazymiai' => $vidurkis2,
                         'Data' => $date
         ],
         'mokinys4' => ['Klase' => '5a',
                         'Kodas' => $kodas,
                         'Vardas' => 'Janina',
                         'Pavarde' => 'Vaziuojam',
                         'Pazymiai' => $vidurkis3,
                         'Data' => $date
         ],
         'mokinys5' => ['Klase' => '5b',
                         'Kodas' => $kodas,
                         'Vardas' => 'Dzesika',
                         'Pavarde' => 'Vaziuojam',
                         'Pazymiai' => $vidurkis4,
                         'Data' => $date]
        ];