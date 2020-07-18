<?php echo $this->Html->docType();?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->element('head') ?>
</head>

<body>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container-fluid pt-3" max-width="100%">
            <?= $this->Html->image('main.png');?>


    <?= $this->element('header') ?>

    <!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        </ul>
    </nav> -->
    <div class="users form large-9 medium-8 columns content">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
                echo $this->Form->control('username');
                echo $this->Form->control('email');
                echo $this->Form->control('password', ['type' => 'password']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

</body>
</html>
