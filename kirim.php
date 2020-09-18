<?php
// $json = file_get_contents('php://input');

// $data = json_decode($json, true);
// var_dump($data);
include 'template/header.php'
?>
    <title>POST</title>
  </head>
    <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
            <h1>METHOD POST REST API</h1>
                <form action="api.php" method="POST" enctype='application/json'>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Input JSON Body</label>
                    <textarea name="json" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="kirim" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>



<?php

include 'template/footer.php'

?>