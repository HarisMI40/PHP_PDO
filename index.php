<?php
 $db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p><?= $data['nama'] ?> </p>
<?php endwhile ?>