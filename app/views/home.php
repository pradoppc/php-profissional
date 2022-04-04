<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=(device-width), initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Users </h2>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?php echo $user->no_usuario  ?> | <a href="/user/<?php echo $user->id_usuario ?>"> Detalhes </a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>