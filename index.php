<?php
include "koneksi.php";
include "template/header.php";
?>

<title>REST API</title>
  </head>
    <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
            <h3>REST API STUDI KASUS</h3>
            <h4>Dibuat sebagai syarat untuk melakukan internship di LatihID sebagai Backend Developer</h4>
            <a type="button" href="lihat.php" class="btn btn-primary btn-lg btn-block">GET METHOD</a>
            <a type="button" href="kirim.php" class="btn btn-secondary btn-lg btn-block">POST METHOD</a>
            </div>
        </div>
    </div>


<?php
include "template/footer.php";
?>