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

<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit koperasi'), ['action' => 'edit', $branch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete koperasi'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List koperasi'), ['action' => 'koperasi']) ?> </li>
        <li><?= $this->Html->link(__('Tambah koperasi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="branches view large-9 medium-8 columns content">
    <h3><?= h($branch->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($branch->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register Number') ?></th>
            <td><?= h($branch->registerNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Number') ?></th>
            <td><?= h($branch->fileNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($branch->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wilayah') ?></th>
            <td><?= h($branch->wilayah) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($branch->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($branch->phoneNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($branch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register Date') ?></th>
            <td><?= h($branch->registerDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tahun Kewangan') ?></th>
            <td><?= h($branch->tahunKewangan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tahun Batal') ?></th>
            <td><?= h($branch->tahunBatal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($branch->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($branch->modified) ?></td>
        </tr>
    </table>
</div>

</body>
</html>
