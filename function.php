<?php

function drawMonster(int $type, int $size):void {
    ?>
        <img src="monster-<?= $type; ?>" alt="monster" style="width: <?= $size; ?>px; height: <?= $size; ?>">
    <?php
}

require_once('function.php');
drawMonster(1, 500);