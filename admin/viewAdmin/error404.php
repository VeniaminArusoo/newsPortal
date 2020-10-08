<?php ob_start() ?>
<h2>404 ERROR</h2>
<article>
	<h3>404 ошибка - что это такое?</h3>
	<p>По запрашиваему URL страница не найдена</p>
</article>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php";