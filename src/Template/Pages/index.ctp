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
			<img src="img/main.png" class="visible mw-100">
		</div>

	</div>

	<?= $this->element('header') ?>
  

	<div class="row">
			<div class="col-sm-6 p-3" > <!--style="background-color:yellow;"-->
				<button type="button" class="btn btn-outline-primary float-right"><?= $this->Html->link('e-Carian', ['controller' => 'branches','action' => 'index']) ?></button>
			</div>
      		<div class="col-sm-6 p-3" > <!--style="background-color:orange;"-->
			  <button type="button" class="btn btn-outline-success"><?= $this->Html->link('e-Calendar', ['controller' => 'posts','action' => 'kalendar']) ?></button>
			  
			</div>


			<div class="col-sm-4"></div>
      		<div class="col-sm-4 p-3">
      			
      		</div>
      		<div class="col-sm-4"></div>
	</div>

	</div>

</body>
</html>