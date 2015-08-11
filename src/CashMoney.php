<?php
    class CashMoney
    {
        function getCashMoney($cents)
        {
            $quarters = floor(($cents *100) / 25);
            $quarters = (string) $quarters;
            return $quarters . "q";
        }
    }


 ?>
