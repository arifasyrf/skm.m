<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  	<?= $this->element('head') ?>
  	<?= $this->Html->CSS('https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css')?>
	<?= $this->Html->script('https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js')?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

</head>

<body>

	<div class="container-fluid pt-3" max-width="100%">
			<?= $this->Html->image('e_calendar.png');?>
			<h4 class="text-center"> <small>Perancangan Program/Mesyuarat/Perjumpaan Koperasi</small> </h4>


	<?= $this->element('header') ?>
	<h1>Perancangan Program</h1>
	<br>

	<div id='calendar'></div> <!-- Full calendar -->
	<br>
	<?= $this->Html->link('Add New Event', ['action' => 'add'], array('class'=>'btn btn-outline-primary', 'escape' => false)) ?>
	<div class="row">
	    <?php if(!empty($posts)): foreach($posts as $post): ?>
	    <div class="post-box">
	        <div class="post-content">
	            <div class="caption">
	            	<?= $this->Html->link('Edit', ['action' => 'edit', $post->id]) ?>

	            	<?= $this->Form->postLink('Delete',['action' => 'delete', $post->id],
								    ['confirm' => 'Are you sure?'])?>
	                <h4><a href="javascript:void(0);"><?php echo $post->title; ?></a></h4>
	                <p><?php echo $post->description; ?></p>
	                <p><?php echo $post->tarikh; ?></p>
	            </div>
	        </div>
	    </div>
	    <?php endforeach; else: ?>
	    <p class="no-record">No post(s) found......</p>
	    <?php endif; ?>
	</div>

	</div>

	<script>
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')); ?>

		document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {

			editable: true,
			headerToolbar: {
				start: 'prevYear,prev,next,nextYear,today addEventButton',
				center: 'title',
				end: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
			},
			themeSystem: 'bootstrap',
			//eventLimit: true,

			customButtons: {
				addEventButton: {
					text: 'Add new event',
					click: function() {

						$('#myModal').modal('show');
						// var dateStr = prompt('Enter a date in YYYY-MM-DD format');
						// var date = new Date(dateStr + 'T00:00:00'); // will be in local time
						// var newDate = date.toISOString().slice(0, 19).replace('T', ' ');
						var title = 'Cuti hujung minggu';
						var detail = 'Pi melancong pulau tioman';

						if (!isNaN(date.valueOf())) { // valid?
							calendar.addEvent({
							title: 'dynamic event',
							start: date,
							allDay: true
							});
							alert(newDate);

							$.ajax({
							headers: {
								'X-CSRF-Token': csrfToken
							},
							url:'<?= $this->Url->build(["controller" => "Posts", "action" => "saveEvent"])?>'+'?start='+newDate+'&end='+newDate+'&title='+title+'&details='+detail,
							type:'POST',
							success:function()
							{
								// calendar.refetchEvents();
								// alert("Added Event Successfully");
							}
							})
						 } else {
							alert('Invalid date.');
						}
					}
					

				}
			},

			//events: 'load',
			selectable: true,
			//slectHelper: true,

			select: function(start, end, allDay)
			{
				var title = prompt("Enter Event Title");
				if(title)
				{
					var strat = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
					var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                    console.log('whattt');
					$.ajax({
						url:"<? echo $this->Html->link('src\Template\Posts\insert.php') ?>",
						type:"POST",
						data:{title:title, start:start, end:end},
						success:function()
						{
							calendar.fullcalendar('refetchEvents');
							alert("Added Successfully");
						}
					})
				}
			},

			editable:true,
			eventResize:function(event)
			{
				var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
				var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
				var title = event.title;
				var id = event.id;
			$.ajax({
				url:"update.php",
				type:"POST",
				data:{title:title, start:start, end:end, id:id},
			success:function(){
				calendar.fullCalendar('refetchEvents');
				alert('Event Update');
				}
				})
			},

		});
		calendar.render();
		});

        $( document ).ready(function() {
            $("#submit-modal").click(function(){
                var tajuk = $('#tajuk').val();
                var detail = $('#detail').val();
                var tarikh_mula = $('#tarikh-mula').val();
                var tarikh_akhir = $('#tarikh-akhir').val();
                var unit = $('#unit1').val();
                var urusetia = $('#urusetia').val();

                // var newTarikhMula = tarikh_mula.toISOString().slice(0, 19).replace('T', ' ');
                // var newTarikhAkhir = tarikh_akhir.toISOString().slice(0, 19).replace('T', ' ');

                console.log(tajuk);
                console.log(detail);
                console.log(tarikh_mula);
                console.log(tarikh_akhir);
                console.log(unit);
                console.log(urusetia);

				$.ajax({
					headers: {
						'X-CSRF-Token': csrfToken
					},
					url:'<?= $this->Url->build(["controller" => "Posts", "action" => "saveEvent"])?>'+'?title='+tajuk+'&details='+detail+'&start='+tarikh_mula+'&end='+tarikh_akhir+'&unit_terlibat='+unit+'&urusetia='+urusetia,
					type:'POST'
				})
			alert("Event added Successfully");	
			location.reload();                

            });
        });

	</script>

  <!-- Button to Open the Modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button> -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create New Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
		  <div class="container">
			<h2></h2>
				<div class="form-group">
					<label for="text">Program</label>
					<input type="text" class="form-control" id="tajuk" placeholder="Masukkan nama program" name="tajuk">
				</div>
				<div class="form-group">
					<label for="detail">Detail program</label>
					<textarea class="form-control" rows="2" id="detail" name="text"></textarea>
				</div>
			<!-- Date Time picker -->
				<div class="form-group">
				<label for="text">Tarikh</label>
				<br>Mula
				<div class="input-group date" id="datetimepicker7" data-target-input="nearest">
						<input type="text" id="tarikh-mula" class="form-control datetimepicker-input" data-target="#datetimepicker7"/>
						<div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
						</div>
					</div>
				</div>Hingga
				<div class="form-group">
				<div class="input-group date" id="datetimepicker8" data-target-input="nearest">
						<input type="text" id="tarikh-akhir" class="form-control datetimepicker-input" data-target="#datetimepicker8"/>
						<div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
						</div>
					</div>
			</div>
			<script type="text/javascript">
				$(function () {
					$('#datetimepicker7').datetimepicker({
						format: "YYYY-MM-DD hh:mm",
						icons: {
							time: "far fa-clock",
							date: "far fa-calendar-alt",
							up: "fa fa-arrow-up",
							down: "fa fa-arrow-down"
						}
					});
					$('#datetimepicker8').datetimepicker({
						useCurrent: false,
						format: "YYYY-MM-DD hh:mm", //YYYY-MM-DD HH:MI:SS
						icons: {
							time: "far fa-clock",
							date: "far fa-calendar-alt",
							up: "fa fa-arrow-up",
							down: "fa fa-arrow-down"
						}
					});
					$("#datetimepicker7").on("change.datetimepicker", function (e) {
						$('#datetimepicker8').datetimepicker('minDate', e.date);
					});
					$("#datetimepicker8").on("change.datetimepicker", function (e) {
						$('#datetimepicker7').datetimepicker('maxDate', e.date);
					});
				});
			</script>

				<!-- Date Picker -->
				<!-- <div class="form-group input-group input-daterange">
				<label for="text">Tarikh</label>
					<input type="text" class="form-control">
					<div class="input-group-addon">to</div>
					<input type="text" class="form-control">
				</div>
				<script>
				$('.input-daterange input').each(function() {
					$(this).datepicker('clearDates');
					clearBtn: true

				});
				</script> -->

				<div class="form-group">
					<label for="unit1">Unit terlibat:</label>
					<select class="form-control" id="unit1" name="sellist1">
						<option>Pentadbiran</option>
						<option>Pembangunan</option>
						<option>Audit</option>
						<option>Operasi</option>
					</select>
				</div>

				<div class="form-group">
					<label for="text">Urusetia</label>
					<input type="text" class="form-control" id="urusetia" placeholder="Nama urusetia" name="tajuk">
				</div>

				<!-- <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
				</div> -->
				<div> </div>
				<button type="submit" id="submit-modal" class="btn btn-primary">Submit</button>
			</div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

	<style type="text/css">
		h1{color: #494646;}
		.row{ margin:20px 20px 20px 20px;width: 100%;}
		.post-box {width: 30%;float: left;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;}
		.post-content {padding: 0;}
		.post-content {display: block;padding: 4px;margin-bottom: 20px;line-height: 1.42857143;background-color: #fff;border: 1px solid #ddd;border-radius: 4px;-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;}
		.post-content .caption {padding: 9px;color: #333;}
		.post-content .caption p{font-size: 14px;}
		.post-content h4 {font-size: 18px;margin-top: 10px;margin-bottom: 10px;}
		.post-content a {color: #428bca;text-decoration: none;background: transparent;}
		.post-content p {margin: 0 0 10px;}
		.no-record{font-size: 16px;font-weight: bold;color: #DD4B39;padding: 10px}
	</style>

</body>
</html>
