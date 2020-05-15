<?php $this->setSiteTitle('Add Contact'); ?>
<?php $this->start('body'); ?>
<div class="p-2"></div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="p-3 bg-light">
			<h3 class="text-center">Add New Contact</h3>
			<hr>
			<?= $this->partial('contacts', 'form') ?>
		</div>
	</div>
</div>

<?php $this->end(); ?>