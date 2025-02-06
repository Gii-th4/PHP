<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    

    <style>
        .card {
            border-color: black;
        }
    </style>
</head>

<body>
<form action="data.php" method="POST">
<div class="container">
        <div class="col-9">
            <div class="card">
                <div class="card-header bg-primary text-white center" >
                    FORM KEAHLIAN
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Bahasa</label>
                        <input type="text" class="form-control" name="bhs">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kemahiran</label>
                        <input type="text" class="form-control" name="kemahiran">
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="sumbit" class="btn btn-success">Simpan</button>
                </div>

            </div>   
        </div>
    </div>    
</form>
    

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>