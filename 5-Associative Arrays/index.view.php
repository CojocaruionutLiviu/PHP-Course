<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP HTML</title>
<body>
<ul>
<?php foreach($person as $feature => $val) : ?>
<li><strong><?= $feature?></strong> : <?= $val; ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>