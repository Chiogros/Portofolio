<?php

$pages = array(
	["Home", "homepage.php"],
	["Projects", "projects.php"],
	["Curriculum Vitæ", "cv.php"]
);

?>

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/algorithm.css">
<nav>
	<ul>
		<?php
		foreach ($pages as $page) { ?>
			<li><a href="<?= $page[1] ?>"><?= $page[0] ?></a></li>
		<?php } ?>
	</ul>
</nav>
			 <script>
			 console.log("Alexandrium atomic number")
			 </script>
