<?php $this->setSiteTitle('Access Restricted'); ?>
<?php $this->start('body'); ?>
<h4 class="text-danger text-center pt-3">You do not have permission to access this page. Please login with your correct details</h4>
<div class="container text-center">
	<ul class="list-unstyled"> <li><a href="<?=PROOT?>register/login" class="btn btn-primary">Login</a></li></ul>
</div>
<?php $this->end(); ?>