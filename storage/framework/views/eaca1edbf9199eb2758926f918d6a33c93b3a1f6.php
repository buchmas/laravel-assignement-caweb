

<?php $__env->startSection('main'); ?>
	<div class="task-list">
		
				<h1><strong>Task <?php echo e($task->id); ?> : <?php echo e($task->title); ?></strong></h1>
				<ul>
		<li><?php echo e($task->description); ?></li>
		<li><?php echo e($task->created_at->isoFormat('Do MMMM YY')); ?></li>
		</ul>	
		
	</div>

	<button><a href="/tasks/{task}/delete">Delete this task</a></button> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\buchmann\Documents\assessment-laravel-install\laravel-test-version\resources\views/task.blade.php ENDPATH**/ ?>