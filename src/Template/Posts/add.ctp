<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>
	<div class="container-fluid pt-3" max-width="100%">
			<?= $this->Html->image('e_calendar.png');?>
			<h4 class="text-center"> <small>Perancangan Program/Mesyuarat/Perjumpaan Koperasi</small> </h4>

	
	<?= $this->element('header') ?>
  <div class="container" max-width="100%">

<!-- File: src/Template/Posts/add.ctp -->

<h1>Add New Event</h1>
<?php
    echo $this->Form->create($post);
    echo $this->Form->input('title');
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->button(__('Save Post', ['type' => 'submit']), array('class'=>'btn btn-success', 'escape' => false));
    echo $this->Form->end();
?>

</div>
</div>

</body>
</html>