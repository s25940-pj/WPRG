<?php

function calculateDiameter($radius) {
    return $radius * 2;
}

$radius = 12.5;
$diameter = calculateDiameter($radius);

echo $diameter;
