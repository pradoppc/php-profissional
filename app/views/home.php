
    <h2> Users </h2>
    <ul id="users-home">
        <?php foreach($users as $user): ?>
            <li><?php echo $user->no_usuario  ?> | <a href="/user/<?php echo $user->id_usuario ?>"> Detalhes </a></li>
        <?php endforeach; ?>
    </ul>
