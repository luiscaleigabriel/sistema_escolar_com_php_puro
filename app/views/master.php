<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sistema de gestão escolar" />
  <meta name="keywords" content="Gestão escolar, LuiShool, Complexo escolar, site escolar" />
  <meta name="author" content="Luís Silvério Calei Gabriel; Email: luiscaleigabriel@gmail.com" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <title>LuiShool</title>
</head>
<body>

  <?php $this->insert('./partials/header') ?>
  
  <section class="container-fluid">
    <?=$this->section('content')?>
  </section>
  
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/script.js"></script>
</body>
</html>