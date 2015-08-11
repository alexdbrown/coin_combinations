<?php
    class CashMoney
    {
        function getCashMoney($cents)
        {
            // $quarters = floor(($cents *100) / 25);
            // $quarters = (string) $quarters;
            // return $quarters . "q";

            $denominations = [10000, 5000, 2000, 1000, 500, 100, 25, 10, 5, 1];
            $cents = $cents * 100;
            $change_remaining = 0;
            $coins_array = array();
            foreach ($denominations as $denomination) {
                $number_of_coins = floor(($cents) / $denomination);
                array_push($coins_array, $number_of_coins);
                $cents = (($cents) % $denomination);
            }
            return implode(" ", $coins_array);
        }

    }


 ?>
