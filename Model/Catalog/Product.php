<?php
/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Model\Catalog;

class Product extends \Magento\Catalog\Model\Product
{

    /**
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->getLocale();
    }

}


