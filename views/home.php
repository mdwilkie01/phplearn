<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
</head>
<body>
	<h1>PDO</h1>
	<?php foreach($tasks as $task) : ?>
		<p> <?= $task->description ?> </p>
	<?php endforeach; ?>
</body>
</html>