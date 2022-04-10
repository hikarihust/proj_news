<?php
echo $title . $id;
echo "</br>";
$linkList = route($controllerName);
echo "</br>";
?>
<a href="<?php echo $linkList; ?>">List</a>
