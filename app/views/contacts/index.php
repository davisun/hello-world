<?php $this->start('body'); ?>
<h2>Hi This is my Contacts </h2>
<hr>
<div class="table-responsive">
	<table class="table table-striped table-sm table-bordered table-hover">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Cell Phone</th>
		<th>Home Phone</th>
		<th>Work Phone</th>
		<th>Tools </th>
	</thead>
	<tbody>
<?php foreach($this->contacts as $contact): ?>	
		<tr>
			<td>
				<a href="<?=PROOT?>contacts/details/<?=$contact->id?>" > <?= $contact->displayName();?> </a>
			</td>
			<td><?= $contact->email;?></td>
			<td><?= $contact->cell_phone;?></td>
			<td><?= $contact->home_phone;?></td>
			<td><?= $contact->work_phone;?></td>
			<td>
				<a href="<?=PROOT?>contacts/edit/<?=$contact->id?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
				<a href="<?=PROOT?>contacts/delete/<?=$contact->id?>" onclick="if(!confirm('Are you sure?')){return false;}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> delete</a>
			</td>
		</tr>
<?php endforeach; ?>
		<tr></tr>
	</tbody>
</table>
</div>
<?php $this->end(); ?>