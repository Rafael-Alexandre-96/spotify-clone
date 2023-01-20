<?php require_once(__DIR__ . '/card-box.php');

function showPrograms($title) { ?>
    <section class="container">
        <h2><?= $title ?></h2>
    </section>
    <section id="program-cards" class="container card-gap">
        <?php showCardBox('Program #01'); ?>
        <?php showCardBox('Program #02'); ?>
        <?php showCardBox('Program #03'); ?>
        <?php showCardBox('Program #04'); ?>
        <?php showCardBox('Program #05'); ?>
    </section>
<?php } ?>