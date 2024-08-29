<?php
// rekursif tak terbatas
// function tampilkanHaloDunia()
// {
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();


// rekursif 1-20
// function tampilkanAngka(int $jumlah, int $indeks = 1){
//     echo "Perulangan ke-{$indeks} <br>";

//     if($indeks < $jumlah){
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }

// tampilkanAngka(20);


// menu bertingkat
// $menu = [
//     [
//         "nama"=> "Bercanda"
//     ],
//     [
//         "nama"=>"Berita",
//         "subMenu" =>[
//             [
//                 "nama" =>"Wisata",
//                 "subMenu"=>[
//                     [
//                         "nama"=>"pantai"
//                     ],
//                     [
//                         "nama"=>"gunung"
//                     ]
//                 ]
//             ],
//             [
//                 "nama"=>"kuliner"
//             ],
//             [
//                 "nama"=>"hiburan"
//             ]
//         ]
//     ],
//     [
//         "nama"=>"Tentang"
//     ],
//     [
//         "nama" => "kontak"
//     ],
// ];

// function tampilMenuBertingkat(array $menu)
// {
//     echo "<ul>";
//     foreach ($menu as $key => $item)
//     {
//         echo "<li>{$item['nama']}</li>";
//     }
//     echo "</ul>";
// }

// tampilMenuBertingkat($menu);


// menu bertingkat soal no 12
$menu = [
    [
        "nama"=> "Bercanda"
    ],
    [
        "nama"=>"Berita",
        "subMenu" =>[
            [
                "nama" =>"Wisata",
                "subMenu"=>[
                    [
                        "nama"=>"pantai"
                    ],
                    [
                        "nama"=>"gunung"
                    ]
                ]
            ],
            [
                "nama"=>"kuliner"
            ],
            [
                "nama"=>"hiburan"
            ]
        ]
    ],
    [
        "nama"=>"Tentang"
    ],
    [
        "nama" => "kontak"
    ],
];

function tampilMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']} ";
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilMenuBertingkat($menu);
?>