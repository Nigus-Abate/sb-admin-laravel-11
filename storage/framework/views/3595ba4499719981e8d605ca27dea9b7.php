<?php $__env->startSection('page_heading','Alerts'); ?>

<?php $__env->startSection('section'); ?>
</div>
	<?php $__env->startSection('alert1_panel_title','Regular Alerts'); ?>
	<?php $__env->startSection('alert1_panel_body'); ?>
	<?php echo $__env->make('widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('widgets.alert', array('class'=>'info', 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('widgets.alert', array('class'=>'warning', 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('widgets.alert', array('class'=>'danger', 'message'=> 'My message', 'icon'=> 'remove'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'alert1'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
	<div class="col-sm-6">
		<?php $__env->startSection('alert3_panel_title','Dismissable Alerts'); ?>
		<?php $__env->startSection('alert3_panel_body'); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'alert3'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-6">
		<?php $__env->startSection('alert2_panel_title','Links in Alerts'); ?>
		<?php $__env->startSection('alert2_panel_body'); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'success', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'check'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'info', 'link'=> 'link', 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'warning', 'link'=> 'link', 'message'=> 'My message'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('widgets.alert', array('class'=>'danger', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'remove'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'alert2'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\admin-kit\resources\views/notifications.blade.php ENDPATH**/ ?>