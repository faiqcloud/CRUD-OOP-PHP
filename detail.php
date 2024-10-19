<?php
    include "database.php";
    $db = new Database;
    $detail = $db->editData($_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-center mt-3">
        <?php
    foreach ($detail as $dataUser) {
        ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="gambar gagal dimuat">
                    <p class="card-text"><small class="text-body-secondary"><?php  echo "Terakhir diubah: " . date("d M Y, H:i", filemtime(__FILE__)); ?></small></p>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Details data diri</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item ">
                                <span class="fw-bold">Nama:</span> 
                                <span><?php echo $dataUser['nama']; ?></span>
                            </li>
                            <li class="list-group-item ">
                                <span class="fw-bold">Jenis Kelamin:</span> 
                                <span><?php echo $dataUser['jenis_kelamin']; ?></span>
                            </li>
                            <li class="list-group-item ">
                                <span class="fw-bold">Alamat:</span> 
                                <span><?php echo $dataUser['alamat']; ?></span>
                            </li>
                            <li class="list-group-item ">
                                <span class="fw-bold">No HP:</span> 
                                <span><?php echo $dataUser['nohp']; ?></span>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    <div class="d-flex justify-content-center mt-3">
    <a href="../CRUD-OOP-PHP/" class= "btn btn-danger bi bi-box-arrow-left"> kembali</a>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>