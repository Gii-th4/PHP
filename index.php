<?php
    $bahasa = "JavaScript";
    $daftar_bahasa = [
        "Python",
        "Javascript",
        "PHP",
        "Java",
        "C"
    ];

    $array_assosiatif = [
        "bahasa" => "Python",
        "kemahiran" => 4,
    ];

    echo $array_assosiatif["bahasa"];

    $arr = [1,2,3,4,5];

    $arr2 = [
        ["a", "b"],
        ["c", "d"],
        ["e", "f"],
    ];

    $detail_bahasa = [
    [
        "bahasa" => "Python",
        "kemahiran" => 5,
    ],

    [
        "bahasa" => "Javascript",
        "kemahiran" => 2,
    ],

    [
        "bahasa" => "PHP",
        "kemahiran" => 3,
    ],

    [
        "bahasa" => "Java",
        "kemahiran" => 1,
    ],

    [
        "bahasa" => "C",
        "kemahiran" => 0,
    ],
    'isi'
];
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar  $bahasa" ?></title>
    </head>
    <body>
        <?php
            echo "saya sedang belajar PHP<br>";
            echo "<p>Belajar PHP hingga jadi master</p>";
        ?>

        <?php echo "saya sudah belajar " . count($daftar_bahasa) . " bahasa pemrograman" . "<br>"?>

        <?php
        for($i = 0; $i < count($daftar_bahasa); $i++){
            echo "Bahasa ke -" . ($i + 1 ) .  "saya adalah " . $daftar_bahasa[$i] . "<br>";
        }
        ?><br>

    <?php
    foreach ($detail_bahasa as $key => $item) {
        if ($detail_bahasa[$key]["kemahiran"] == 1){
            $kemahiran = "tidak bisa";
        }
        if ($detail_bahasa[$key]["kemahiran"] == 2){
            $kemahiran = "pemula";
        }
        if ($detail_bahasa[$key]["kemahiran"] == 3){
            $kemahiran = "cukup bisa";
        }
        if ($detail_bahasa[$key]["kemahiran"] == 4){
            $kemahiran = "cukup mahir";
        }
        if ($detail_bahasa[$key]["kemahiran"] == 5){
            $kemahiran = "sangat mahir";
        }

        if ($item["kemahiran"] == 0) {
            $kemahiran = "tidak mahir";
        } elseif ($item["kemahiran"] == 5) {
            $kemahiran = "sangat mahir";
        } else {
            $kemahiran = "cukup mahir";
        }
        echo "Bahasa ke-" .( $key + 1) . " saya adalah " . $item["bahasa"] . " dan saya " . $kemahiran . " menggunakannya.<br>";
  }
?>

    </body>
</html>