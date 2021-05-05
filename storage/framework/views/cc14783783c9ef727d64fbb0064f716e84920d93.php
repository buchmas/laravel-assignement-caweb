

<?php $__env->startSection('title', 'List of Tasks'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
    <button><a href="/">Normal order</a></button>
		<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3><?php echo e($task->title); ?></h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/tasks/<?php echo e($task->id); ?>" class="card-footer-item">Show task ></a>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\buchmann\Documents\assessment-laravel-install\laravel-test-version\resources\views/index2.blade.php ENDPATH**/ ?>