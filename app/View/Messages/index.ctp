<div class="container-fluid">
	<div class="row-fluid">
    
    <div class="span2">
      <!--Sidebar content-->
    </div>
  
    <div class="span10">
      <!--Body content-->
    </div>	
	</div>
</div>

<div class="row-fluid">
  <div class="span12">
  	<?= $this->Form->create('Message', array('style'=> "form-inline")); ?>
	<?= $this->Form->input('content',array('placeholder'=>"Mon Message", 'style' => 'input-xxlarge')); ?>
	<?= $this->Form->end("Envoyer"); ?>
  </div>
</div>
