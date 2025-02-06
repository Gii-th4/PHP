<?php
include "db_flatfile.php";
$detail_bahasa = [];
$detail_bahasa = readData();


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bhs'], $_POST['kemahiran'])){
    $detail_bahasa[] =  [
        "bahasa" => $_POST['bhs'],
        "kemahiran" => $_POST['kemahiran'],
    ];

    saveData($detail_bahasa);
}

function saveData($payload){
    $fileCsv = 'target.csv';

    // Menulis data 
    $tulis = fopen($fileCsv, 'w');
    foreach ($payload as $row) {
        fputcsv($tulis, $row);
    }
    fclose($tulis); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="card mt-5">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahasa</th>
                            <th>Kemahiran</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($detail_bahasa as $key => $bhs){
                        ?>
                        <tr>
                            <td><?php echo ($key + 1)?></td>
                            <td><?php echo $bhs['bahasa'] ?></td>
                            <td><?php echo $bhs['kemahiran'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                        
                </table>
            </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>