<?php

/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Plugin;

class Template
{

    /**
     * Hook method to declare Mage class globally
     */
    public function beforeToHtml()
    {
        if (!\class_exists('Mage')) {
            class_alias('\LCB\Mage\Framework\Mage', 'Mage');
        }
    }

}
