<div class="row">

	<div class="span 12">


		<h1> S'inscrire </h1>

	<?= $this->Form->create('User'); ?>
	<?= $this->Form->input('username',array('label'=>'Pseudo')); ?>
	<?= $this->Form->input('mail',array('label'=>'E-mail')); ?>
	<?= $this->Form->input('password',array('label'=> 'Mot de passe')); ?>
	<?= $this->Form->input('password2',array('type' => 'password', 'label' =>'Vérification du mot de passe')); ?>
	<?= $this->Form->end("S'inscrire"); ?>

	</div>
</div>