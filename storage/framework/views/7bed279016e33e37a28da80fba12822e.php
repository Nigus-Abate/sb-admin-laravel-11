<?php $__env->startSection('page_heading','Tables'); ?>

<?php $__env->startSection('section'); ?>
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-6">
		<?php $__env->startSection('table_panel_title','Regular Table'); ?>
		<?php $__env->startSection('table_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>''), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'table'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-6">
		<?php $__env->startSection('btable_panel_title','Bordered Table'); ?>
		<?php $__env->startSection('btable_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>'table-bordered'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'btable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
	<?php $__env->startSection('stable_panel_title','Striped Table'); ?>
		<?php $__env->startSection('stable_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>'table-striped'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'stable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-6">
		<?php $__env->startSection('htable_panel_title','Hover Table'); ?>
		<?php $__env->startSection('htable_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>'table-hover'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'htable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
	
<div class="row">
	<div class="col-sm-6">
	<?php $__env->startSection('ctable_panel_title','Condensed Table'); ?>
		<?php $__env->startSection('ctable_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>'table-condensed'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'ctable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-6">
		<?php $__env->startSection('atable_panel_title','Condensed, Bordered, Striped Table'); ?>
		<?php $__env->startSection('atable_panel_body'); ?>
		<?php echo $__env->make('widgets.table', array('class'=>'table-condensed table-bordered table-striped'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'atable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<?php $__env->startSection('cotable_panel_title','Coloured Table'); ?>
		<?php $__env->startSection('cotable_panel_body'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
				</tr>
				<tr>
					<td>Wayne</td>
					<td>wayne@gmail.com</td>
					<td>Manchester, UK</td>
				</tr>
				<tr class="info">
					<td>Andy</td>
					<td>andy@gmail.com</td>
					<td>Merseyside, UK</td>
				</tr>
				<tr>
					<td>Danny</td>
					<td>danny@gmail.com</td>
					<td>Middlesborough, UK</td>
				</tr>
				<tr class="warning">
					<td>Frank</td>
					<td>frank@gmail.com</td>
					<td>Southampton, UK</td>
				</tr>
				<tr>
					<td>Scott</td>
					<td>scott@gmail.com</td>
					<td>Newcastle, UK</td>
				</tr>
				<tr class="danger">
					<td>Rickie</td>
					<td>rickie@gmail.com</td>
					<td>Burnley, UK</td>
				</tr>
			</tbody>
		</table>	
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'cotable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\admin-kit\resources\views/table.blade.php ENDPATH**/ ?>