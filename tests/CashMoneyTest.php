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
            $this->assertEquals('3 0 0 0', $result);
        }

        function test_getCashMoney_countDimes()
        {
            //Arrange
            $test_CashMoney = new CashMoney;
            $cents = .95;

            //Act
            $result = $test_CashMoney->getCashMoney($cents);

            //Assert
            $this->assertEquals('3 2 0 0', $result);
        }

        function test_getCashMoney_countNickels()
        {
            //Arrange
            $test_CashMoney = new CashMoney;
            $cents = .90;

            //Act
            $result = $test_CashMoney->getCashMoney($cents);

            //Assert
            $this->assertEquals('3 1 1 0', $result);
        }

        function test_getCashMoney_countPennies()
        {
            //Arrange
            $test_CashMoney = new CashMoney;
            $cents = .94;

            //Act
            $result = $test_CashMoney->getCashMoney($cents);

            //Assert
            $this->assertEquals('3 1 1 4', $result);
        }
    }



?>
