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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card" style="width:800px">
            <div class="card-body">
                <form action="proses_edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                        <input  class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
                    </div>
                    <div  class="mb-3"> 
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" id="kelas" class="form-select">
                            <option value="1" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                            <option value="2" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" value="Edit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>