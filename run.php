<?php

$users = (new App\Model\Users)->getAll();

echo '<ul>';
foreach ($users as $key => $value) {
    echo '<li>'.$user['name'].'</li>';
}
echo '</ul>';