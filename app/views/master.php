<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <title>Vaneth</title>
</head>
<body>

  <?php $this->insert('./partials/header') ?>
  
  <section class="container">
    <?=$this->section('content')?>
  </section>
  
  <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>