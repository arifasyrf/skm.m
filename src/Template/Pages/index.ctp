<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>
	<div class="container-fluid pt-3" max-width="100%">
			<img src="img/main.png" class="visible mw-100">


	<?= $this->element('header') ?>


	<div class="row">
			<div class="col-sm-6 p-3" > <!--style="background-color:yellow;"-->
				<?= $this->Html->link('e-Carian', ['controller' => 'branches','action' => 'index'], array('class'=>'btn btn-outline-primary float-right')) ?>
			</div>
      		<div class="col-sm-6 p-3" > <!--style="background-color:orange;"-->
			    <?= $this->Html->link('e-Calendar', ['controller' => 'posts','action' => 'kalendar'], array('class'=>'btn btn-outline-success')) ?>

			</div>


			<div class="col-sm-4"></div>
      		<div class="col-sm-4 p-3">

      		</div>
      		<div class="col-sm-4"></div>
	</div>

	</div>

</body>
</html>
