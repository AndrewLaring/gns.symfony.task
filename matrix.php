<?php

$m = ['x' => 15, 'y' => 7];
$pos = ['x' => 9, 'y' => 7];

echo 'matrix ' . $m['x'] . "x" . $m['y'] . "<br>";
echo 'position ' . $pos['x'] . "x" . $pos['y'] . "<br>";
echo "<br><br>";

matrix($m, $pos);
echo "<br><br>";

$res = getAll($m, $pos);
echo "Steps to take over the world: " . $res;


function matrix($m, $pos)
{
    for ($j = 1; $j <= $m['y']; $j++) {
        for ($i = 1; $i <= $m['x']; $i++) {
            if ($i == $pos['x'] && $j == $pos['y']) {
                echo "1 ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }
}

function getAll($m, $pos)
{
    $stepsRight = $m['x'] - $pos['x'];
    $stepsDown = $m['y'] - $pos['y'];

    $steplist = [
        $pos['x'],
        $pos['y'],
        $stepsRight,
        $stepsDown,
    ];

    $steps = 0;

    foreach ($steplist as $v) {
        if ($steps < $v) {
            $steps = $v;
        }
    }
    return $steps;
}
