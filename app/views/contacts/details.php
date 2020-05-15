<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('body'); ?>
<div class="py-2"></div>
<div class="row">
	<section class="col-md-2 text-center">		
	</section>
	<section class="col-md-8 bg-light">
		<div class="p-3 ">
			<p><a href="<?=PROOT?>contacts" class="btn btn-secondary btn-sm">Back</a></p>
			<h3 class="text-center">Hello <?=$this->contact->displayName();?></h3>
			<hr>
			<div class="row">
				<section class="col-md-6">
					<p><b>Email :</b> <?=$this->contact->email;?></p>
					<p><b>Cell Phone :</b> <?=$this->contact->cell_phone;?></p>
					<p><b>Home Phone :</b> <?=$this->contact->home_phone;?></p>
					<p><b>Work Phone :</b> <?=$this->contact->work_phone;?></p>
				</section>
				<section class="col-md-6">
					<!-- <h5><strong class="small">My Address</strong></h5> -->
					<p><?=$this->contact->displayAddressLabel();?></p>
				</section>
			</div>
		</div>
	</section>
	<section class="col-md-2"></section>
</div>
<?php $this->end(); ?>