<?php
    class CashMoney
    {
        function getCashMoney($cents)
        {
            // $quarters = floor(($cents *100) / 25);
            // $quarters = (string) $quarters;
            // return $quarters . "q";

            $denominations = [25, 10, 5];
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
