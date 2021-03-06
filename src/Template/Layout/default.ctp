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
    <?= $this->Html->css('style.css') ?>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
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
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Suruhanjaya Koperasi Malaysia Cawangan Negeri Melaka 2020</p>
        </div>
    </div>
</footer>
</div>

</body>
</html>
