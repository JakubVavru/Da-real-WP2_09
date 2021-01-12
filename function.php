<?php

function drawMonster(int $type, int $size):void {
    ?>
        <img src="monster-<?= $type; ?>.jpg" alt="monster" style="width: <?= $size; ?>px">
    <?php
}