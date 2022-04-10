<?php
    $linkList = route($controllerName);
    $linkAdd = route($controllerName . '/form');
    $linkEdit = route($controllerName . '/form', ['id'=>12]);
    $linkDelete = route($controllerName . '/delete', ['id'=>12]);
    $linkStatus = route($controllerName . '/status', ['id'=>123, 'status'=>'active']);

    echo "</br>";
    echo $linkList;
    echo "</br>";
    echo $linkAdd;
    echo "</br>";
    echo $linkEdit;
    echo "</br>";
    echo $linkDelete;
    echo "</br>";
    echo $linkStatus;
    echo "</br>";
?>

<a href="<?php echo $linkAdd ?>">Add</a>
