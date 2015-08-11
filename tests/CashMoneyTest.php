<?php
    require_once "src/CashMoney.php";

    class CashMoneyTest extends PHPUnit_Framework_TestCase
    {
        function test_getCashMoney_countQuarters()
        {
            //Arrange
            $test_CashMoney = new CashMoney;
            $cents = .75;

            //Act
            $result = $test_CashMoney->getCashMoney($cents);

            //Assert
            $this->assertEquals('3q', $result);
        }

        function test_getCashMoney_countDimes()
        {
            //Arrange
            $test_CashMoney = new CashMoney;
            $cents = .95;

            //Act
            $result = $test_CashMoney->getCashMoney($cents);

            //Assert
            $this->assertEquals('3q, 2d'), $result);
        }
    }



?>
