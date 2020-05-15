<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="container">
	<div class="row">
		<section class="col-md-3 col-sm-2"></section>
		<section class="col-md-6 col-sm-8">
			
			<form class="p-4 bg-light" action="" method="post">
				<h3 class="p-2 text-center">Registration Here!</h3>
				<div class="alert-danger"><?=$this->displayErrors?></div>
				<div class="form-group">
					<label for="fname">First Name</label>
					<input type="text" name="fname" id="fname" class="form-control" value="<?=$this->post['fname'];?>">
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input type="text" name="lname" id="lname" class="form-control" value="<?=$this->post['lname'];?>">
				</div>
				<div class="form-group">
					<label for="email">Enail Address</label>
					<input type="email" name="email" id="email" class="form-control" value="<?=$this->post['email'];?>">
				</div>
				<div class="form-group">
					<label for="username">username</label>
					<input type="text" name="username" id="username" class="form-control" value="<?=$this->post['username'];?>">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" value="<?=$this->post['password'];?>">
				</div>
				<div class="form-group">
					<label for="confirm">Confirm Password</label>
					<input type="password" name="confirm" id="confirm" class="form-control" value="<?=$this->post['confirm'];?>">
				</div>
				<div class="form-group pull-right">					
					<input type="submit"  class="btn btn-lg btn-primary" value="Register">
				</div>

			</form>
		</section>
		<section class="col-md-3 col-sm-2"></section>
	</div>
	<div class="p-3"></div>
</div>
<?php $this->end(); ?>