<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

test

<br>
<ul>
<?php foreach ($users as $user): ?>
<li><?= $user->getName(); ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>