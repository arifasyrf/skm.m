<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>
<div class="container-fluid" max-width="100%">
<div class="row p-3">
		<div class="col">
            <?php echo $this->Html->image('main.png') ?>
			<!-- <img src="main.png" class="visible mw-100"> -->
		</div>

	</div>
<?= $this->element('header') ?>

<div class="well">
<?= $this->Form->create(); ?>

<?= $this->Form->control('username'); ?>
<?= $this->Form->control('password'); ?>

<?= $this->Form->button('submit'); ?>

<?= $this->Form->end(); ?>
</div>
</div>

</body>
</html>
