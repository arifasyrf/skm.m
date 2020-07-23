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

		<div class="container">
		<div class="row">
			<div class="col-lg-3">
			</div>
				<div class="col-lg-3 p-3" > <!--style="background-color:yellow;"-->
					<div class="card float-right shadow" style="width:300px">
						<img class="card-img-top" src="img/search.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<?= $this->Html->link('eCarian', ['controller' => 'branches','action' => 'koperasi'], array('class'=>'btn btn-outline-primary btn-block stretched-link float-right')) ?>
						</div>
					</div>
				</div>
	      		<div class="col-lg-3 p-3" > <!--style="background-color:orange;"-->
	      			<div class="card shadow" style="width:300px">
	      				<img class="card-img-top" src="img/calendar.png" alt="Card image" style="width:100%">
	      				<div class="card-body">
				    		<?= $this->Html->link('eCalendar', ['controller' => 'posts','action' => 'kalendar'], array('class'=>'btn btn-outline-success btn-block stretched-link float-right')) ?>
				    	</div>
					</div>
				</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>

		<div>
			<?php  if($this->getRequest()->getSession()->check()){
		        $this->Html->link('Login', ['controller'=>'users', 'action'=>'login'], 
		        array('class'=>'btn btn-success'));//your logout link
		      }else{
		        $this->Html->link('Logout', ['controller'=>'users', 'action'=>'logout'], 
		        array('class'=>'btn btn-success'));//your login link
		      }?>
		     </div>

	</div>

</body>
</html>
