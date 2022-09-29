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

            <?php if(isset($_GET['error'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <p><?= $_GET['error'] ?></p>
                </div>
            <?php endif ?>

            <div class="card">
                <div class="card-body">
                    <form action="proses_register.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input  class="form-control" type="text" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input  class="form-control" type="password" id="password" name="password" required>
                        </div>
                        <input type="submit" value="simpan" class="btn btn-primary">
                    </form>   
                </div>
            </div>    
        </div>
    </body>
</html>