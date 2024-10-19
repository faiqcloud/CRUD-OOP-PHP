<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Tambah Data</h4>
        <hr class = "mt-0">
        <!-- form input data -->
        <form method = "POST" action = "prosses.php?aksi=tambah" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name = "nama" require>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name = "alamat">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">Nohp</label>
            <input type="text" class="form-control" id="nohp" name = "nohp">
        </div>
        <div class="mb-3">
          <label for="jnskelamin" class="form-label">Jenis kelamin</label>
        <select class="form-select" aria-label="Default select example" name = "jnskelamin" id = "jnskelamin">
          <option selected>pilih jenis kelamin</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Tambahkan Foto Anda</label>
          <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary" onclick='return confirm("Apakah Anda yakin ingin menambah data ini?");'>Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>