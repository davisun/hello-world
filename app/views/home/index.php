<?php $this->setSiteTitle('Welcome page'); ?>
<!-- ?php $this->start('head'); ?>

?php $this->end(); ?> -->

<?php $this->start('body'); ?>
<h1 class="text-center blue">Welcome to my mvc pos framework. My first oop project! </h1>
<form>
	<div class="form-row">
		<section class="col-sm-3"></section>
		<section class="col-sm-6">
			<?= inputBlock('text', 'Username', 'username', '', ['placeholder'=>'Enter username', 'class'=>'form-control'], ['class'=>'form-group']); ?>

<?= selectBlock('text', 'Geneder', 'sex', ['<option>Male</option>','<option>Female</option>'], ['class'=>'form-control'], ['class'=>'form-group']); ?>
<?= textAreaBlock('text', 'Message', 'msg', '', ['class'=>'form-control'], ['class'=>'form-group']); ?>
<?= submitBlock('Upload', ['class'=>'btn btn-info'], ['class'=>'form-group text-right']) ?>
		</section>
	</div>
</form>

<?php $this->end(); ?>

