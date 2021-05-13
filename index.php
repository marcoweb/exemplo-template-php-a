<?php
    // include 'functions/template.php';
    // include 'functions/calculos.php';
    include 'vendor/autoload.php';
    $title = 'Home Page';
?>

<?php template\getHeader('home') ?>

        <h1>Home Page</h1>

        <?= sub(5, 3) ?>

<?php template\getFooter() ?>