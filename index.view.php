<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
				<?php if($task->completed) : ?>
					<strike><?php echo $task->description ?></strike>
				<?php else: ?>
					<?php echo $task->description ?>
				<?php endif; ?>

			</li>
		<?php endforeach;?>
	</ul>

</body>
</html>