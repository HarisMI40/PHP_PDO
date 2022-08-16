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
    
    <form action="proses_tambah.php" method="post" class="container">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="kelas" class="form-control" id="">
                <option value="1">12 RPL</option>
                <option value="2">11 RPL</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="simpan">
    </form>
</body>
</html>