<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>
	<div class="container" max-width="100%">
	<div class="row p-3">
		<div class="col">
			<img src="img/main.png" class="visible mw-100">
		</div>

	</div>

	<?= $this->element('header') ?>

  <button type="button" class="btn btn-success"><?= $this->Html->link('New Event', ['controller' => 'posts','action' => 'kalendar']) ?></button>
  

	<div class="row">
			<div class="col-sm-6 p-3" style="background-color:yellow;">
				<button type="button" class="btn btn-outline-primary float-right">E-Carian</button>
			</div>
      		<div class="col-sm-6 p-3" style="background-color:orange;">50%</div>


			<div class="col-sm-4" style="background-color:yellow;">Zikri.33%</div>
      		<div class="col-sm-4 p-3">
      			
      		</div>
      		<div class="col-sm-4" style="background-color:yellow;">33.33%</div>
	</div>

	</div>

  <?= $this->element('footer') ?>
</body>
</html>