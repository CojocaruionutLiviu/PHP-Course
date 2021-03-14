<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP HTML</title>
<body>
<h1>Task for the day</h1>

  <ul>
    <li>
      <strong>Name: </strong> <?= $tasks['title']; ?>
    </li>
    <li>
      <strong>Due Date: </strong> <?= $tasks['due']; ?>
    </li>
    <li>
      <strong>Responsible: </strong> <?= $tasks['assignded_to']; ?>
    </li>
    <li>
      <strong>Status: </strong> <?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
  </ul>
</body>
</html>