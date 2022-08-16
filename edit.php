<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
$query = $db->query("select * from siswa where id=$id");
$data = $query->fetch();
?>
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
    <form action="proses_edit.php" method="post" class="container">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
            <label  class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select class="form-control" name="kelas" id="">
                <option value="1" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                <option value="2" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="simpan">
    </form>
</body>
</html>