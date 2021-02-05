<?php

namespace Bhut;

/*
 * Class with the base methods for the challenge
 *
 * @author Jonathan Lamim <contato@jonathanlamim.com.br>
 * @version 1.0
 */
class Challenge
{
    /*
     * Calculates the division of a number by 3 and 5
     *
     * @param int $num Number for calculating the division by 3 and 5
     * @return array
     */
    private function mods(int $num): array
    {
        $mod3     = $num % 3;
        $mod5     = $num % 5;
        $sumMod35 = $mod3 + $mod5;

        return [$mod3, $mod5, $sumMod35];
    }

    /*
     * Checks if a number is a multiple of 3, 5 or both
     *
     * @param int $num Number to check if it is multiple
     * @return string
     */
    public function verifyValue(int $num): string
    {
        $terms = ['BHUT', 'IT', 'BHUT TI'];
        $mods  = $this->mods($num);
        $pos   = 0;

        do {
            if ($mods[$pos] === 0)
                $num = $terms[$pos];
            $pos++;
        } while ($pos < count($terms));

        return (string) $num;
    }
}
