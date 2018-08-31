<?php
// Problem 15
// Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
// How many such routes are there through a 20×20 grid?

function howManyPaths($gridSize)
{
    $howManyPaths = 1;
    for ($i = 0; $i < $gridSize; $i++) {
        $howManyPaths *= ((2 * $gridSize) - $i) / ($i + 1);
    }
    return $howManyPaths;
}
echo howManyPaths(20); //137846528820
