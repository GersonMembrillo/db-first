<?php
$name = 'Gerry';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Database Info</title>
</head>

<body>

  <div class="container">
    <h1 class="text-uppercase">Database Info</h1>
    <table class="table ">
      <thead>
        <h2 class="text-center mb-0">Used Cars</h2>
        <hr class="mb-0">
        <tr>
          <th class="col-2">FK</th>
          <th class="col-10">id, auto_increment, INT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Brand VARCHAR(100)</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Model VARCHAR(100)</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Year SMALLINT</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Fuel type VARCHAR(100)</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Mileage MEDIUMINT</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Car body VARCHAR(100)</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Color VARCHAR(100)</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Seats TINYINT</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Doors TINYINT</th>
        </tr>
        <tr>
          <th class="col-2"></th>
          <th class="col-10 fw-normal">Price INT</th>
        </tr>

      </tbody>
    </table>
  </div>


  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>
  <script type="text/javascript" src="./js/utility.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>