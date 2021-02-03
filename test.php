<?php

require_once "autoloader.php";

// Currency
$cur1 = new \Nick\My\Vendor\Currency("CNY");
$cur2 = new \Nick\My\Vendor\Currency("CNY");
echo "\nCurrency test\n";
echo ($cur1-> getIsoCode()). "\n";
echo "\nCurrency equals\n";
var_dump($cur1-> equals($cur2)). "\n\n";
echo "\n\n";

// Money
$mon_cur1 = new \Nick\My\Vendor\Currency("USD");
$mon_cur2 = new \Nick\My\Vendor\Currency("USD");       //    CNY
$cur1 = new \Nick\My\Vendor\Money(4, $mon_cur1);
$cur2 = new \Nick\My\Vendor\Money(222.2, $mon_cur2);

echo "Money test";
echo "\nMoney equals\n";
var_dump($cur1->equals($cur2));



// add
echo "\nMoney add\n";
print_r($cur1->add($cur2));
echo "\n";


















?>
