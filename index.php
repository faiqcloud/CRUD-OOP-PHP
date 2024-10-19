<?php
    include 'database.php';
    $db = new Database;
    $db->tampilData();
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <hr>
        <a href="input.php" class = "btn btn-success">Tambah data <i class="bi bi-plus-square"></i></a>
        <hr>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nohp</th>
            <th scope="col">Aksi</th>
            <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($db->tampilData() as $dataUser) {
            ?>
            <tr>
            <th scope="row"><?php echo $nomor++; ?></th>
            <td><?php echo $dataUser['nama']; ?></td>
            <td><?php echo $dataUser['alamat']; ?></td>
            <td><?php echo $dataUser['nohp']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $dataUser['id']?>"class ="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i> Edit</a>
                <a href="prosses.php?id=<?php echo $dataUser['id']?>&&aksi=hapus"class ="btn btn-danger btn-sm" onclick='return confirm("Apakah Anda yakin ingin menghapus data ini?");'><i class="bi bi-trash3"></i> Hapus</a>
            </td>
            <td>
              <a href="detail.php?id=<?php echo $dataUser['id']?>"class = "btn btn-info btn-sm"><i class="bi bi-card-text"></i> Detail</a>
            </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>