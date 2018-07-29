<?php
/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Helper;

use Magento\Store\Model\StoreManagerInterface;

class Core
{

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(StoreManagerInterface $storeManager)
    {
        $this->storeManager = $storeManager;
    }
    
    /**
     * Convert and format price value for current application store dummy
     *
     * @param   float $value
     * @param   bool $format
     * @param   bool $includeContainer
     * @return  mixed
     */
    public function currency($value, $format = true, $includeContainer = true)
    {
        return $value . ' ' . $this->storeManager->getStore()->getCurrentCurrency()->getCode();
    }
    
}



