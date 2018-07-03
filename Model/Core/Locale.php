<?php
/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Model\Core;

class Locale extends \Magento\Framework\Locale\Resolver
{

    /**
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->getLocale();
    }

}

