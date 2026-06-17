<?php

$sql = array();

// Tiers configuration table
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'tier_discount` (
    `id_tier_discount` INT(11) NOT NULL AUTO_INCREMENT,
    `min_spend` DECIMAL(20,6) NOT NULL,
    `discount_percent` DECIMAL(10,2) NOT NULL,
    `discount_type` VARCHAR(50) NOT NULL DEFAULT "percentage",
    `free_shipping` TINYINT(1) NOT NULL DEFAULT 0,
    `active` TINYINT(1) NOT NULL DEFAULT 1,
    `position` INT(11) NOT NULL DEFAULT 0,
    `date_add` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `date_upd` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_tier_discount`),
    INDEX (`min_spend`),
    INDEX (`active`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

// Customer spending cache (for performance)
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'customer_spending_cache` (
    `id_customer_spending_cache` INT(11) NOT NULL AUTO_INCREMENT,
    `id_customer` INT(11) NOT NULL,
    `spent_last_30` DECIMAL(20,6) NOT NULL DEFAULT 0,
    `spent_last_90` DECIMAL(20,6) NOT NULL DEFAULT 0,
    `spent_last_365` DECIMAL(20,6) NOT NULL DEFAULT 0,
    `spent_lifetime` DECIMAL(20,6) NOT NULL DEFAULT 0,
    `last_updated` DATETIME NOT NULL,
    PRIMARY KEY (`id_customer_spending_cache`),
    UNIQUE KEY (`id_customer`),
    INDEX (`last_updated`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}

return true;