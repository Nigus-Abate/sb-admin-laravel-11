<?php $__env->startSection('page_heading','Typoghraphy'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-4"> 
		<?php $__env->startSection('typo1_panel_title','Headings'); ?>
		<?php $__env->startSection('typo1_panel_body'); ?>
		<h1>Heading 1 <small>Sub-heading</small> </h1> 
		<h2>Heading 2 <small>Sub-heading</small> </h2> 
		<h3>Heading 3 <small>Sub-heading</small> </h3> 
		<h4>Heading 4 <small>Sub-heading</small> </h4>
		<h5>Heading 5 <small>Sub-heading</small> </h5> 
		<h6>Heading 6 <small>Sub-heading</small> </h6>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo1'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-4"> 
		<?php $__env->startSection('typo2_panel_title','Paragraphs'); ?>
		<?php $__env->startSection('typo2_panel_body'); ?>
		<p class="lead">This is an example of lead body copy.</p>
		<p>This is an example of standard paragraph text. This is an example of <a href="#">link anchor text</a> within body copy.</p> <p> <small>This is an example of small, fine print text.</small> </p> 
		<p> <strong>This is an example of strong, bold text.</strong> </p> 
		<p> <em>This is an example of emphasized, italic text.</em> </p> <br> 
		<h4>Alignment Helpers</h4> 
		<p class="text-left">Left aligned text.</p> 
		<p class="text-center">Center aligned text.</p> 
		<p class="text-right">Right aligned text.</p> 
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo2'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-4">
		<?php $__env->startSection('typo3_panel_title','Emphasis Classes'); ?>
		<?php $__env->startSection('typo3_panel_body'); ?>
		<p class="text-muted">This is an example of muted text.</p> 
		<p class="text-primary">This is an example of primary text.</p> 
		<p class="text-success">This is an example of success text.</p> 
		<p class="text-info">This is an example of info text.</p> 
		<p class="text-warning">This is an example of warning text.</p> 
		<p class="text-danger">This is an example of danger text.</p> 
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo3'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div> 
<div class="row">
	<div class="col-sm-4">
		<?php $__env->startSection('typo4_panel_title','Abbreviations'); ?>
		<?php $__env->startSection('typo4_panel_body'); ?>
		<p>The abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p> 
		<p> <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>is an abbreviation for a programming language.
		</p> <br> 
		<h4>Addresses</h4> 
		<address> <strong>Twitter, Inc.</strong> <br>
		795 Folsom Ave, Suite 600 <br>
		San Francisco, CA 94107 <br> 
		<abbr title="Phone">P:</abbr>(123) 456-7890 </address> 
		<address> <strong>Full Name</strong> <br> 
		<a href="mailto:#">first.last@example.com</a> 
		</address> 
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo4'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-4">
		<?php $__env->startSection('typo5_panel_title','Blockquotes'); ?>
		<?php $__env->startSection('typo5_panel_body'); ?>
		<h4>Default Blockquote</h4> 
		<blockquote> 
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		</blockquote> 
		<h4>Blockquote with Citation</h4> 
		<blockquote> 
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		<small>Someone famous in <cite title="Source Title">Source Title</cite> </small> 
		</blockquote> 
		<h4>Right Aligned Blockquote</h4>
		 <blockquote class="pull-right"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		 </blockquote> 
		 <?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo5'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-4">
		<?php $__env->startSection('typo6_panel_title','List'); ?>
		<?php $__env->startSection('typo6_panel_body'); ?>
		<h4>Unordered List</h4> 
		<ul> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li> <ul> 
					<li>List Item</li> 
					<li>List Item</li> 
					<li>List Item</li> 
				</ul>
			</li> 
			<li>List Item</li> 
		</ul> 
		<h4>Ordered List</h4> 
		<ol> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li> 
		</ol> 
		<h4>Unstyled List</h4>
		<ul class="list-unstyled"> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li>
		</ul> 
		<h4>Inline List</h4> 
		<ul class="list-inline"> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li> 
		</ul>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo6'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div> 
<div class="row">
	<div class="col-sm-4">
		<?php $__env->startSection('typo7_panel_title','Description Lists'); ?>
		<?php $__env->startSection('typo7_panel_body'); ?>  
		<dl> 
		<dt>Standard Description List </dt>
		<dd>Description Text </dd>
		<dt>Description List Title </dt>
		<dd>Description List Text </dd>
		</dl> 
		<dl class="dl-horizontal">
		<dt>Horizontal Description List </dt>
		<dd>Description Text </dd>
		<dt>Description List Title </dt>
		<dd>Description List Text </dd>
		</dl>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo7'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<div class="col-sm-4">
		<?php $__env->startSection('typo8_panel_title','Code'); ?>
		<?php $__env->startSection('typo8_panel_body'); ?> 
		<p>This is an example of an inline code element within body copy. Wrap inline code within a <code>&lt;code&gt;...&lt;/code&gt;</code>tag.</p>
		<pre>This is an example of preformatted text.</pre>
		<?php $__env->stopSection(); ?>
		<?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'typo8'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\admin-kit\resources\views/typography.blade.php ENDPATH**/ ?>