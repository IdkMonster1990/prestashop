<?php

$sql = array();
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tier_discount`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'customer_spending_cache`';

foreach ($sql as $query) {
    Db::getInstance()->execute($query);
}

return true;