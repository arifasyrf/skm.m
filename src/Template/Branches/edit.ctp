<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $branch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="branches form large-9 medium-8 columns content">
    <?= $this->Form->create($branch) ?>
    <fieldset>
        <legend><?= __('Edit Branch') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('registerDate');
            echo $this->Form->control('registerNumber');
            echo $this->Form->control('fileNumber');
            echo $this->Form->control('tahunKewangan');
            echo $this->Form->control('status');
            echo $this->Form->control('wilayah');
            echo $this->Form->control('tahunBatal');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
