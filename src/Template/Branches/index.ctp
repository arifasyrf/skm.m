<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch[]|\Cake\Collection\CollectionInterface $branches
 */
?>
<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="branches index large-11 medium-7 columns content">
    <h3><?= __('Branches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registerDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registerNumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fileNumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tahunKewangan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wilayah') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tahunBatal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($branches as $branch): ?>
            <tr>
                <td><?= $this->Number->format($branch->id) ?></td>
                <td><?= h($branch->name) ?></td>
                <td><?= h($branch->registerDate) ?></td>
                <td><?= h($branch->registerNumber) ?></td>
                <td><?= h($branch->fileNumber) ?></td>
                <td><?= h($branch->tahunKewangan) ?></td>
                <td><?= h($branch->status) ?></td>
                <td><?= h($branch->wilayah) ?></td>
                <td><?= h($branch->tahunBatal) ?></td>
                <td><?= h($branch->address) ?></td>
                <td><?= h($branch->created) ?></td>
                <td><?= h($branch->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $branch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
