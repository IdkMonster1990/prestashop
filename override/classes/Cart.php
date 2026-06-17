<?php

class Cart extends CartCore
{
    public function update()
    {
        $result = parent::update();
        
        // Apply tier discount after cart update
        if (Module::isInstalled('customertieredpricing') && Module::isEnabled('customertieredpricing')) {
            $idCustomer = (int)$this->id_customer;
            if ($idCustomer > 0 && Configuration::get('TIER_AUTO_APPLY')) {
                CustomerTieredPricing::applyTierDiscount($this->id, $idCustomer);
            }
        }
        
        return $result;
    }
    
    public function add($auto_date = true, $null_values = false)
    {
        $result = parent::add($auto_date, $null_values);
        
        // Apply tier discount after cart creation
        if (Module::isInstalled('customertieredpricing') && Module::isEnabled('customertieredpricing')) {
            $idCustomer = (int)$this->id_customer;
            if ($idCustomer > 0 && Configuration::get('TIER_AUTO_APPLY')) {
                CustomerTieredPricing::applyTierDiscount($this->id, $idCustomer);
            }
        }
        
        return $result;
    }
}