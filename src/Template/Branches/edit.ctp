<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<div class="container-fluid pt-3" max-width="100%">
            <?= $this->Html->image('e_carian.png');?>
    </div>


<?= $this->element('header') ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $branch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'koperasi']) ?></li>
    </ul>
</nav>
<div class="branches form large-9 medium-8 columns content">
    <?= $this->Form->create($branch) ?>
    <fieldset>
        <legend><?= __('Edit Branch') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('registerDate' , ['minYear' => 1920]);
            echo $this->Form->control('registerNumber');
            echo $this->Form->control('fileNumber');
            echo $this->Form->control('tahunKewangan', ['minYear' => 1990]);
            echo $this->Form->select('status', [
                'Aktif' => 'Aktif',
                'Tidak Aktif' => 'Tidak Aktif',
                'Dorman' => 'Dorman'
            ], ['empty' => '(Status)']);
            echo $this->Form->select('wilayah', [
                'Wilayah 1' => 'Wilayah 1',
                'Wilayah 2' => 'Wilayah 2',
                'Wilayah 3' => 'Wilayah 3',
                'Wilayah 4' => 'Wilayah 4'
            ], ['empty' => '(Wilayah)']);
            echo $this->Form->control('tahunBatal' , ['minYear' => 1990]);
            echo $this->Form->control('address');
            echo $this->Form->control('phoneNumber');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


