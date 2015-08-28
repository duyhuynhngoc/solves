<?php
/**
 * Class: Mathematics\Points${NAME}
 * Modified by: duyhn
 * Modified date: 8/29/2015
 * Time: 2:40 AM
 */

namespace Mathematics\Points;

/*
1. solution 1: Given two points A and B, output the symmetric point of point A about B.
    solve: Bx - Ax = x - Bx => x = 2*Bx - Ax, By - Ay = y - By => y = 2*By - Ay;
2. solution 2: Given point A and straight line L(x+y=0), output the midpoint and symmetric point of point A about straight line L
*/

class Symmetric
{
    public function solutionOne($testCase)
    {
        $x = $testCase[2]*2 - $testCase[0];
        $y = $testCase[3]*2 - $testCase[1];
    }
}