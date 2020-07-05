<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>

<div class="container-fluid pt-3" max-width="100%">
<?php echo $this->Html->image('main.png', array('class'=>'visible mw-100')) ?>
<!-- <img src="main.png" class="visible mw-100"> -->

<?= $this->element('header') ?>

<div class="container-sm border">
<div class="well">
<?= $this->Form->create(); ?>

<?= $this->Form->control('username'); ?>
<?= $this->Form->control('password'); ?>

<?= $this->Form->button(__('Log in', ['type' => 'submit']), array('class'=>'btn btn-success', 'escape' => false)); ?>
<?= $this->Html->link('Register', ['controller' => 'users','action' => 'add'], array('class'=>'btn btn-outline-primary float-right')) ?>

<?= $this->Form->end(); ?>
<br>

        </div>
    </div>
</div>


</body>
</html>
