<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro in PDO</title>
<body>
<nav>
  <ul>
    <li><a href="./../views/contact.php">Contact Us</a></li>
  </ul>
  <ul>
    <li><a href="./../views/about.php">About Us</a></li>
  </ul>
</nav>
<!-- <h1>Intro in PDO</h1> -->
 <?php foreach ($tasks as $task) : ?>
    <li>
    <?php if ($task->completed) : ?>
      <strike><?= $task->description; ?></strike>
      <?php else : ?>
    <?= $task->description; ?>
    <?php endif; ?>
    </li>
    <?php endforeach;?>
</body>
</html>