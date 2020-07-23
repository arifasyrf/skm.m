<?php

$cakeDescription = 'Suruhanjaya Koperasi Malaysia Cawangan Negeri Melaka';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <!-- <?= $this->Html->css('style.css') ?> -->
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
// Only this is necessary after 3.4.0
echo $this->Flash->render();

// Prior to 3.4.0 this will be required as well.
echo $this->Flash->render('auth');
?>
</head>
<body>

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div id="header">
    <div id="menu"></div>
</div>


<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<div id="footer">
<!-- <?= $this->element('footer') ?> -->
</div>

</body>
</html>
