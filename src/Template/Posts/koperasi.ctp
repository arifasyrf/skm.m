<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
  <?php
	echo $this->Html->css('jquery.datetimepicker');
	echo $this->Html->script('jquery.datetimepicker.full.js');
?>
</head>

<body>
  <div class="container" max-width="100%">

<!-- File: src/Template/Posts/add.ctp -->

<h1>Tambah Koperasi</h1>
<?php
    echo $this->Form->create($koperasi);
    echo $this->Form->control('nama_kop');
    echo $this->Form->input('tarikh_daftar', array(
      'class' => 'form-control datepicker-here', 
      'label' => 'Correspondence Date',
      'id' => 'tarikh_daftar',
      'type' => 'Text',
      'data-language' => 'en',
      'data-date-format' => 'yyyy-mm-dd',
      'value' => date('Y-m-d'),
      'empty'=>'empty'
      ));
    echo $this->form->control('no_daftar');
    echo $this->form->control('alamat');
    echo $this->form->control('no_fail');
    echo $this->form->control('tahun_kewangan');
    echo $this->Form->button(__('Save Post', ['type' => 'submit']), array('class'=>'btn btn-success', 'escape' => false));
    echo $this->Form->end();
?>

</div>

<script>
$('tarikh_daftar').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y/m/d',
	minDate:'-1970/01/01', // yesterday is minimum date
	//maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
</script>


</body>
</html>