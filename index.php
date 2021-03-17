<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Анкета</title>
  <link rel="stylesheet" href="scc/style.css" />
  <link rel="stylesheet"
   href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
  <h3 class="mb-5">Summary</h3>
    <div class="d-flex flex-wrap">

      <?php
      for ($i =0; $i<6; $i++):
       ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">News</h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Learn more</button>
      </div>
    </div>
  <?php endfor; ?>
    </div>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>
