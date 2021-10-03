<?php

$elektronik = [
    ["Blender", 9, 4],
    ["Televisi", 22, 15],
    ["Kipas Angin", 13, 8, ],
];

echo "Jenis Elektronik = " . $elektronik[0][0] . "<br>";
echo "Stok = " . $elektronik[0][1] . "<br>";
echo "Terjual = " . $elektronik[0][2] . "<br><br>";

echo "Jenis Elektronik = " . $elektronik[1][0] . "<br>";
echo "Stok = " . $elektronik[1][1] . "<br>";
echo "Terjual = " . $elektronik[1][2] . "<br><br>";

echo "Jenis Elektronik = " . $elektronik[2][0] . "<br>";
echo "Stok = " . $elektronik[2][1] . "<br>";
echo "Terjual = " . $elektronik[2][2] . "<br><br>";

$elektronik = (object)[
    'jenis' => [
        'Blender', 'Televisi', 'Kipas Angin'
    ],
    'stok' => [
        9, 22, 13
    ],
    'terjual' => [
        4, 15, 8
    ]
];

echo "<pre>";
print_r($elektronik);
echo "<pre>";

?>