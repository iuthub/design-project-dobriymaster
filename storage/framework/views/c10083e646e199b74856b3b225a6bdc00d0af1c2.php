<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<?php echo e($members->name); ?>

			</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>

</body>
</html>