<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>

  	<?= $this->Html->CSS('main.css')?>
	<?= $this->Html->script('main.js')?>

	

</head>

<body>

	<div class="container-fluid" max-width="100%">
	<div class="row p-3">
		<div class="col">
			<?= $this->Html->image('e_calendar.png');?>
			<h4 class="text-center"> <small>Perancangan Program/Mesyuarat/Perjumpaan Koperasi</small> </h4>
		</div>

	</div>

	<?= $this->element('header') ?>

	<div id='calendar'></div> <!-- Full calendar -->
	<!--<iframe src="https://calendar.google.com/calendar/embed?src=6hfjdjgtnmjirtn6q002fbshao%40group.calendar.google.com&ctz=Asia%2FKuala_Lumpur" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->

	<h1>Perancangan Program</h1>
	<br>

	<script>

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
			eventLimit: true,

			customButtons: {
				addEventButton: {
					text: 'Add new event',
					click: function() {
					var dateStr = prompt('Enter a date in YYYY-MM-DD format');
					var date = new Date(dateStr + 'T00:00:00'); // will be in local time

					if (!isNaN(date.valueOf())) { // valid?
						calendar.addEvent({
						title: 'dynamic event',
						start: date,
						allDay: true
						});
						alert('Great. Now, update your database...');
					} else {
						alert('Invalid date.');
					}
					}
				}
			},

			events: 'load.php',
			selectable: true,
			slectHelper: true,

			select: function(start, end, allDay)
			{
				var title = prompt("Enter Event Title");
				if(title)
				{
					var strat = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
					var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
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
			
			//height: 650,
			//width: 500,
			//aspectRatio: 1.7,
			//contentHeight: 600,
			
			
		
			/*select: function(start, end) {
				$.getScript('/event/new', function(){
					$('#event_date_range').val(moment(start).format ("MM/DD/YYYY HH:mm") + '-' + moment(end).format("MM/DD/YYYY HH:mm"))
				})
			}
			select: function(info) {
				alert('selected ' + info.startStr + ' to ' + info.endStr);
			}*/
			
		});
		calendar.render();
		});

	</script>

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
	
	<!--
	<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKuala_Lumpur&amp;src=NmhmamRqZ3RubWppcnRuNnEwMDJmYnNoYW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubWFsYXlzaWEjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23C0CA33&amp;color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		<a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=N2duZDRrdGRlNzBzM2V0dWM0amhmZHE3ZGkgYXJpZmFzeXJhZjM2MEBt&amp;tmsrc=arifasyraf360%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif"></a>
		-->
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
<!--Google calendar = keyAIzaSyCigJCoLkQMOfdGD0rd4g3Gkxv_UnIM1kE
Calendar ID = 6hfjdjgtnmjirtn6q002fbshao@group.calendar.google.com-->
</body>
</html>