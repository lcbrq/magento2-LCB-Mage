<?php

/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Model;

class Mage
{

    /**
     * @return \LCB\Mage\Model\App
     */
    public static function app()
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create("\LCB\Mage\Model\App");
    }

    /**
     * Replacement for Mage::helper
     * 
     * @param string $class
     * @return unknown
     */
    public static function helper($class)
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create("\LCB\Mage\Helper\\" . implode('\\', array_map('ucwords', explode('/', $class))));
    }

    /**
     * @param string $class
     * @return unknown
     */
    public static function getSingleton($class)
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create("\LCB\Mage\Model\\" . implode('\\', array_map('ucwords', explode('/', $class))));
    }

    /**
     * Replacement for Mage::getStoreConfig
     * 
     * @param string $value
     * @param mixed $store
     * @return string
     */
    public static function getStoreConfig($value, $store = false)
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create("\Magento\Framework\App\Config\ScopeConfigInterface")->getValue(
                        $value, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

}
