<?php $this->setSiteTitle('Edit Contact'); ?>
<?php $this->start('body'); ?>
<div class="p-2"></div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="p-3 bg-light">
			<h3 class="text-center">Edit <?=$this->contact->displayName();?></h3>
			<hr>
			<?= $this->partial('contacts', 'form') ?>
		</div>
	</div>
</div>

<?php $this->end(); ?>