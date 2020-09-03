<?php
ob_start();
?>
<br>
<?php
ViewsNews::ReadNews($n);
$content= ob_get_clean();
include_once 'view/layout.php';
?>

