<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP HTML</title>
<body>
<h1>Functions</h1>
  <ul>
    <?php foreach ($animals as $animal):?>
    <li><?= $animal ;?></li>
     <?php endforeach ;?>
  </ul>
</body>
</html>