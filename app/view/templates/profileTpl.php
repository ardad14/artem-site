    Просмотры профиля:
<?php
    fopen("count.txt", "r");
    $str = htmlentities(file_get_contents("count.txt"));
    echo $str;
?>
    (из них уникальные:
<?php
    fopen("countUnique.txt", "r");
    $str = htmlentities(file_get_contents("countUnique.txt"));
    echo $str;
?>)