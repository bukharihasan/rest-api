<?php
include 'template/header.php'
?>
    <title>GET</title>
  </head>
    <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
            <h1>METHOD GET REST API</h1>
            <form action="api.php" method="GET">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only"></label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Input id">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input type="text" name="id" placeholder="id">
                </div>
                <button type="submit" name="lihat" class="btn btn-primary mb-2">Submit</button>
            </form>
            </div>
        </div>
    </div>



<?php

include 'template/footer.php'

?>