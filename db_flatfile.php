<?php
//$fileSaya = fopen("target.csv", "r") or die ("Eror");
//echo fgets($fileSaya) .  "<br>";

//$data = file_get_contents(filename: "target.csv");
//$data_array = explode(',', $data);
//echo var_dump($data_array);
?>

<?php
// $file = fopen('target.csv', 'r');
// $detail_bahasa = [];

// while (!feof($file)) {
//     $row = fgets($file);
//     if (trim($row) !== '') { 
//         $row_terpisah = explode(',', $row);
//         $detail_bahasa[] = [
//             "bahasa" => $row_terpisah[0],
//             "kemahiran" => $row_terpisah[1],
//         ];
//     }
// }
// fclose($file);



function readData(){
    $file_name = 'target.csv';
    $detail_bahasa = [];
    $data = file_get_contents($file_name);
    $pisah_baris = explode("\n", $data);
    foreach ($pisah_baris as $row) {
        if(trim($row) === ''){
            continue;
        }
        $row_terpisah = explode(',', $row);
        $detail_bahasa[] = [
            "bahasa" => $row_terpisah[0],
            "kemahiran" => $row_terpisah[1],
        ];
    }

    return $detail_bahasa;
}
?>


<?php
// function saveData($payload){
//     $fileCsv = 'target.csv';

//     // Menulis data 
//     $tulis = fopen($fileCsv, 'a');
//     foreach ($payload as $row) {
//         fputcsv($tulis, $row);
//     }
//     fclose($tulis);

    //Membaca data 
    // if (file_exists($fileCsv)) {
    //     $handle = fopen($fileCsv, 'r');

    //     while (($row = fgetcsv($handle)) !== false) {
    //         print_r($row);
    //         echo "<br>";
    //     }

    //     fclose($handle);
    // } 
//}

// Memanggil fungsi saveData
// saveData("test");
?>



<?php
// $row =fgets($file);
// $row_terpisah = explode(',', $row);
// $detail_bahasa[] = $row_terpisah;

// $row =fgets($file);
// $row_terpisah = explode(',', $row);
// $detail_bahasa[] = $row_terpisah;

// $row =fgets($file);
// $row_terpisah = explode(',', $row);
// $detail_bahasa[] = $row_terpisah;


// echo "<pre />";
// var_dump($detail_bahasa);

// ?>


 <?php
//$fileTxt = "data.txt";
//$dataToWrite = "hai.\nkamu kangen?.";
//file_put_contents($fileTxt, $dataToWrite); 
//echo "Data berhasil ditulis ke $fileTxt<br>";

//if (file_exists($fileTxt)) {
//  $dataFromFile = file_get_contents($fileTxt);
//echo "Isi file $fileTxt:<br>";
//echo nl2br($dataFromFile); 
//} else {
//  echo "File $fileTxt tidak ditemukan.";
//}
// ?>




     <?php
    // $filename = 'target.csv';
    // $detail_bahasa = [];

    // if (file_exists($filename)) {
    //     $file = fopen($filename, 'r');
        
    //     while (($row = fgetcsv($file)) !== false) {
    //         $detail_bahasa[] = [
    //             'bahasa' => $row[0],
    //             'kemahiran' => $row[1]
    //         ];
    //     }

    //     echo "<pre />";
    //     var_dump($detail_bahasa);
        
    //     fclose($file);

       
    //     foreach ($detail_bahasa as $detail) {
    //         echo "Bahasa : " . $detail['bahasa'] . "<br>";
    //         echo "Kemahiran : " . $detail['kemahiran'] . "<br><br>";
    //     }
    // } else {
    //     echo "File $filename tidak ditemukan.<br>";
    // }
    // ?>



