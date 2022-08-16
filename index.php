<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<?php
 $db = new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
 $query = $db->query('select * from siswa');
?>
<a href="tambah.php" class="btn btn-primary mb-3">Tambah</a>
<ul class="list-group">
 
<?php

 while ($data = $query->fetch() ) :?>
    <li class="list-group-item d-flex justify-content-between"><a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>

        <a href="proses_hapus.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger ml-auto">Hapus</a>
        </li>
<?php endwhile ?>

</ul>
 </div>
</body>
</html>
