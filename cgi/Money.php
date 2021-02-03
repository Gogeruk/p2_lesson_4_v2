<?php

namespace Nick\My\Vendor;

require_once "autoloader.php";


/**
 * Создать класс Money...
 */
class Money
{

    /**
     * ...с приватным свойствами: amount (int|float)
     * и currency (Currency)
     */
    private $_amount;
    private $_currency;

    /**
     * Число и валюту принимать через конструктор класса.
     */
    function __construct($amount, Currency $currency)
    {
        $this->_setAmount($amount);
        $this->_setCurrency($currency);
    }

    /**
     * Для свойств amount и currency написать гэттеры и сеттеры.
     */
    private function _setAmount($amount)
    {
        if(!is_numeric($amount)){
            throw new InvalidArgumentException("Should be a number!");
        }
        $this->_amount = $amount;
    }
    private function _setCurrency($currency)
    {
        $this->_currency = $currency;
    }

    public function getAmount()
    {
        return $this-> _amount;
    }
    public function getCurrency()
    {
        return $this->_currency->getIsoCode();
    }

    /**
     * Реализовать публичный метод equals для
     * сравнения двух двух денежных единиц по числу и валюте.
     */
    public function equals(Money $cur1)
    {
        if ($cur1-> _amount == $this-> _amount and $cur1-> _currency == $this-> _currency) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Реализовать метода add (для суммирования денежных единиц),
     * который будет принимать объект Money.
     * Если валюта добавляемого объекта отличается,
     * то выбросить InvalidArgumentException.
     */
    public function add(Money $cur1)
    {
        if ($cur1->_currency != $this->_currency) {
            throw new InvalidArgumentException("Must be the same ISOcode");
        }
        return new Money($cur1-> _amount + $this-> _amount, $cur1->_currency);
    }



}



?>
