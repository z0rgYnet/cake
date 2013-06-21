<div class="row">

	<div class="span 12">


		<h1> Se connecter </h1>

	<?= $this->Form->create('User'); ?>
	<?= $this->Form->input('username',array('label'=>"Pseudo")); ?>
	<?= $this->Form->input('password',array('label'=> "Mot de passe")); ?>
	<?= $this->Form->end("Se connecter"); ?>

	</div>
</div>