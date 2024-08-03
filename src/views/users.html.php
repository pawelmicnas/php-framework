<?php
/**
 * @var \App\Entity\User[] $users
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>List of users</h3>
<ul>
<?php foreach ($users as $user): ?>
<li><?= $user->getName(); ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>